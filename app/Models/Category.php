<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'image',
        'status',
    ];

    public function getAllCatByStatus() {
        $cats = Category::where(['status' => 1])->get();

        return $cats;
    }

    public function getAllCategoryPaginate() {
        $category = Category::latest()->paginate(3);
        return $category;
    }

    public function addProductCategory($request, $imageLink) {
        $category = Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'image' => $imageLink
        ]);
        return $category;
    }

    public function getCategoryById($id) {
        $category = Category::findOrFail($id);
        return $category;
    }

    public function updateCategory($request, $id, $imageLink= '') {
        $category = Category::findOrFail($id)->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'image' => $imageLink
        ]);
        return $category;
    }

    public function deleteCategory($id) {
        return Category::findOrFail($id)->delete();
    }

    public function changeStatus($id) {
        $cat = $this->getCategoryById($id);
        $category = Category::findOrFail($id)->update([
            'status' => !$cat->status,
        ]);
        return $category;
    }
}
