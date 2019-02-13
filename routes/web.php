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

Route::get('person', 'PersonController@index');
Route::get('person/find', 'PersonController@find');
Route::post('person/find', 'PersonController@search');
Route::get('person/add', 'PersonController@add');
Route::post('person/add', 'PersonController@create');
Route::get('person/edit', 'PersonController@edit');
Route::post('person/edit', 'PersonController@update');
Route::get('person/delete', 'PersonController@delete');
Route::post('person/delete', 'PersonController@remove');

Route::get('board', 'BoardController@index');
Route::get('board/add', 'BoardController@add');
Route::post('board/add', 'BoardController@create');

Route::resource('rest', 'RestAppController');

