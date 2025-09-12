<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\CustomerController;
use App\Http\Controllers\Frontend\HomeController;


Route::name('frontend.')->group(function () {
    //homepage route
    Route::get('/', [HomeController::class, 'homepage'])->name('home');
    //about us route
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/shop/{slug?}', [HomeController::class, 'shop'])->name('shop');//for category slug show in frontend shop submenu
    Route::get('/product/{slug}', [HomeController::class, 'singleProduct'])->name('product.view');//for single product view
    Route::get('/search', [HomeController::class, 'searchProduct'])->name('product.search');//for search product
});

Route::get('/sign-up',[CustomerController::class,'showRegisterForm'])->name('customer.register');
Route::post('/sign-up',[CustomerController::class,'register'])->name('customer.register.confirm');
Route::get('/sign-in',[CustomerController::class,'showLoginForm'])->name('customer.login');
Route::post('/sign-in',[CustomerController::class,'login'])->name('customer.login.confirm');
//google
Route::get('/google/redirect', [CustomerController::class,'googleLogin'])->name('google.login');
Route::get('/google/callback', [CustomerController::class ,'googleCallback'])->name("google.callback");


Route::get('/my-profile',function(){
    echo "Welcome To our Dashboard " . auth('customer')->user()->name;
})->name("customer.dashboard")->middleware('customer');
Auth::routes();
