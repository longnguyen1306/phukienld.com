<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'image',
    ];

    public function addProductImg($productId, $imgPath) {
        $img = ProductImage::create([
            'product_id' => $productId,
            'image' => $imgPath
        ]);
        return $img;
    }

    public function getAllIMGByProductId($id) {
        return ProductImage::where(['product_id' => $id])->get();
    }

    public function deleteImageById($id) {
        return ProductImage::findOrFail($id)->delete();
    }

}
