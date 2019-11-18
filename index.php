<?php

// Include router class
include("Route.php");

// Home page
Route::add("/",function(){
    require "views/home.php";
});

// User page
Route::add("/u/(.*)",function($var1){
    require "views/user.php";
});

Route::add("/login",function($var1){
    require "views/login.php";
});

Route::run("/");