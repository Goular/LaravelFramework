<?php

namespace App\Admin\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * 登录需要展示的页面
     */
    public function index(){
        return "后台注册页面";
    }
}
