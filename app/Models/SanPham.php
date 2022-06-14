<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SanPham extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'ten',
        'slug',
        'ma_sp',
        'gia',
        'gia_giam',
        'anh_dai_dien',
        'danh_muc_id',
        'sp_moi',
        'so_luong_sp',
        'tinh_trang',
        'mo_ta_ngan',
        'chi_tiet',
        'video',
        'luot_mua',
        'luot_xem',
    ];

    public function getAllProductPaginate() {
        return SanPham::with('category')->latest()->paginate(5);
    }

    public function getProductById($id) {
        return SanPham::findOrFail($id);
    }

    public function addProduct($data) {
        $product = SanPham::create($data);
        return $product;
    }

    public function updateProduct($id, $data) {
        $product = SanPham::findOrFail($id)->update($data);
        return $product;
    }

    public function deleteProduct($id) {
        return SanPham::findOrFail($id)->delete();
    }

    public function category() {
        return $this->belongsTo(Category::class, 'danh_muc_id', 'id');
    }

}
