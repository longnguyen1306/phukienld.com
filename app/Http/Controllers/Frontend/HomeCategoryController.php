<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeCategoryController extends Controller
{
    public function index($slug=null) {
        return view('frontend.category.index', compact('slug'));
    }
}
