<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\FunctionsCustom\Functions;
use App\Models\Brand;
use Illuminate\Http\Request;

class AdminBrandController extends Controller
{
    public $brand;
    public $fileUpload;

    public function __construct(Brand $brand, Functions $functions) {
        $this->brand = $brand;
        $this->fileUpload = $functions;
    }

    public function index() {
        $brands = $this->brand->getAllBrandPaginate();

        return view('backend.categories.brand.index', compact('brands'));
    }

    public function create() {
        return view('backend.categories.brand.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|min:3',
            'image' => 'required|image'
        ]);

        $imgPath = $this->fileUpload->uploadImage($request->image, 'brands', 200, 100);

        if ($this->brand->addBrand($request, $imgPath)) {
             toastr()->success('Thêm thành công');
             return redirect()->route('admin.categories.brand.index');
        } else {
            toastr()->error('Có lỗi');
            return back();
        }
    }

    public function delete($id) {
        toastr()->warning('Check sản phẩm trước khi xoá');
        return back();
    }

}
