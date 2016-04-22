<?php
header("Content-Type:text/html; charset=utf-8");
include("connect.php");

if (isset($_POST['user'])&&isset($_POST['password']))
{
mysql_query("SET NAMES 'utf8'");
$user = ($_POST['user']);
$password = ($_POST['password']);

$str = "INSERT INTO user(user,password) VALUES( '$user','$password')";
$result = mysql_query($str);

echo "註冊成功";
}else
	echo "註冊失敗";
?>