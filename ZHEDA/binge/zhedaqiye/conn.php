<?php 
$conn=@mysql_connect("localhost","root","") or die("db content error");
mysql_select_db("zdmessage",$conn);
mysql_query("set names utf8");
?>