<?php

namespace App\Http\Livewire\Home\CategoryFeatured;

use App\Models\SanPham;
use Livewire\Component;

class Index extends Component
{
    public $category;
    public $productByCat;

    public function mount($category, SanPham $sanPham) {
        $this->category = $category;
        $this->productByCat = $sanPham->getProductByCatId($this->category->id);
    }

    public function render()
    {
        return view('livewire.home.category-featured.index');
    }
}
