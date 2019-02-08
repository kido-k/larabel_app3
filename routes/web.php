<?php

use App\Http\Middleware\ExtendMiddleware;

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello','HelloController@index');
Route::post('hello','HelloController@post');

Route::get('for','ForController@index');

Route::get('extend','ExtendController@index')
        ->middleware('extend');

