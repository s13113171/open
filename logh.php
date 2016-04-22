<?php
header("Content-Type:text/html; charset=utf-8");
include("connect.php");
if (isset($_POST['id'])&&isset($_POST['pw']))
	{
	mysql_query("SET NAMES 'utf8'");
	$id = ($_POST['id']); 
	$pw = ($_POST['pw']);
	
	$id1 =a123456789;
	$pw1 =a123456789;
	if(($id==$id1)&&($pw==$pw1)){
		echo "登入成功";
	}
	else
		echo "帳號或密碼錯誤";
	}
	else
		echo "空值";
	?>