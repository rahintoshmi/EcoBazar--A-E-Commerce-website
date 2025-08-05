<?php

//for profile initials
function getProfileImg($name = null){
    $name =$name ?? auth()->user()->name;
    return "https://api.dicebear.com/9.x/initials/svg?seed= $name";
}

//route active side menu
function getActiveLink($routeName){
    return request()->routeIs($routeName) ? 'side-menu--active side-menu--open' : ' ';

}

//url remove for application dashboard
function breadcrump(){
    $url = request()->url();
    $urlArray = str($url)->explode('backend/');
    $path = ucwords(str($urlArray[1])->replace('/','-'));
    return $path;

}

//for status toggle and active - inactive
function generalStatus($status , $href ="#"){
    if($status == 0){
        return ' <a href="'.$href.'" class="btn btn-danger btn-sm">In-active</a> ';
    }else if($status == 1){
         return ' <a href="'.$href.'" class="btn btn-success btn-sm">Active</a> ';
    }
}

//for placeholder image
function getImage($src){
    if($src){
        return asset('storage/'.$src);
    }else{
        return asset('frontend/images/placeholder.webp');
    }
}