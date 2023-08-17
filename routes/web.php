<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Frontend section
Route::get('/', [\App\Http\Controllers\Frontend\IndexController::class, 'home'])->name('home');



Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/', [App\Http\Controllers\AdminController::class, 'admin'])->name('admin');

    // Banner
    Route::resource('/banner', \App\Http\Controllers\BannerController::class);
    Route::post('/banner_status', [\App\Http\Controllers\BannerController::class, 'bannerStatus'])->name('banner.status');

    // Brand
    Route::resource('/brand', \App\Http\Controllers\BrandController::class);
    Route::post('/brand_status', [\App\Http\Controllers\BrandController::class, 'brandStatus'])->name('brand.status');

    // // search brand system
    // Route::get('autosearch', [\App\Http\Controllers\BrandController::class, 'autoSearch'])->name('autosearch');
    // Route::get('search', [\App\Http\Controllers\BrandController::class, 'search'])->name('search');


    // Category
    Route::resource('/category', \App\Http\Controllers\CategoryController::class);
    Route::post('/category_status', [\App\Http\Controllers\CategoryController::class, 'categoryStatus'])->name('category.status');

    // Product
    Route::resource('/product', \App\Http\Controllers\ProductController::class);
    Route::post('/product_status', [\App\Http\Controllers\ProductController::class, 'productStatus'])->name('product.status');

    // search Product system
    Route::get('autosearch', [\App\Http\Controllers\ProductController::class, 'autoSearch'])->name('autosearch');
    Route::get('search', [\App\Http\Controllers\ProductController::class, 'search'])->name('search');

    // Shipping
    Route::resource('/shipping', \App\Http\Controllers\ShippingController::class);
    Route::post('/shipping_status', [\App\Http\Controllers\ShippingController::class, 'shippingStatus'])->name('shipping.status');

    // User
    Route::resource('/user', \App\Http\Controllers\UserController::class);
    Route::post('/user_status', [\App\Http\Controllers\UserController::class, 'userStatus'])->name('user.status');
});
