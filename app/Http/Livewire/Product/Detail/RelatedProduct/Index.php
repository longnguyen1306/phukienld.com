<?php

namespace App\Http\Livewire\Product\Detail\RelatedProduct;

use App\Models\SanPham;
use Livewire\Component;

class Index extends Component
{
    public $relatedProduct;

    public function mount($product, SanPham $sanPham) {
        $this->relatedProduct = $sanPham->getRelateProduct($product->id);
    }

    public function render()
    {
        return view('livewire.product.detail.related-product.index');
    }
}
