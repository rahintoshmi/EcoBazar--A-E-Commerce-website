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
    function shop(Request $request , $slug = null){

        $productCategories = Category::has('products')->where('status',true)->select('id','title')->withCount('products')->get();
        if($slug){
            $category = Category::select('id','title')->where('slug',$slug)->first();
            $products = Product::whereHas('category',function($q) use($slug){
                $q->where('slug',$slug);
            })->select('id','slug','title','price','selling_price','featured_img','category_id','stock')->latest()->paginate(15);
        }else{
            $category = null;
            $products = Product::query();
            //search condition
            if($request->search){
                $products->whereLike('title',"%$request->search%");
            }
            //category filter condition
            if($request->category){
                $products->where('category_id', $request->category);
            }
            //min max price filter
            if($request->min_price){
                $products->whereRaw('COALESCE(selling_price,price) >= ?', [$request->min_price]);
            }
            if($request->max_price){
                $products->whereRaw('COALESCE(selling_price,price) <= ?', [$request->max_price]);
            }
            $products = $products->select('id','slug','title','price','selling_price','featured_img','category_id','stock')->latest()->paginate(15);
        }
        return view('frontend.shop',compact('category','products','productCategories'));

    }

    function singleProduct($slug){
        $product = Product::where('slug',$slug)->first();
        return view('frontend.product_details',compact('product'));
    }

    function searchProduct(Request $request){
        $search = $request->search;
        $products = Product::whereLike('title',"%$search%")->select('id','title','slug')->take(10)->latest()->get();
        return $products;
    }
}
