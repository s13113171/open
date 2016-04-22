<?php
@header("Content-Type:text/html; charset=utf-8");
mysql_connect("localhost","adam45548","as1478963") or die("連線失敗請洽系統管理員");
mysql_select_db("open");
$dbname="a3.csv";
if ( !$fp = fopen($dbname,"r") ) {
      echo "Cannot open $dbname\n";
      exit;
}else{
	
  $size = filesize($dbname)+1;
  $row=0;
  while($temp=fgetcsv($fp,$size,",")){
    if ($row>0){
      $sql="INSERT INTO `number2` (`n`)
          VALUES ('$temp[0]')";
      $result=mysql_query($sql);
      echo mysql_error();
    }
    $row=$row+1;
  }
  fclose($fp);
} 
?>