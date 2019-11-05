<?php

// Include router class
include('Route.php');

// home page
Route::add('/',function(){
    require "views/home.php";
});

// Accept only numbers as parameter. Other characters will result in a 404 error
Route::add('/u/(.*)',function($var1){
    require "views/user.php";
});

Route::run('/');