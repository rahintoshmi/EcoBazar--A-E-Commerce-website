<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;


Auth::routes();

Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
