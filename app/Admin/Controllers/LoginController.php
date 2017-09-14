<?php

namespace App\Admin\Controllers;

use App\Tools\FileUpload;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * 登录需要展示的页面
     */
    public function index()
    {
        return view('backend.login.index');
    }

    /**
     * 测试上传文件
     */
    public function login()
    {
        $fileUpload = new FileUpload();

        $flag = \Storage::disk('public')->get('201709141553.jpg');


        $flag = $fileUpload->createFile('201709141553.jpg',$flag);
        dd($flag);
    }
}
