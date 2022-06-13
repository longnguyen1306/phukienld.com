<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeindexController extends Controller
{
    public $category;

    public function __construct(Category $category) {
        $this->category = $category;
    }

    public function index() {
        $categories = $this->category->getAllCatByStatusLimit(4);

        return view('frontend.index', compact('categories'));
    }
}
