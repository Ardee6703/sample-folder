<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hellow','App\Http\Controllers\HelloController@index');

// Route::get('/hello','App\Http\Controllers\HelloController@index');
