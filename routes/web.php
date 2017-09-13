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
//前台模块
Route::get('/','\App\Http\Controllers\IndexController@index');

//登录模块
Route::get('/login','\App\Http\Controllers\LoginController@index');

//注册模块
Route::get('/register','\App\Http\Controllers\RegisterController@index');

//验证模块
Route::group(['prefix' => 'validate'], function () {
    //验证码模块的使用
    Route::get('/captcha/img','\App\Http\Controllers\CaptchaController@createImg');
    Route::get('/captcha/imgUrl','\App\Http\Controllers\CaptchaController@createUrl');
    Route::get('/captcha/imgHtml','\App\Http\Controllers\CaptchaController@createHtml');

    //验证短信发送模块的使用
    Route::get('/sms/code/{id}','\App\Http\Controllers\SmsController@sendSms');
});



//引入管理后台的路由管理
include_once('admin.php');