<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return 'Hello';
});

Route::get('/auth', function() {
    // if(Auth::check()) { //auth()->check()
    //     return 'Login';
    // } else {
    //     return 'Not login';
    // }
    // return Auth::user()->name;
    // return auth()->user()->name;
    // return Auth::user()->id;
    // return auth()->user()->id;
    // return Auth::id();
    // return auth()->id();
})->middleware('auth');

Route::group(['middleware' => 'auth'], function() {
    Route::get('post', 'PostController@index');
    Route::get('post/create', 'PostController@create');
    Route::post('post', 'PostController@store');
    Route::get('post/{id}/edit', 'PostController@edit');
    Route::post('post/{id}', 'PostController@update');
    Route::get('post/{id}/delete', 'PostController@destroy');
    Route::get('post/{id}', 'PostController@show');
});


Auth::routes();

Route::get('/home', 'HomeController@index');
