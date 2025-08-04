<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index(){
        return view('backend.category.index');
    }

    function store(Request $request){
        // $request->validate([
        //     'icon' => 'required|mimes:jpg,png,webp'
        // ])
        if($request->hasFile('icon')){
            $fileName = str($request->title)->slug(). '-'.uniqid(). '.' .$request->icon->extension();
            $request->icon->storeAs('categories',$fileName,'public');

        }
        // dd($fileName);
        // return back()->with('msg',[
        //     "type " => "success",
        //     "res" => "Category Added Successfully"

        // ]);

    }
}
