<?php

namespace App\Providers;
use App\Models\Cart;
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
            return $view->with('categories' , Category::where('status',true)->latest()->get())->with('cart',[
              'totalItem' => Cart::where('customer_id',auth('customer')->id())->count(),
              'totalAmount' => Cart::where('customer_id',auth('customer')->id())->get()->sum(function($cartItem){
                 $price = $cartItem->product->selling_price ?? $cartItem->product->price;
                 return $price * $cartItem->quantity;
              }),

            ]);

        });
        View()->composer('frontend.index' ,function ($view){
            return $view->with('categories' , Category::where('status',true)->latest()->get());

        });

    }
}
