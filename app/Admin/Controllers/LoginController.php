<?php

namespace App\Admin\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * 登录需要展示的页面
     */
    public function index(){
        return "后台登录页面";
    }
}