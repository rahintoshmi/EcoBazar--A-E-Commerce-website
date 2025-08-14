<?php

namespace App\Http\Controllers\Backend;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    function index(){
        $products = Product::orderBy('status','desc')->latest()->get();
        return view('backend.products.index',compact('products'));
    }
    function create(){
        $categories = Category::where('status',true)->latest()->select('id','title')->get();
        return view('backend.products.create',compact('categories'));
    }
    function store(Request $request){
        $request->validate([
            'title' => 'required|unique:products,title',
            'featured_img' => 'required|mimes:png,jpg',
            'category_id' => 'required',
            'gallImages.*' => 'nullable|mimes:png,jpg'

        ],[
            'gallImages.*.mimes' => 'Only png and jpg images are allowed',
        ]);
        //featured image
        $fileName = str()->slug($request->title) . uniqid() . '.' .$request->featured_img->extension();
        $featuredImage = $request->featured_img->storeAs('products',$fileName,'public');

        //Gallery Image
        $gallImagesName = [];
        if(count($request->gallImages ?? []) > 0){
            foreach($request->gallImages as $gallImg){
                $fileName = str()->slug($request->title) . uniqid() . '.' . $gallImg->extension();
                $gallImagesName[] = $gallImg->storeAs('products',$fileName,'public');
            }

        }
        Product::create([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'short_details' => $request->short_details,
            'long_details' => $request->long_details,
            'additional_info' => $request->additional_info,
            'featured_img' => $featuredImage ?? '',
            'gall_img' => json_encode($gallImagesName ?? []),
            'slug' => str()->slug($request->title),
            'sku' => $request->sku,
            'selling_price' => $request->selling_price,

        ]);
        return to_route('products.index')->with('msg',[
            'res' => 'Product Added Successfully',
        ]);
    }
}
