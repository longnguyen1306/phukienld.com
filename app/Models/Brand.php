<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'image',
    ];

    public function getAllBrandPaginate() {
        return Brand::latest()->paginate(3);
    }

    public function addBrand($request, $imgPath) {
        $brand = Brand::create([
            'name' => $request->name,
            'image' => $imgPath
        ]);
        return $brand;
    }
}
