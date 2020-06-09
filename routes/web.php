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
/*
//不通过控制器，访问静态页
Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('help', 'StaticPagesController@help')->name('help');
Route::get('about', 'StaticPagesController@about')->name('about');

// 登录入口地址
Route::get('login', 'UsersController@login')->name('login');
// 注册入口地址
Route::get('signup', 'UsersController@signup')->name('signup');
