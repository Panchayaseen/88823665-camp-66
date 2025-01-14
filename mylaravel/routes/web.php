<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;

Route::get('/login', 
    [LoginController::class, 'index']);

Route::get('/register', 
    [RegisterController::class, 'index']);

 Route::get('/home', 
    [HomeController::class, 'index']);

Route::get("/", function(){
    return view("layouts.default");});  

//  Route::get('/home', function(){
    // return view("layouts.default");
    // });

Route::get('/mycontroller/{id?}', 
    [MyController::class,'myfunction']);

Route::post("/mycontroller/{id?}", 
    [MyController::class,'myfunction']);
    
 Route::post("/hello", function(){
    return "<h1>Hello World!</h1>";});
