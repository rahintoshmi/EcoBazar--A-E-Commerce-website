<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    function index(){
        return view('backend.products.index');
    }
    function create(){
        $categories = Category::where('status',true)->latest()->select('id','title')->get();
        return view('backend.products.create',compact('categories'));
    }
}
