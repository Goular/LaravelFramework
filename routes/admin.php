<?php
Route::group(['prefix' => 'admin'], function () {
    //根目录的内容
    Route::get('/', '\App\Admin\Controllers\IndexController@index');
    //登录展示
    Route::get('/login', '\App\Admin\Controllers\LoginController@index');
    //登录行为
    Route::post('/login', '\App\Admin\Controllers\LoginController@login');
    //注册展示
    Route::get('/register', '\App\Admin\Controllers\RegisterController@index');
    //注册行为
    Route::post('/register', '\App\Admin\Controllers\RegisterController@register');
});