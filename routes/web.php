<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
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
    Route::get('/add-to-cart/{productId}',[CartController::class,'addToCart'])->name('addCart')->middleware('customer');
    Route::get('/checkout',[OrderController::class,'checkout'])->name('checkout');
});

Route::get('/sign-up',[CustomerController::class,'showRegisterForm'])->name('customer.register');
Route::post('/sign-up',[CustomerController::class,'register'])->name('customer.register.confirm');
Route::get('/sign-in',[CustomerController::class,'showLoginForm'])->name('customer.login');
Route::post('/sign-in',[CustomerController::class,'login'])->name('customer.login.confirm');
Route::get('/customer-logout',[CustomerController::class,'customerLogout'])->name('customer.logout');
//google
Route::get('/google/redirect', [CustomerController::class,'googleLogin'])->name('google.login');
Route::get('/google/callback', [CustomerController::class ,'googleCallback'])->name("google.callback");
//facebook
Route::get('/facebook/redirect', [CustomerController::class,'facebookLogin'])->name('facebook.login');
Route::get('/facebook/callback', [CustomerController::class ,'facebookCallback'])->name("facebook.callback");

Route::get('/my-profile',[CustomerController::class,'myDashboard'])->name("customer.dashboard")->middleware('customer');
//reset password
// Forgot password form
Route::get('customer/password/reset', [CustomerController::class, 'showLinkRequestForm'])
    ->name('customer.password.request');

// Send reset email
Route::post('customer/password/email', [CustomerController::class, 'sendResetLinkEmail'])
    ->name('customer.password.email');

// Reset form
Route::get('customer/password/reset/{token}', [CustomerController::class, 'showResetForm'])
    ->name('customer.password.reset');

// Handle reset
Route::post('customer/password/reset', [CustomerController::class, 'reset'])
    ->name('customer.password.update');



Auth::routes();

