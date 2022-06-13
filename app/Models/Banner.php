<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
    ];

    public function getAllBanner() {
        return Banner::all();
    }

    public function getHomeBannerPaginate() {
        $banner = Banner::latest()->paginate(3);
        return $banner;
    }

    public function getHomeBannerById($id) {
        return Banner::findOrFail($id);
    }

    public function addHomeBanner($request, $imagePath) {
        $banner = Banner::create([
           'name' => $request->name,
           'image' => $imagePath
        ]);
        return $banner;
    }

    public function updateHomeBanner($request, $imagePath, $id) {
        $banner = Banner::findOrFail($id)->update([
            'name' => $request->name,
            'image' => $imagePath
        ]);

        return $banner;
    }

    public function deleteHomeBanner($id) {
        return Banner::findOrFail($id)->delete();
    }
}
