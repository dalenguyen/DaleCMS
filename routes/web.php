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

Route::get('/resume', 'HomeController@resume');

Route::get('/admin', 'AdminController@index');

Route::get('/admin/post/create', 'BlogController@create');
Route::get('/admin/post', 'AdminController@post');
Route::post('/admin/post', 'BlogController@store');

Route::resource('/admin/user', 'UserController');

Route::get('/blog', 'BlogController@index');
Route::get('/blog/{post}', 'BlogController@show');
Route::get('/admin/post/{id}/edit', 'BlogController@edit');
Route::put('/admin/post/{id}/update', 'BlogController@update');
Route::delete('/admin/post/{id}', 'BlogController@destroy');

Route::resource('/admin/category', 'CategoryController');
Route::resource('/admin/tag', 'TagController');

Auth::routes();
