<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOption extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_sp',
        'mau_sac',
        'dung_luong',
        'chieu_dai',
    ];

    public function getProductMauSac($id) {
        return ProductOption::where(['id_sp' => $id])->get();
    }

    public function getProductOptionMauSac($id) {
        return ProductOption::where(['id_sp' => $id])->whereNotNull('mau_sac')->get();
    }

    public function getProductOptionDungLuong($id) {
        return ProductOption::where(['id_sp' => $id])->whereNotNull('dung_luong')->get();
    }

    public function getProductOptionChieuDai($id) {
        return ProductOption::where(['id_sp' => $id])->whereNotNull('chieu_dai')->get();
    }

    public function addProductMauSac($productID, $mauSac) {
        $mauSac = ProductOption::create([
            'id_sp' => $productID,
            'mau_sac' => $mauSac,
        ]);
        return $mauSac;
    }

    public function addProductDungLuong($productID, $dungLuong) {
        $dungLuong = ProductOption::create([
            'id_sp' => $productID,
            'dung_luong' => $dungLuong,
        ]);
        return $dungLuong;
    }

    public function addProductChieuDai($productID, $dhieuDai) {
        $dhieuDai = ProductOption::create([
            'id_sp' => $productID,
            'chieu_dai' => $dhieuDai,
        ]);
        return $dhieuDai;
    }
    public function getProductOptionDelete($id, $option) {
        return ProductOption::where(['id_sp' => $id])->whereNotNull($option)->get();
    }

    public function deleteOption($id) {
        return ProductOption::findOrFail($id)->delete();
    }
}
