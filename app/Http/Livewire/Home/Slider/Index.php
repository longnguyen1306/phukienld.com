<?php

namespace App\Http\Livewire\Home\Slider;

use App\Models\Banner;
use Livewire\Component;

class Index extends Component
{
    public $homeBanners;

    public function mount(Banner $banner) {
        $this->homeBanners = $banner->getAllBanner();
    }

    public function render()
    {
        return view('livewire.home.slider.index');
    }
}
