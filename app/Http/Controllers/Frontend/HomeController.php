<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Frontend\HomeController;

class HomeController extends Controller
{
    //display the homepage
    function homepage()
    {
        return view('frontend.index');
    }
    //display the about page
    function about()
    {
        return view('frontend.about');
    }
    function shop($slug = null){
        if($slug){
            $category = Category::select('id','title')->where('slug',$slug)->first();
        $products = Product::whereHas('category',function($q) use($slug){
            $q->where('slug',$slug);
        })->select('id','slug','title','price','selling_price','featured_img','category_id')->latest()->paginate(15);  
    }else{
        $category = null;
        $products = Product::select('id','slug','title','price','selling_price','featured_img','category_id')->latest()->paginate(15);
    }
    return view('frontend.shop',compact('category','products'));
        
    }
    function singleProduct($slug){
        $product = Product::where('slug',$slug)->first();
        return view('frontend.product_details',compact('product'));
    }
}
