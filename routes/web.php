<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () { 
    return view('main');
});

Route::get('pages','PageController@show');
Route::post('store','PageController@store');
Route::get('pages/{page}/delete','PageController@delete');

Route::get('pages/{page}/edit','PageController@edit');
Route::post('update','PageController@update');