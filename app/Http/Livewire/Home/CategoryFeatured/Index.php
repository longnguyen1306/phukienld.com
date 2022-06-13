<?php

namespace App\Http\Livewire\Home\CategoryFeatured;

use Livewire\Component;

class Index extends Component
{
    public $category;

    public function mount($category) {
        $this->category = $category;
    }

    public function render()
    {
        return view('livewire.home.category-featured.index');
    }
}
