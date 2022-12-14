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

Route::get('/forums/{forum}', 'ForumController@show');

Route::get('/posts/{post}', 'PostController@show');

Route::post('/forums', 'ForumController@store');

Route::post('/posts', 'PostController@store');

Route::post('/replies', 'ReplyController@store');

Route::get('/','ForumController@index');

Auth::routes();


