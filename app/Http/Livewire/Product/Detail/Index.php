<?php

namespace App\Http\Livewire\Product\Detail;

use App\Models\ProductImage;
use App\Models\ProductOption;
use Livewire\Component;

class Index extends Component
{
    public $product;
    public $productImages;
    public $productOptionsMauSac;
    public $productOptionDungLuong;
    public $productOptionChieuDai;

    public function mount($product, ProductImage $productImage, ProductOption $productOption) {
        $this->product = $product;
        $this->productImages = $productImage->getAllIMGByProductId($this->product->id);
        $this->productOptionsMauSac = $productOption->getProductOptionMauSac($this->product->id);
        $this->productOptionDungLuong = $productOption->getProductOptionDungLuong($this->product->id);
        $this->productOptionChieuDai = $productOption->getProductOptionChieuDai($this->product->id);
    }

    public function render()
    {
        return view('livewire.product.detail.index');
    }
}
