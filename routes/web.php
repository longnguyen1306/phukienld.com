<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\HomeindexController;
use App\Http\Controllers\Frontend\HomeProductController;
use App\Http\Controllers\Frontend\HomeCategoryController;
//admin controller
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\AuthController;

//frontend route
Route::get('/', [HomeindexController::class, 'index'])->name('home.index');
Route::get('/san-pham/{slug}.html', [HomeProductController::class, 'index'])->name('home.product');
Route::get('/san-pham/{slug}.html', [HomeProductController::class, 'index'])->name('home.product');
Route::get('/danh-muc/{slug}', [HomeCategoryController::class, 'index'])->name('home.category');


//admin route
Route::prefix('admin')->middleware('admin.login')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
});
Route::get('admin/login', [AuthController::class, 'login'])->name('admin.login');
Route::post('admin/login', [AuthController::class, 'loginSubmit'])->name('admin.login');
Route::get('admin/logout', [AuthController::class, 'logout'])->name('admin.logout');
