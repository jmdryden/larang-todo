<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/



Route::auth();
 
Route::get('/home', 'HomeController@index');

Route::get('/welcome', function () {
    return view('welcome');
});
 
Route::get('/', function () {
    return view('index');
});
 
//API routing note prefix
Route::group(['prefix' => 'api/v1'], function() {
    Route::get('todos/active', 'TodoController@getAllActiveTodos');
    Route::get('todos/completed', 'TodoController@getAllCompletedTodos');
    Route::resource('todos', 'TodoController');
});
