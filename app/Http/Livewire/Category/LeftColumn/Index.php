<?php

namespace App\Http\Livewire\Category\LeftColumn;

use App\Models\Brand;
use App\Models\Category;
use Livewire\Component;

class Index extends Component
{
    public $categories;
    public $brands;

    public function mount(Category $category, Brand $brand) {
        $this->categories = $category->getAllCatByStatus();
        $this->brands = $brand->getAllBrand();
    }

    public function render()
    {
        return view('livewire.category.left-column.index');
    }
}
