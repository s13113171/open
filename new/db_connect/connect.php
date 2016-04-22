<?php
	header("Content-Type: text/html; charset=utf-8");
	$db_link = @mysql_connect("localhost", "adam45548","as1478963");
	if (!$db_link) {
		die("資料連結失敗");
	}else{
		echo "資料連結成功";
	}
	mysql_select_db("house",$db_link);
?>