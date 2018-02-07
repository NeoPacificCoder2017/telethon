<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('users', 'UserController@all');
Route::get('users/new', 'UserController@new');
Route::post('users', 'UserController@create');
Route::get('users/{userId}', 'UserController@show'); 
Route::get('users/{userId}/edit', 'UserController@edit');
Route::post('users/{userId}', 'UserController@update');
Route::delete('users/{userId}', 'UserController@destroy')->name('delete');