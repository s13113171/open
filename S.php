<?php
	@header("Content-Type:text/html; charset=utf-8");
		require_once("function/global_function.php");

		//select
		$data=array("");
		$userID = sqlQry('SELECT * FROM `s` WHERE 1',$data);

		array_walk_recursive($userID, function(&$value, $key) {
   			if(is_string($value)) {
       			 $value = urlencode($value);
    		}
		});
		
		if (empty($userID)) {
			
		echo "false";
		//select失敗
	
		} else {
		
		// echo "true";
		//select成功

		$json = urldecode(json_encode($userID));
		echo $json;
		}

 ?>