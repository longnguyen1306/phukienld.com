<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeAuthController extends Controller
{
    public function logout() {
        if (Auth::check()) {
            Auth::logout();
            return back();
        } else {
            return  back();
        }
    }
}
