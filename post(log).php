<?php
header("Content-Type:text/html; charset=utf-8");
include("connect.php");
if (isset($_POST['Caccount'])&&isset($_POST['Cpw1'])&&isset($_POST['Cpw2'])&&isset($_POST['Cname'])&&isset($_POST['Ce_mail'])&&isset($_POST['Ccompetence']))
{
mysql_query("SET log 'utf8'");
$Caccount = ($_POST['Caccount']);
$Cpw1 = ($_POST['Cpw1']);
$Cpw2 = ($_POST['Cpw2']);
$Cname = ($_POST['Cname']);
$Ce_mail = ($_POST['Ce_mail']);
$Ccompetence = ($_POST['Ccompetence']);

$str = "INSERT INTO plan(Caccount,Cpw1,Cpw2,Cname,Ce_mail,Ccompetence) VALUES( '$Caccount','$Cpw1','$Cpw2','$Cname','$Ce_mail','$Ccompetence')";
$result = mysql_query($str) ;

}

?>
