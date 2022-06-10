<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\HomeindexController;
use App\Http\Controllers\Frontend\HomeProductController;
use App\Http\Controllers\Frontend\HomeCategoryController;
//admin controller
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\AdminMenuController;

//frontend route
Route::get('/', [HomeindexController::class, 'index'])->name('home.index');
Route::get('/san-pham/{slug}.html', [HomeProductController::class, 'index'])->name('home.product');
Route::get('/san-pham/{slug}.html', [HomeProductController::class, 'index'])->name('home.product');
Route::get('/danh-muc/{slug}', [HomeCategoryController::class, 'index'])->name('home.category');


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

});
Route::get('admin/login', [AuthController::class, 'login'])->name('admin.login');
Route::post('admin/login', [AuthController::class, 'loginSubmit'])->name('admin.login');
Route::get('admin/logout', [AuthController::class, 'logout'])->name('admin.logout');
