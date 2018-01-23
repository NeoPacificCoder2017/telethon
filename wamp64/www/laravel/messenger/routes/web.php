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

Route::get('/', function () {
    return view('messages/message');
});

Route::get('messages','MessageController@all');

Route::get('messages/new','MessageController@new');

Route::get('messages/{messageId}','MessageController@show');

Route::post('messages','MessageController@create');

