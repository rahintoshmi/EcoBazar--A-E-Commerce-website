<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    function addTocart(Request $request,$productId){
        if(Cart::where('product_id',$productId)->where('customer_id',auth('customer')->id())->exists()){
            Cart::where('product_id',$productId)->where('customer_id',auth('customer')->id())->increment('quantity', $request->quantity ?? 1);
        }else{

            Cart::create([
                'product_id' => $productId,
                'customer_id' => auth('customer')->id(),
                'quantity' => $request->quantity ?? 1,
            ]);
        }
        return back()->with('success','Product added to cart successfully!!!');
    }

}
