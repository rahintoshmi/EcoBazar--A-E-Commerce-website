<?php

namespace App\Http\Controllers\Backend;

use Exception;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    function index(){

        $categories = Category::orderBy('status','desc')->latest()->get();
        return view('backend.category.index',compact('categories'));
    }

    public function store(Request $request, $id = null)
    {
    try {
        // Validate request
        $request->validate([
            'title' => 'required|unique:categories,title,' . $id,
            'icon'  => 'nullable|mimes:jpg,png,webp'
        ]);

        $path = null;
        if ($request->hasFile('icon')) {
            $fileName = str($request->title)->slug() . '-' . uniqid() . '.' . $request->icon->extension();
            $path = $request->icon->storeAs('categories', $fileName, 'public');
        }

        // Dynamic success message
        $msg = $id ? 'Category Updated Successfully!' : 'Category Added Successfully!';

        // Create or Update category
        Category::updateOrCreate(
            ['id' => $id],
            [
                'title' => $request->title,
                'slug'  => str($request->title)->slug(),
                'icon'  => $path ?? ($id ? Category::find($id)->icon : null)
            ]
        );

        return to_route('category.index')->with('msg', $this->getMsg($msg));
    } catch (Exception $e) {
        return to_route('category.index')->with('msg', $this->getErrorMsg());
    }
    }
    function edit($id)
    {
        try {
            $category = Category::findOrFail($id);
            return view('backend.category.edit', compact('category'));
        } catch (Exception $e) {
        return redirect()->route('backend.category.index')->with('msg', [
            "type" => "danger",
            "res" => "Category Not Found"
        ]);
    }
    }
    private function getMsg($msg='success',$type='success'){
        return [
            'type' => $type,
            'res' => $msg
        ];
    }
    private function getErrorMsg(){
        return [
            'type' =>'error',
            'res' => $msg ?? 'Something went wrong! Please try again.' 
        ];
    }

    
    //status update
    function statusUpdate($id){
        $category = Category::find($id);
        $category->status = !$category->status;
        $category->save();
        return back();
    }

}
