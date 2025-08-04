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