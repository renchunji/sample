<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/22 0022
 * Time: 15:15
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>@yield('title','sample') - laravel入门教程</title>
    <!--引入css样式文件，因为laravel文件是以public文件目录为根目录，所以引入时不用再写public文件夹-->
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>

@include('layouts._header');

<!--这块代码表示占位区域将显示content内容，而content内容由继承default的子视图来定义-->
<div class="container">
    <div class="col-md-offset-1 col-md-10">
        @yield('content')
        @include('layouts._footer')
    </div>
</div>

</body>
</html>