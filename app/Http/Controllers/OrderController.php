<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    function checkout(){
        $carts = Cart::with('product')->where('customer_id',auth('customer')->id())->get();

        return view('frontend.billing Information',compact('carts'));
    }
}
