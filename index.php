<?php
session_start();

// Include router class
include("Route.php");

// Home page
Route::add("/",function(){
  if (isset( $_SESSION['user_id'])) {
    header("Location: u/" . $_SESSION["username"]);
  } else {
    require "views/home.php";
  }
});

// User page
Route::add("/u/(.*)",function($var1){
    require "views/user.php";
}, "get");

Route::add("/u/(.*)",function($var1){
    require "views/processPost.php";
}, "post");

Route::add("/login",function(){
    require "views/login.php";
}, "get");

Route::add("/login",function(){
    require "views/processLogin.php";
}, "post");

Route::add("/logout",function(){
    require "views/logout.php";
});

Route::run("/");