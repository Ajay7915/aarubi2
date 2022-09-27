<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\FrontendController;

Route::get('/', function () {
    return view('frontend/index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('dashboard',DashboardController::class);
Route::resource('admin_about',AboutController::class);
Route::resource('admin_review',ReviewController::class);
Route::resource('admin_home',HomeController::class);



// Admin Product //
Route::get('admin_product',[ProductController::class,'index'])->name('admin.product');
Route::post('admin_product_store',[ProductController::class,'store'])->name('admin.product.store');
Route::post('admin_product_update\{id}',[ProductController::class,'update'])->name('admin.product.update');
Route::get('admin_product_create',[ProductController::class,'create'])->name('admin.product.create');
Route::get('admin_product_edit\{id}',[ProductController::class,'edit'])->name('admin.product.edit');
Route::delete('admin_product_destroy\{id}',[ProductController::class,'destroy'])->name('admin.product.destroy');

// Client Message
Route::get('admin_client_message',[ClientMessageController::class,'index'])->name('admin.client.message');
