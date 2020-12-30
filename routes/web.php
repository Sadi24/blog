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

Route::get('/', 'HomeController@index');
Route::get('post/{id}', 'HomeController@show');

Route::resource('admin/posts', 'PostsController')->middleware('auth');;

Route::resource('admin/tags', 'TagsController');

Route::resource('admin/categories', 'CategoryController');

Route::resource('admin/comments', 'CommentController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('lang/{local}', 'HomeController@lang');
