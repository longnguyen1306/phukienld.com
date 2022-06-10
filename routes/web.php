<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\HomeindexController;
use App\Http\Controllers\Frontend\HomeProductController;
use App\Http\Controllers\Frontend\HomeCategoryController;

//frontend route
Route::get('/', [HomeindexController::class, 'index'])->name('home.index');
Route::get('/san-pham/{slug}.html', [HomeProductController::class, 'index'])->name('home.product');
Route::get('/san-pham/{slug}.html', [HomeProductController::class, 'index'])->name('home.product');
Route::get('/danh-muc/{slug}', [HomeCategoryController::class, 'index'])->name('home.category');
