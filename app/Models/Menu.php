<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Menu extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'link',
    ];

    public function getAllMenuPaginate() {
        $menus = Menu::latest()->paginate(3);
        return $menus;
    }

    public function getMenuById($id) {
        $menu = Menu::findOrFail($id);
        return $menu;
    }

    public function addMemu($request) {
        $menu = Menu::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'link' => $request->link
        ]);
        return $menu;
    }

    public function updateMenu($request, $id) {
        $menu = Menu::findOrFail($id)->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'link' => $request->link
        ]);
        return $menu;
    }

    public function deleteMenu($id) {
        return Menu::findOrFail($id)->delete();
    }
}
