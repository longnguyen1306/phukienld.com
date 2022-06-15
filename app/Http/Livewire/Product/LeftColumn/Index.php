<?php

namespace App\Http\Livewire\Product\LeftColumn;

use App\Models\Category;
use App\Models\SanPham;
use Livewire\Component;

class Index extends Component
{
    public $categories;
    public $product;
    public $newProduct;
    public $itemNewProduct;

    public function mount($product, Category $category, SanPham $sanPham) {
        $this->product = $product;
        $this->categories = $category->getAllCatByStatus();
        $this->newProduct = $sanPham->getAllProductNew();
        $this->itemNewProduct = $sanPham;
    }

    public function render()
    {
        return view('livewire.product.left-column.index');
    }
}
