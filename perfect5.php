<?php
$a=date("m");
$b=date("d");
$c=date("H");
$d=date("i");
//echo $a;//月
//echo $b;//日
//echo $c;//時
//echo $d;//分
if($d>=15 && $d<=20){
	$dd="00";
	$c=date("H");
}
else if($d>=20 && $d<=25){
	$dd="05";
	$c=date("H");
}
else if($d>=25 && $d<=30){
	$dd="10";
	$c=date("H");
}
else if($d>=30&& $d<=35){
	$dd="15";
	$c=date("H");
}
else if($d>=35 && $d<=40){
	$dd="20";
	$c=date("H");
}
else if($d>=40 && $d<=45){
	$dd="25";
	$c=date("H");
}else if($d>=45 && $d<=50){
	$dd="30";
	$c=date("H");
}else if($d>=50 && $d<=55){
	$dd="35";
	if($c=="01"){
	$c="00";
	}else if($c=="02"){
	$c="01";
	}else if($c=="03"){
	$c="02";
	}else if($c=="04"){
	$c="03";
	}else if($c=="05"){
	$c="04";
	}else if($c=="06"){
	$c="05";
	}else if($c=="07"){
	$c="06";
	}else if($c=="08"){
	$c="07";
	}else if($c=="09"){
	$c="08";
	}else if($c=="10"){
	$c="09";
	}else if($c=="11"){
	$c="10";
	}else
	$c=date("H")-1;	
}else if($d>=55&& $d<=60){
	$dd="40";
	if($c=="01"){
	$c="00";
	}else if($c=="02"){
	$c="01";
	}else if($c=="03"){
	$c="02";
	}else if($c=="04"){
	$c="03";
	}else if($c=="05"){
	$c="04";
	}else if($c=="06"){
	$c="05";
	}else if($c=="07"){
	$c="06";
	}else if($c=="08"){
	$c="07";
	}else if($c=="09"){
	$c="08";
	}else if($c=="10"){
	$c="09";
	}else if($c=="11"){
	$c="10";
	}else
	$c=date("H")-1;	
}else if($d>=0 && $d<=5){
	$dd="45";
	if($c=="01"){
	$c="00";
	}else if($c=="02"){
	$c="01";
	}else if($c=="03"){
	$c="02";
	}else if($c=="04"){
	$c="03";
	}else if($c=="05"){
	$c="04";
	}else if($c=="06"){
	$c="05";
	}else if($c=="07"){
	$c="06";
	}else if($c=="08"){
	$c="07";
	}else if($c=="09"){
	$c="08";
	}else if($c=="10"){
	$c="09";
	}else if($c=="11"){
	$c="10";
	}else
	if($c=="01"){
	$c="00";
	}else if($c=="02"){
	$c="01";
	}else if($c=="03"){
	$c="02";
	}else if($c=="04"){
	$c="03";
	}else if($c=="05"){
	$c="04";
	}else if($c=="06"){
	$c="05";
	}else if($c=="07"){
	$c="06";
	}else if($c=="08"){
	$c="07";
	}else if($c=="09"){
	$c="08";
	}else if($c=="10"){
	$c="09";
	}else if($c=="11"){
	$c="10";
	}else
	$c=date("H")-1;	
}else if($d>=5 && $d<=10){
	$dd="50";
	if($c=="01"){
	$c="00";
	}else if($c=="02"){
	$c="01";
	}else if($c=="03"){
	$c="02";
	}else if($c=="04"){
	$c="03";
	}else if($c=="05"){
	$c="04";
	}else if($c=="06"){
	$c="05";
	}else if($c=="07"){
	$c="06";
	}else if($c=="08"){
	$c="07";
	}else if($c=="09"){
	$c="08";
	}else if($c=="10"){
	$c="09";
	}else if($c=="11"){
	$c="10";
	}else
	$c=date("H")-1;	
}else if($d>=10 && $d<=15){
	$dd="55";
	if($c=="01"){
	$c="00";
	}else if($c=="02"){
	$c="01";
	}else if($c=="03"){
	$c="02";
	}else if($c=="04"){
	$c="03";
	}else if($c=="05"){
	$c="04";
	}else if($c=="06"){
	$c="05";
	}else if($c=="07"){
	$c="06";
	}else if($c=="08"){
	$c="07";
	}else if($c=="09"){
	$c="08";
	}else if($c=="10"){
	$c="09";
	}else if($c=="11"){
	$c="10";
	}else
	$c=date("H")-1;	
}
/* if($dd>55 && $dd<60){
	$c=date("H")-1;
}else if($dd>0 && $dd<5){
	$c=date("H")-1;
}else if($dd>5 && $dd<10){
	$c=date("H")-1;
}else if($dd>10 && $dd<15){
	$c=date("H")-1;
}
else{
	$c=date("H");
} */

$cc="00";
$aa="_";
$aaa="1,2,3,4,5,6";
$fname = "http://tisvcloud.freeway.gov.tw/history/TDCS/M05A/2016$a$b/$c/TDCS_M05A_201603$b$aa$c$dd$cc.csv";

if (($handle = fopen($fname, "r")) === FALSE) {
    exit;
}

$records = array();

/* First line is header with keys */
$keys = fgetcsv($handle);

while (($data = fgetcsv($handle)) !== FALSE) {
   $data[0] /= 2;

	$bbb=array("TimeInterva","GantryFrom","GantryTo","VehicleType","SpaceMeanSpeed","Traffic");
	
   $records[] = array_combine($bbb, $data);
	
}
fclose($handle);
$con = count($records);
echo "[";
	for($i=0;$i<$con ;$i++){
		if(mb_substr(($records[$i]["GantryFrom"]),1,1,"utf-8")=="5"){
			echo json_encode($records[$i]);
			echo ",";
		}
	}
	echo json_encode($records[0]);
echo "]";
//echo json_encode($records);




?>