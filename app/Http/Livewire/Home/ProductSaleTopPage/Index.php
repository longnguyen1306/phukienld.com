<?php

namespace App\Http\Livewire\Home\ProductSaleTopPage;

use App\Models\SanPham;
use Livewire\Component;

class Index extends Component
{
    public $products;

    public function mount(SanPham $sanPham) {
        $this->products = $sanPham->getAllProduct();
    }

    public function render()
    {
        return view('livewire.home.product-sale-top-page.index');
    }
}
