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

//建立一条指定到首页的路由，对应home方法
Route::get ('/', 'StaticPagesController@home');
//建立一条指定到帮助页的路由，对应help方法
Route::get ('help', 'StaticPagesController@help');
//建立一条指定到关于的路由，对应about方法
Route::get ('/about', 'StaticPagesController@about');
