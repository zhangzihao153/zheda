<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
    <div id="div1">
        <img src="img/清晰 2.png" class="img1"><span class="tittle">浙江税务局大企业税收服务和管理信息平台</span>
        <div id="div2">
            <img src="img/screen1.png" ><br>
            <span class="tittle1">用户登录</span>
			<form action="login.php" method="post">
			<div id="div3"><input type="text" class="tittle2" name="adminName" placeholder=" 用户名:"></div>
			<div id="div4"><input type="password" class="tittle3" name="adminPwd" placeholder=" 密码:"></div>
			<div id="div5"><input type="checkbox" class="ckd"><span class="tittle4">记住密码</span><a href="reset.php" class="a1">忘记密码？</a></div>
			<input type="submit" class="sbt" value="登录">
            </form>
        </div>
    </div>
</body>
</html>