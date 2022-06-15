<?php

namespace App\Http\Livewire\Product;

use App\Models\SanPham;
use Livewire\Component;

class Index extends Component
{
    public $product;

    public function mount($slug, SanPham $sanPham) {
        $this->product = $sanPham->getProductBySlug($slug);
    }

    public function render()
    {
        return view('livewire.product.index');
    }
}
