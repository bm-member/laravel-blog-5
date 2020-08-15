<?php

use Illuminate\Support\Facades\Route;

Route::get('post', 'PostController@index');
Route::get('post/create', 'PostController@create');
Route::post('post', 'PostController@store');
Route::get('post/{id}/edit', 'PostController@edit');
Route::post('post/{id}', 'PostController@update');
Route::get('post/{id}/delete', 'PostController@destroy');
Route::get('post/{id}', 'PostController@show');