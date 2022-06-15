<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeProductController extends Controller
{
    public function index($slug) {
        return view('frontend.product.index', compact('slug'));
    }
}
