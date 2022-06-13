<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\FunctionsCustom\Functions;
use App\Models\Banner;
use Illuminate\Http\Request;

class AdminBannerController extends Controller
{
    public $banner;
    public $fileUpload;

    public function __construct(Banner $banner, Functions $functions) {
        $this->banner = $banner;
        $this->fileUpload = $functions;
    }

    public function index() {
        $banners = $this->banner->getHomeBannerPaginate();

        return view('backend.banners.home-banner.index', compact('banners'));
    }

    public function create() {
        return view('backend.banners.home-banner.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|min:4',
            'image'=> 'required|image'
        ]);

        if ($request->hasFile('image')) {
            $image = $this->fileUpload->uploadImage($request->image, 'banners', 666, 450);
            if ($this->banner->addHomeBanner($request, $image)) {
                toastr()->success("Thêm thành công");
                return redirect()->route('admin.banners.home-banner.index');
            } else {
                toastr()->error('Có lỗi');
                return back();
            }
        } else {
            toastr()->error('Chọn file');
            return back()->withInput();
        }
    }

    public function edit($id) {
        $banner = $this->banner->getHomeBannerById($id);

        return view('backend.banners.home-banner.edit', compact('banner'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required|min:4',
        ]);

        $banner = $this->banner->getHomeBannerById($id);

        if ($request->hasFile('image')) {
            if (!empty($banner->image)) {
                if (file_exists(public_path($banner->image))) {
                    unlink(public_path($banner->image));
                }
            }

            $imagePath = $this->fileUpload->uploadImage($request->image, 'banners', 666, 450);

            if ($this->banner->updateHomeBanner($request, $imagePath, $id)) {
                toastr()->success('Update banner thành công');
                return redirect()->route('admin.banners.home-banner.index');
            } else {
                toastr()->error('update Lỗi');
                return back();
            }
        } else {
          if ($this->banner->updateHomeBanner($request, $banner->image, $id)) {
              toastr()->success('Update banner thành công');
              return redirect()->route('admin.banners.home-banner.index');
          }else {
              toastr()->error('update Lỗi');
              return back();
          }
        }
    }

    public function delete($id) {
        $banner = $this->banner->getHomeBannerById($id);

        if (!empty($banner->image)) {
            if (file_exists(public_path($banner->image))) {
                unlink(public_path($banner->image));
            }
        }

        if ($this->banner->deleteHomeBanner($id)) {
            toastr()->success('Xoá thành công');
            return back();
        } else {
            toastr()->error('update Lỗi');
            return back();
        }
    }
}
