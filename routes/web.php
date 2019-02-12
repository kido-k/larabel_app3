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
Route::get('db/add', 'DBController@add');
Route::post('db/add', 'DBController@create');
Route::get('db/edit', 'DBController@edit');
Route::post('db/edit', 'DBController@update');
Route::get('db/del', 'DBController@del');
Route::post('db/del', 'DBController@remove');
Route::get('db/show', 'DBController@show');
