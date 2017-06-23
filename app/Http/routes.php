<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//建立一条指定到首页的路由，对应home方法()，并为其命名为'home'
Route::get ('/', 'StaticPagesController@home')->name('home');
//建立一条指定到帮助页的路由，对应help方法，并为其命名为'help'
Route::get ('help', 'StaticPagesController@help')->name('help');
//建立一条指定到关于的路由，对应about方法，并为其命名为'about'
Route::get ('/about', 'StaticPagesController@about')->name('about');

//建立一条指定到用户注册页的路由，对应使用create方法，并为其命名为'singup'
Route::get('/signup','UsersController@create')->name('signup');