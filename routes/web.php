<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function (){
    dd("test route");
});

Route::resource('categories', 'CategoryController');
