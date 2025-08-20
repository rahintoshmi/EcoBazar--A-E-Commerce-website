<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;


Route::name('frontend.')->group(function () {
    //homepage route
    Route::get('/', [HomeController::class, 'homepage'])->name('home');
    //about us route
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/shop/{slug}', [HomeController::class, 'shop'])->name('shop');//for category slug show in frontend shop submenu
    Route::get('/product/{slug}', [HomeController::class, 'singleProduct'])->name('product.view');//for single product view
});
Auth::routes();