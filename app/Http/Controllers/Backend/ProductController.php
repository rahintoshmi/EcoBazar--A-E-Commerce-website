<?php

namespace App\Http\Controllers\Backend;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    function index(){
        $products = Product::with('category:id,title')->select('id','title','sku','price','selling_price','category_id','slug','status','stock','featured_img')->orderBy('status','desc')->latest()->get();
        return view('backend.products.index',compact('products'));
    }
    function create(){
        $categories = Category::where('status',true)->latest()->select('id','title')->get();
        return view('backend.products.create',compact('categories'));
    }
    function store(Request $request){
        $request->validate([
            'title' => 'required|unique:products,title',
            'featured_img' => 'required|mimes:png,jpg,webp',
            'category_id' => 'required',
            'gallImages.*' => 'nullable|mimes:png,jpg,webp'

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
    function edit($id){
        $product = Product::find($id);
        $categories = Category::where('status' , true)->latest()->select('id','title')->get();
        return view('backend.products.edit',compact('product','categories'));
    }
    function update(Request $request,$id){
        $request->validate([
            'title' => 'required|unique:products,title,'.$id,
            'featured_img' => 'nullable|mimes:png,jpg,webp,jpeg',
            'category_id' => 'required',
            'gallImages.*' => 'nullable|mimes:png,jpg,webp,jpeg'

        ],[
            'gallImages.*.mimes' => 'Only png and jpg images are allowed',
        ]);

        $product = Product::find($id);
        if($request->hasFile('featured_img')){
            if($product->featured_img){
                Storage::disk('public')->delete($product->featured_img);
            }
            //featured image
            $fileName = str()->slug($request->title) . uniqid() . '.' .$request->featured_img->extension();
            $featuredImage = $request->featured_img->storeAs('products',$fileName,'public');
        }
       
        //Gallery Image
        $gallImagesName = [];
        if(count($request->gallImages ?? []) > 0){
            if(count(json_decode($product->gall_img)) > 0){
                    foreach(json_decode($product->gall_img) as $gallImg){
                        Storage::disk('public')->delete('gallImg');
                    }
                }
            foreach($request->gallImages as $gallImg){
                $fileName = str()->slug($request->title) . uniqid() . '.' . $gallImg->extension();
                $gallImagesName[] = $gallImg->storeAs('products',$fileName,'public');
            }

        }
        $product->update([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'short_details' => $request->short_details,
            'long_details' => $request->long_details,
            'additional_info' => $request->additional_info,
            'featured_img' => $request->hasFile('featured_img') ? $featuredImage : $product->featured_img,
            'gall_img' => count($request->gallImages ?? []) > 0 ? json_encode($gallImagesName ?? []) : $product->gall_img,
            'slug' => str()->slug($request->title),
            'sku' => $request->sku,
            'selling_price' => $request->selling_price,

        ]);
        return to_route('products.index')->with('msg',[
            'res' => 'Product Updated Successfully',
        ]);
    }
}
