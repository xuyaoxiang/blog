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

//文章列表页
Route::get('/posts', 'PostController@index');
//文字详情页
Route::post('/posts', 'PostController@show');
//创建文章
Route::get('/posts/create', 'PostController@create');
//创建逻辑
Route::post('posts', 'PostController@store');
//编辑文章
Route::get('/posts/{post}/edit', 'PostController@edit');
//编辑逻辑
Route::put('/posts/{post}', 'PostController@update');
//删除文章
Route::get('/posts/delete', 'PostController@delete');

