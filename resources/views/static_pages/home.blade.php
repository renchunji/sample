<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/22 0022
 * Time: 14:56
 */
?>
<!--通过extends并使用传参来继承父视图default-->
@extends('layouts.default')
<!--通过section和stop来填充content区域，所有之内的内容都将显示到content块-->
@section('content')
    <!--这里涉及到很多不理解的类名先暂时勇者，后续再深入了解-->
    <div class="jumbotron">
        <h1>Hello Laravel</h1>
        <p class="lead">
            你现在所看到的是 <a href="https://fsdhub.com/books/laravel-essential-training-5.1">Laravel 入门教程</a> 的示例项目主页。
        </p>
        <p>
            一切都将从这里开始
        </p>
        <p>
            <a class="btn btn-lg btn-success" href="{{ route('signup') }}">现在注册</a>
        </p>
    </div>
@stop
