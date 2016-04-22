<?php
header("Content-Type:text/html; charset=utf-8");
include("connect.php");
if (isset($_POST['Bid'])&&isset($_POST['Bname'])&&isset($_POST['Blat1'])&&isset($_POST['Blon1'])&&isset($_POST['Blat2'])&&isset($_POST['Blon2']))
{
mysql_query("SET BidS 'utf8'");
$Bid = ($_POST['Bid']);
$Bname = ($_POST['Bname']);
$Blat1 = ($_POST['Blat1']);
$Blon1 = ($_POST['Blon1']);
$Blat2 = ($_POST['Blat2']);
$Blon2 = ($_POST['Blon2']);

$str = "INSERT INTO plan(Bid,Bname,Blat1,Blon1,Blat2,Blon2) VALUES( '$Bid','$Bname','$Blat1','$Blon1','$Blat2','$Blon2')";
$result = mysql_query($str) ;

}

?>
