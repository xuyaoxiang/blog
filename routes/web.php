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
Route::get('/posts','Postcontroller@index');
//文字详情页
Route::post('/posts','PostController@show');
//创建文章
Route::get('/posts/create','PostController@create');
//创建逻辑
