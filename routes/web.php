<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;


Route::name('frontend.')->group(function () {
    //homepage route
    Route::get('/', [HomeController::class, 'homepage'])->name('home');
    //about us route
    Route::get('/about', [HomeController::class, 'about'])->name('about');
});
Auth::routes();