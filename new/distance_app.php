<?php
	@header("Content-Type:text/html; charset=utf-8");
		require_once("function/global_function.php");

		$xy = '
				{ "x": "123.456", "y": "456.789"}
				';

		// print_r($xy);



		// $xy = $_POST['JData'];
		// $cart = json_decode($xy,true);

		//select
		$data=array("");
		$userID = sqlQry('SELECT * FROM view',$data);

		print_r($userID);














?>