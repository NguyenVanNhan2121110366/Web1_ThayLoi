<?php

//Backend
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\ProductController;

//Frontend
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\ProductController as SanPham;




Route::get("/", [HomeController::class, "index"])->name('site.home');

Route::get("/san-pham", [SanPham::class, "index"])->name('site.products');

Route::get("/chi-tiet-san-pham/{slug}", [SanPham::class, 'detail'])->name('site.products.detail');

Route::get("lien-he", [ContactController::class, 'index'])->name('site.contact');


//Admin
Route::prefix("admin")->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard.index');

    //Product
    Route::prefix("product")->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('admin.product.index');
        Route::get('trash', [ProductController::class, 'trash'])->name('admin.product.trash');
        Route::get('show/{id}', [ProductController::class, 'show'])->name('admin.product.show');
        Route::get('create', [ProductController::class, 'create'])->name('admin.product.create');
        Route::post('store', [ProductController::class, 'store'])->name('admin.product.store');
        Route::get('edit/{id}', [ProductController::class, 'edit'])->name('admin.product.edit');
        Route::put('update/{id}', [ProductController::class, 'update'])->name('admin.product.update');
        Route::get('delete/{id}', [ProductController::class, 'delete'])->name('admin.product.delete');
        Route::get('restore/{id}', [ProductController::class, 'restore'])->name('admin.product.restore');
        Route::get('destroy/{id}', [ProductController::class, 'destroy'])->name('admin.product.destroy');
    });

    //Category
    Route::prefix("category")->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('admin.category.index');
        Route::get('trash', [CategoryController::class, 'trash'])->name('admin.category.trash');
        Route::get('show/{id}', [CategoryController::class, 'show'])->name('admin.category.show');
        Route::get('create', [CategoryController::class, 'create'])->name('admin.category.create');
        Route::post('store', [CategoryController::class, 'store'])->name('admin.category.store');
        Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::put('update/{id}', [CategoryController::class, 'update'])->name('admin.category.update');
        Route::get('delete/{id}', [CategoryController::class, 'delete'])->name('admin.category.delete');
        Route::get('restore/{id}', [CategoryController::class, 'restore'])->name('admin.category.restore');
        Route::get('destroy/{id}', [CategoryController::class, 'destroy'])->name('admin.category.destroy');
    });
});



