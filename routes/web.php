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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/', [App\Http\Controllers\AdminController::class, 'admin'])->name('admin');

    // Brand
    Route::resource('/brand', \App\Http\Controllers\BrandController::class);
    Route::post('/brand_status', [\App\Http\Controllers\BrandController::class, 'brandStatus'])->name('brand.status');
});
