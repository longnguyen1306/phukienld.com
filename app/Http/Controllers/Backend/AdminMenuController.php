<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\AddMenuRequest;
use App\Http\Requests\Backend\editMenuRequest;
use App\Models\Menu;
use Illuminate\Http\Request;

class AdminMenuController extends Controller
{
    public $menu;

    public function __construct(Menu $menu) {
        $this->menu = $menu;
    }

    public function index() {
        $menus = $this->menu->getAllMenuPaginate();

        return view('backend.menus.header-menu.index', compact('menus'));
    }

    public function create() {
        return view('backend.menus.header-menu.create');
    }

    public function store(AddMenuRequest $request) {
        $menu = $this->menu->addMemu($request);

        if ($menu) {
            toastr()->success("Thêm menu thành công");
            return redirect()->route('admin.menus.header-menu.index');
        } else {
            toastr()->error('Có lỗi, Vui lòng kiểm tra lại');
            return back();
        }
    }

    public function edit($id) {
        $menu = $this->menu->getMenuById($id);

        return view('backend.menus.header-menu.edit', compact('menu'));
    }

    public function update(editMenuRequest $request, $id) {
        if ($this->menu->updateMenu($request, $id)) {
            toastr()->success("Sửa menu thành công");
            return redirect()->route('admin.menus.header-menu.index');
        } else {
            toastr()->error('Có lỗi, Vui lòng kiểm tra lại');
            return back();
        }
    }

    public function delete($id) {
        if ($this->menu->deleteMenu($id)) {
            toastr()->success("Xoá menu thành công");
            return back();
        } else {
            toastr()->error('Có lỗi, Vui lòng kiểm tra lại');
            return back();
        }
    }
}
