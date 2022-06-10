<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\FunctionsCustom\Functions;
use App\Http\Requests\Backend\ProductCategory\addProductCategory;
use App\Models\Category;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class AdminCategoryController extends Controller
{
    public $category;
    public $fileUpload;

    public function __construct(Category $category, Functions $functions) {
        $this->category = $category;
        $this->fileUpload = $functions;
    }

    public function index() {
        $categories = $this->category->getAllCategoryPaginate();

        return view('backend.categories.product-category.index', compact('categories'));
    }

    public function create() {
        return view('backend.categories.product-category.create');
    }

    public function store(addProductCategory $request) {

        if ($request->hasFile('image')) {
           $imageLink = $this->fileUpload->uploadImage($request->image, 'category', '234', '350');
        }

        $category = $this->category->addProductCategory($request, $imageLink);
        if ($category) {
            toastr()->success('thêm thành công');
            return redirect()->route('admin.categories.product-category.index');
        } else {
            toastr()->error('lỗi');
            return back();
        }
    }

    public function edit($id) {
        $category = $this->category->getCategoryById($id);

        return view('backend.categories.product-category.edit', compact('category'));
    }

    public function update(Request $request, $id) {
        $cat = $this->category->getCategoryById($id);

        $request->validate([
            'name' => 'required'
        ]);

        if ($request->hasFile('image')) {
           if (!empty($cat->image)) {
               if (file_exists(public_path($cat->image))) {
                   unlink(public_path($cat->image));
               }
           }
            $imageLink = $this->fileUpload->uploadImage($request->image, 'category', '234', '350');
            $this->category->updateCategory($request, $id, $imageLink);
            toastr()->success('Sửa danh mục thành công');
            return redirect()->route('admin.categories.product-category.index');
        } else {
            if ($this->category->updateCategory($request, $id, $cat->image)) {
                toastr()->success('Sửa danh mục thành công');
                return redirect()->route('admin.categories.product-category.index');
            } else {
                toastr()->error('Lỗi');
                return back();
            }
        }
    }

    public function delete($id) {
        $cat = $this->category->getCategoryById($id);
        if (!empty($cat->image)) {
            if (file_exists(public_path($cat->image))) {
                unlink(public_path($cat->image));
            }
        }
//        kiểm tra sản phẩm trước khi xoá

        if ($this->category->deleteCategory($id)) {
            toastr()->success('Xoá danh mục thành công');
            return back();
        } else {
            toastr()->error('Lỗi');
            return back();
        }
    }

    public function changeStatus ($id) {
        $this->category->changeStatus($id);
        toastr()->success('Đổi trạng thái danh mục thành công');
        return back();
    }
}
