<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', 'HelloController@index');
Route::post('hello', 'HelloController@post');

Route::get('for', 'ForController@index');

Route::get('extend', 'ExtendController@index')
    ->middleware('extend');

Route::get('validate', 'ValidateController@index');
Route::post('validate', 'ValidateController@post');

Route::get('cookie', 'CookieController@index');
Route::post('cookie', 'CookieController@post');

Route::get('db', 'DBController@index');
Route::post('db', 'DBController@post');

