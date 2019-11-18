<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/style2.css"/>
	<script src="js/jquery-1.11.2.js"></script>
	<script>
		$(function (){
			$("#bt1").click(function (){
				$.ajax({
					url:"chongzhi.php",
					type:"POST",
					data:{adminName:$("#adminName").val(),adminPwd:$("#adminPwd").val()},
					dataType:"json",
					success:function (data){
						if(data.status==="1001"){
							location.href="denglu.html";
						}else{
							alert("密码重置失败")
						}
					}
				})
			})
		})
	</script>
</head>
<body>
    <div id="div1">
           <img src="img/清晰 2.png" id="img1"><span class="tittle1">浙江税务局大企业税收服务和管理信息平台</span>
           <div id="div2">
               <span class="tittle2">密码重置</span>
               <div id="div3"><input type="text" class="adminName" id="adminName" name="adminName" placeholder=" 新的用户名:"></div>
               <div id="div4"><input type="password" class="adminPwd" id="adminPwd" name="adminPwd" placeholder=" 新的密码:"></div>
               <input type="submit" id="bt1" class="sub" value="重置">
           </div>
    </div>
</body>
</html>