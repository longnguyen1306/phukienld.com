<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\FunctionsCustom\Functions;
use App\Http\Requests\Backend\Product\AddProductRequest;
use App\Http\Requests\Backend\Product\UpdateProductRequest;
use App\Models\Category;
use App\Models\ProductImage;
use App\Models\ProductOption;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminProductController extends Controller
{
    public $product;
    public $category;
    public $fileUpload;
    public $productImg;
    public $productOption;

    public function __construct(SanPham $sanPham, Category $category, Functions $functions, ProductImage $productImage, ProductOption $productOption) {
        $this->product = $sanPham;
        $this->category = $category;
        $this->fileUpload = $functions;
        $this->productImg = $productImage;
        $this->productOption = $productOption;
    }

    public function index() {
        $products = $this->product->getAllProductPaginate();

        return view('backend.products.list-product.index', compact('products'));
    }

    public function create() {
        $categories = $this->category->getAllCatByStatus();

        return view('backend.products.list-product.create', compact('categories'));
    }

    public function store(AddProductRequest $request) {

        $dataProduct = [
            'ten' => $request->ten,
            'slug' => Str::slug($request->ten),
            'ma_sp' => $request->ma_sp,
            'gia' => $request->gia,
            'gia_giam' => $request->gia_giam,
            'danh_muc_id' => $request->danh_muc_id,
            'sp_moi' => $request->sp_moi,
            'so_luong_sp' => $request->so_luong_sp,
            'tinh_trang' => $request->tinh_trang,
            'mo_ta_ngan' => $request->mo_ta_ngan,
            'chi_tiet' => $request->chi_tiet,
            'video' => $request->video,
            'luot_mua' => $request->luot_mua,
            'luot_xem' => $request->luot_xem,
        ];

        if ($request->hasFile('anh_dai_dien')) {
            $imagePath = $this->fileUpload->uploadImage($request->anh_dai_dien, 'products/thumbnail', 300, 366);
            $dataProduct['anh_dai_dien'] = $imagePath;
        }

        $product = $this->product->addProduct($dataProduct);

        if ($request->hasFile('images')) {
            foreach ($request->images as $img) {
                $imagePath = $this->fileUpload->uploadImage($img, 'products/images/'.$product->id, 420, 512);
                $this->productImg->addProductImg($product->id, $imagePath);
            }
        }

        if ($request->mau_sac) {
            foreach ($request->mau_sac as $mauSac) {
                $this->productOption->addProductMauSac($product->id, $mauSac);
            }
        }

        if ($request->dung_luong) {
            foreach ($request->dung_luong as $dungLuong) {
                $this->productOption->addProductDungLuong($product->id, $dungLuong);
            }
        }

        if ($request->chieu_dai) {
            foreach ($request->chieu_dai as $chieuDai) {
                $this->productOption->addProductChieuDai($product->id, $chieuDai);
            }
        }

        toastr()->success('Thêm thành công');
        return redirect()->route('admin.products.list-product.index');
    }

    public function edit($id) {
        $product = $this->product->getProductById($id);
        $categories = $this->category->getAllCatByStatus();
        $proOption = $this->productOption->getProductMauSac($product->id);
        $proImg = $this->productImg->getAllIMGByProductId($product->id);

        return view('backend.products.list-product.edit', compact('product', 'categories', 'proOption', 'proImg'));
    }

    public function update(UpdateProductRequest $request, $id) {
        $product = $this->product->getProductById($id);
        $dataProduct = [
            'ten' => $request->ten,
            'slug' => Str::slug($request->ten),
            'gia' => $request->gia,
            'gia_giam' => $request->gia_giam,
            'danh_muc_id' => $request->danh_muc_id,
            'sp_moi' => $request->sp_moi,
            'so_luong_sp' => $request->so_luong_sp,
            'tinh_trang' => $request->tinh_trang,
            'mo_ta_ngan' => $request->mo_ta_ngan,
            'chi_tiet' => $request->chi_tiet,
            'video' => $request->video,
            'luot_mua' => $request->luot_mua,
            'luot_xem' => $request->luot_xem,
        ];

        if ($request->hasFile('anh_dai_dien')) {
            if (!empty($product->anh_dai_dien)) {
                if (file_exists(public_path($product->anh_dai_dien))) {
                    unlink(public_path($product->anh_dai_dien));
                }
            }
            $imagePath = $this->fileUpload->uploadImage($request->anh_dai_dien, 'products/thumbnail', 300, 366);
            $dataProduct['anh_dai_dien'] = $imagePath;
        }

        if ($request->hasFile('images')) {
            $imagesOld = $this->productImg->getAllIMGByProductId($product->id);

            foreach ($imagesOld as $oldImg) {
                if (!empty($oldImg->image)) {
                    if (file_exists(public_path($oldImg->image))) {
                        unlink(public_path($oldImg->image));
                    }
                }
                $this->productImg->deleteImageById($oldImg->id);
            }
            foreach ($request->images as $img) {
                $imagePath = $this->fileUpload->uploadImage($img, 'products/images/'.$product->id, 420, 512);
                $this->productImg->addProductImg($product->id, $imagePath);
            }
        }

        if ($this->product->updateProduct($product->id, $dataProduct)) {
            $mauSacs = $this->productOption->getProductOptionDelete($product->id, 'mau_sac');

            if ($request->mau_sac  !==  null) {
                foreach ($mauSacs as $mauSac) {
                    $this->productOption->deleteOption($mauSac->id);
                }
                foreach ($request->mau_sac as $mauSac) {
                    $this->productOption->addProductMauSac($product->id, $mauSac);
                }
            }
            $dungLuongs = $this->productOption->getProductOptionDelete($product->id, 'dung_luong');
            if ($request->dung_luong) {
                foreach ($dungLuongs as $dl) {
                    $this->productOption->deleteOption($dl->id);
                }
                foreach ($request->dung_luong as $dungLuong) {
                    $this->productOption->addProductDungLuong($product->id, $dungLuong);
                }
            }
            $chieuDais = $this->productOption->getProductOptionDelete($product->id, 'chieu_dai');
            if ($request->chieu_dai) {
                foreach ($chieuDais as $cd) {
                    $this->productOption->deleteOption($cd->id);
                }
                foreach ($request->chieu_dai as $chieuDai) {
                    $this->productOption->addProductChieuDai($product->id, $chieuDai);
                }
            }
            toastr()->success('Cạp nhật thành công');
            return redirect()->route('admin.products.list-product.index');
        }
    }

    public function delete($id) {
        if ($this->product->deleteProduct($id)) {
            toastr()->success('xoá thành công');
            return back();
        }
    }

}
