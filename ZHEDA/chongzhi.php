<?php
session_start();
header("content-type:text/html;charset=utf-8");
$adminName=$_POST['adminName'];
$adminPwd=$_POST['adminPwd'];
include("conn.php");
$flag=mysql_query("update admins set adminPwd=$adminPwd where adminName='$adminName'");
if($flag){
	echo '{"status":"1001"}';
}else{
	echo '<script>alert("注册失败");history.go(-1);</script>';
}
?>