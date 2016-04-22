<?php 
	@header("Content-Type:text/html; charset=utf-8"); 
		require_once("function/global_function.php");
		
		//select
		$data=array("");
		$userID = sqlQry('SELECT * FROM activity',$data);
		
        print_r($userID)  ;





?>