<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\HomeindexController;
use App\Http\Controllers\Frontend\HomeProductController;
use App\Http\Controllers\Frontend\HomeCategoryController;
use App\Http\Controllers\Frontend\HomeAuthController;
//admin controller
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\AdminMenuController;
use App\Http\Controllers\Backend\AdminCategoryController;
use App\Http\Controllers\Backend\AdminBannerController;
use App\Http\Controllers\Backend\AdminBrandController;
use App\Http\Controllers\Backend\AdminProductController;

//frontend route
Route::get('/', [HomeindexController::class, 'index'])->name('home.index');
Route::get('/san-pham/{slug}.html', [HomeProductController::class, 'index'])->name('home.product');
Route::get('/danh-muc/{slug?}', [HomeCategoryController::class, 'index'])->name('home.category');

Route::get('logout', [HomeAuthController::class, 'logout'])->name('home.logout');
Route::get('dang-nhap', \App\Http\Livewire\Auth\Login::class)->name('home.login');
Route::get('dang-ky', \App\Http\Livewire\Auth\Register::class)->name('home.register');


//admin route
Route::prefix('admin')->middleware('admin.login')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    //menus
    Route::prefix('menus')->name('menus.')->group(function () {
        Route::prefix('header-menu')->controller(AdminMenuController::class)->name('header-menu.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::post('update/{id}', 'update')->name('update');
            Route::get('delete/{id}', 'delete')->name('delete');
        });
    });
    //categories
    Route::prefix('categories')->name('categories.')->group(function () {
        //product-category
        Route::prefix('product-category')->controller(AdminCategoryController::class)->name('product-category.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::post('update/{id}', 'update')->name('update');
            Route::get('delete/{id}', 'delete')->name('delete');
            Route::get('change-status/{id}', 'changeStatus')->name('change-status');
        });
        //brans
        Route::prefix('brand')->controller(AdminBrandController::class)->name('brand.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::post('update/{id}', 'update')->name('update');
            Route::get('delete/{id}', 'delete')->name('delete');
            Route::get('change-status/{id}', 'changeStatus')->name('change-status');
        });
    });
    //banners
    Route::prefix('banners')->name('banners.')->group(function () {
        Route::prefix('home-banner')->controller(AdminBannerController::class)->name('home-banner.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::post('update/{id}', 'update')->name('update');
            Route::get('delete/{id}', 'delete')->name('delete');
            Route::get('change-status/{id}', 'changeStatus')->name('change-status');
        });
    });
    //Product
    Route::prefix('products')->name('products.')->group(function () {
        Route::prefix('list-product')->controller(AdminProductController::class)->name('list-product.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::post('update/{id}', 'update')->name('update');
            Route::get('delete/{id}', 'delete')->name('delete');
            Route::get('change-status/{id}', 'changeStatus')->name('change-status');
        });
    });
});
Route::get('admin/login', [AuthController::class, 'login'])->name('admin.login');
Route::post('admin/login', [AuthController::class, 'loginSubmit'])->name('admin.login');
Route::get('admin/logout', [AuthController::class, 'logout'])->name('admin.logout');
