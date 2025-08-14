<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    function index(){

        $categories = Category::orderBy('status','desc')->latest()->get();
        return view('backend.category.index',compact('categories'));
    }

    function store(Request $request){ 
        $request->validate([ 'title' => 'required|unique:categories,title', 
        'icon' => 'nullable|mimes:jpg,png,webp'
     ]);
      if($request->hasFile('icon')){
         $fileName = str($request->title)->slug(). '-'.uniqid(). '.' .$request->icon->extension();
          $path = $request->icon->storeAs('categories', $fileName ,'public'); 
        } 
        Category::create([ 
            'title' => $request->title,
             'slug' => str($request->title)->slug(), 
             'icon' => $path ?? null ]); 
             return back()->with('msg',[
                
                "type " => "success", 
                "res" => "Category Added Successfully" 
            ]);
         }
    
    //status update
    function statusUpdate($id){
        $category = Category::find($id);
        $category->status = !$category->status;
        $category->save();
        return back();
    }
    function edit($id){

        $category = Category::find($id);
        return view('backend.category.edit', compact('category'));
    }

    function update(Request $request , $id){
        $request->validate([
            'title' => 'required|string|max:255|',
            'icon' => 'required|mimes:jpg,png,webp',
            'status' => 'required|boolean',
        ]);
        $category = Category::find($id);
        $category->title = $request->title;
        $category->status = $request->status;

        if ($request->hasFile('icon')) {
            $fileName = str($request->title)->slug() . '.' . $request->icon->extension();
            $path =  $request->icon->storeAs('categories', $fileName, 'public');
            $category->icon = $path;
        }
        
        $category->save();
        return redirect()->route('category.index')->with('msg',[
            "type" => "success",
            'res' => "Category Updated Successfully"
        ]);
    }
        

    

}
