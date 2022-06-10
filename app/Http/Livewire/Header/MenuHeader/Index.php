<?php

namespace App\Http\Livewire\Header\MenuHeader;

use App\Models\Category;
use App\Models\Menu;
use Livewire\Component;

class Index extends Component
{
    public $menus;
    public $categories;

    public function mount(Menu $menu, Category $category) {
        $this->menus = $menu->getAllMenu();
        $this->categories = $category->getAllCatByStatus();
    }

    public function render()
    {
        return view('livewire.header.menu-header.index');
    }
}
