<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //文章列表页
    public function index(){
        return view('post/index');
    }
    //文章详情页
    public function show(){
        return view('post/show');
    }
    //文章创建
    public function create(){

    }
    //创建逻辑
    public function store(){

    }
    //编辑文章
    public function edit(){

    }
    //编辑逻辑
    public function update(){

    }
    //删除文章
    public function delete(){

    }
}
