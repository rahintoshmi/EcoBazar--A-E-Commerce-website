<?php

namespace App\Providers;
use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View()->composer('layouts.frontendlayout' ,function ($view){
            return $view->with('categories' , Category::where('status',true)->latest()->get());

        });
        View()->composer('frontend.index' ,function ($view){
            return $view->with('categories' , Category::where('status',true)->latest()->get());

        });

    }
}
