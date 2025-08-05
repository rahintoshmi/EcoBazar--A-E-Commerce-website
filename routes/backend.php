<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;




Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');

Route::prefix('category/')->name('category.')->controller(CategoryController::class)->group(function(){
    Route::get('/','index')->name('index');
    Route::post('/store','store')->name('store');
    Route::get('/status-update/{id}','statusUpdate')->name('status');
   
});
