<?php

namespace App\Http\Livewire\Category;

use App\Models\Category;
use App\Models\SanPham;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $category;
    public $slug;

    public function mount($slug, SanPham $sanPham, Category $category) {
        $this->slug = $slug;
        if ($this->slug !== null) {
            $this->category = $category->getCategoryBySlug($this->slug);
        } else {
           $this->category = '';
        }
    }

    public function render()
    {
        if ($this->slug !== null) {
            return view('livewire.category.index', [
                'products' => SanPham::with('category')->where(['danh_muc_id' => $this->category->id])->paginate(12)
            ]);
        } else {
            return view('livewire.category.index', [
                'products' => SanPham::with('category')->paginate(12),
            ]);
        }

    }
}
