<?php

require_once("./db_connect/db_connect.php");
require_once("./db_connect/sql.php");

/*
sqlQry( $cmd , $array );
	資料查詢
傳入參數：
	$cmd：SQL指令，string   ex： SELECT * FROM TableName WHERE ColNameA = ? AND ColNameB = ? OR ColNameC = ?
	$array：陣列參數  		ex： array('A','B','C')
傳出參數：
	SQL result array：SQL query集合fetch()後的陣列 ex：array[N]["ColName"]
*/
function sqlQry( $sql, $sql_array ){
	global $db;

	$sth = $db -> prepare($sql);
	$sth -> execute($sql_array);
	if( $sth -> errorCode() != '00000' ){
		$error = $sth -> errorInfo();
		// echo "Error : ".$error[2];
		return false;
	}
	$sth->setFetchMode(PDO::FETCH_ASSOC);

	$result = filter_var_array($sth -> fetchAll(), FILTER_SANITIZE_MAGIC_QUOTES);
	if( count($result) == 0 )
		$result = array();

	return $result;
}


/*
sqlEdit( $cmd , $array );
	資料寫入、更新與刪除
傳入參數：
	$cmd：SQL指令，string	ex： UPDATE TableName SET ColNameA = ? WHERE ColNameB = ? OR ColNameC = ?
	$array：陣列參數  		ex： array('A','B','C')
傳出參數：
	ture or false 
*/
function sqlEdit( $sql, $sql_array ){
	global $db;

	//$sql_exec = $db->exec( $cmd );

	$sth = $db -> prepare($sql);
	$sth -> execute($sql_array);
	if( $sth -> errorCode() != '00000' ){
		$error = $sth -> errorInfo();
		//echo "Error : ".$error[2];
		return false;
	}
	return true;
}


/*
atcs( $array, $quotes );
	一維陣列資料轉換為SQL指令列(欄位與資料部分)
傳入參數：
	$array：一維陣列資料
	$quotes：是否需要加上單引號(參數：0、1、false、true)
傳出參數：
	陣列轉換後的字串，可直接加進SQL指令內
*/
function atcs( $array, $quotes ){
	$cmd_string = "";
	if( $quotes ){
		foreach( $array as $key => $value )
			$cmd_string .= "'{$value}',";
	} else {
		foreach( $array as $key => $value )
			$cmd_string .= $value.",";
	}

	$cmd_string = substr( $cmd_string, 0, strlen($cmd_string)-1 );

	return $cmd_string;
}



//加密
function setEncode($string)
{
	$key = "dPgDNIAkuv4NpwMLJVf+VEEg";
	$iv = "ZJiNq1L7";
	$cipher_alg = MCRYPT_TRIPLEDES;
	$encrypted_string = mcrypt_encrypt($cipher_alg, $key, $string, MCRYPT_MODE_ECB, $iv);
	return base64_encode($encrypted_string);
}

// 解密
function getDecode($string)
{
	$key = "dPgDNIAkuv4NpwMLJVf+VEEg";
	$iv = "ZJiNq1L7";
	$string = base64_decode($string);
	$cipher_alg = MCRYPT_TRIPLEDES;

	$decrypted_string = mcrypt_decrypt($cipher_alg, $key, $string, MCRYPT_MODE_ECB, $iv);
	return trim($decrypted_string);
}
