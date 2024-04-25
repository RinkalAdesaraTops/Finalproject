<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::prefix('admin')->group(function(){
    Route::get('/',function (){
        return view('home');
    });
});
