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
</head>
<body>
<!--这块代码表示占位区域将显示content内容，而content内容由继承default的子视图来定义-->
    @yield('content')
</body>
</html>