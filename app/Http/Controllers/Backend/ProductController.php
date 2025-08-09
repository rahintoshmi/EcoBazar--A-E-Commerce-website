<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(){
        return view('backend.products.index');
    }
    function create(){
        return view('backend.products.create');
    }
}
