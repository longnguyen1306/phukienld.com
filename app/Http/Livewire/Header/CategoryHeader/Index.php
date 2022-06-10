<?php

namespace App\Http\Livewire\Header\CategoryHeader;

use App\Models\Category;
use Livewire\Component;

class Index extends Component
{
    public $cats;

    public function mount(Category $category) {
        $this->cats = $category->getAllCatByStatus();
    }

    public function render()
    {
        return view('livewire.header.category-header.index');
    }
}
