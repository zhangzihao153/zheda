<?php session_start(); ?>
<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/index4.css"/>
	<script src="js/jquery-1.11.2.js"></script>
	<script src="js/index3.js"></script>
</head>
<body>
	<div id="container">
		<div id="login">
			<span id="data">
			</span>	
			<?php if($_SESSION['login']=='success'){?>
				<a href="">欢迎<?php echo $_SESSION['adminName']; ?></a>
			<?php }else{ ?>
				<a href="denglu.html">登录</a>
			<?php } ?>
		</div>
		<div id="head">
			<img src="img/清晰%202.png" width="64px" height="79px">
			<h1>浙江省大企业税收服务和管理信息平台</h1>
			<input type="text" name="" id="" class="bt1" value="请输入需要搜索的内容" />
			<input type="button" name="" id="" class="bt2" value="搜索" />
		</div>
		<div id="navigation">
			<ul>
				<li><a href="index.php">首页</a></li>
				<li><a href="#">业务平台</a></li>
				<li><a href="03-1.php">职能概括</a></li>
				<li><a href="index4.php">工作动态</a></li>
				<li class="active"><a href="index5.php">制度规范</a></li>
				<li><a href="index6.php">知识库</a></li>
				<li><a href="index7.php">下载专区</a></li>
			</ul>
		</div>
		<div id="content">
			<div id="content2">
				<ul>
					<li class="li1"><img src="img/5_03.png" width="16px" height="16px" alt="">制度规范</li>
					<li class="li2"><img src="img/5_03.png" width="16px" height="16px" alt="">绩效考核</li>
					<li class="li3"><img src="img/6_03.png" width="16px" height="16px" alt="">年度计划</li>
				</ul>
				<div id="right" style="display: block;">
					<p>制度规范</p>
					<ul>
						<li><a href="">财政部、税务总局联合发文进一步明确永续债的企业所得税税收发文进一步明确永续债的企业所得税税收债的企业所得税税债的企业…</a></li>
						<li><a href="">西城区税务、市场监管部门联合推出“e窗通企业一日准营套餐</a></li>
						<li><a href="">税法入童心 税收伴成长</a></li>
						<li><a href="">下沙区税务局个体工商户个税管理成效显著</a></li>
						<li><a href="">萧山区税务局开展“减税降费 纳税人有话说”税收宣传</a></li>
						<li><a href="">财政部、税务总局联合发文进一步明确永续债的企业所得税税收</a></li>
						<li><a href="">西城区税务、市场监管部门联合推出“e窗通企业一日准营套餐</a></li>
						<li><a href=""> 税法入童心 税收伴成长</a></li>
						<li><a href="">下沙区税务局个体工商户个税管理成效显著</a></li>
						<li><a href="">西城区税务、市场监管部门联合推出“e窗通企业一日准营套餐</a></li>
						<li><a href="">税法入童心 税收伴成长</a></li>
						<li><a href="">下沙区税务局个体工商户个税管理成效显著</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="tfood">
			<div class="ft1">
				友情链接：<a href="#">国家税务局</a><a href="#">总局大企业税收服务和管理工作平台</a>
				<a href="#">浙江省税务内网</a><a href="#">金悦三期决策支持系统</a>
			</div>
			<div class="tf2">
				<a href="#">法律声明</a> | <a href="#">网站管理</a> | <a href="#">网站帮助</a> | <a href="#">关于我们</a> | <a href="#">网站纠错</a>
				<p>国家税务总局浙江省税务局版权所有 京ICP备1234568号-2 联系电话：0142-123456</p>
				<p>浙公网安备 33010250025645号 网站标识码：bm236554412 地址：杭州市滨江区</p>
				<p>国家税务总局浙江省税务局办公室主办</p>
			</div>	
		</div>
	</div>
</body>
</html>