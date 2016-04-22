<?php
	@header("Content-Type:text/html; charset=utf-8");
		require_once("function/global_function.php");
if (isset($_POST['user'])&&isset($_POST['password']))
{
		mysql_query("SET NAMES 'utf8'");
		$user = ($_POST['user']);
		$password = ($_POST['password']);
		//select
		$data=array("");
		$userID = sqlQry('SELECT * FROM `user` ORDER BY `user`.`user` ASC',$data);

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
		$cart = json_decode($json,true); //這個地方是在解析json
        $con = count($cart);
			$zz=0;
			for ($i = 0 ; $i < $con ; $i++) {
				if(($cart[$i]["user"]==$user)&&($cart[$i]["password"]==$password)){
					echo "登入成功";
					$zz=1;
					break;
				}
			}
			if($zz==0){
				echo "帳號或密碼錯誤";
			}
		}
	}
	else
		echo "未輸入帳號或密碼";
 ?>