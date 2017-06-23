<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    //创建一个用于用户创建的create的方法，当用户点击signup页面是自动调用create页面。
    public function create() {
        return view('users/create');
}
}
