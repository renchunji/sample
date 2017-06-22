<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StaticPagesController extends Controller
{
    //定义对应静态页面的方法
    public function home() {
        return view('static_pages/home');
    }

    public function help() {
        return view('static_pages/help');
    }

    public function about() {
        return view('static_pages/about');
    }
}
