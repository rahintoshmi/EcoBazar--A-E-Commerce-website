<?php

namespace App\Http\Controllers\Frontend;

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
}
