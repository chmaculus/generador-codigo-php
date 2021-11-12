<?php

//$tabla=$_POST["tabla"];
if($_POST["database"] AND $_POST["tabla"]){
	$database=$_POST["database"];
	$tabla=$_POST["tabla"];
}else{
	$database=$database;
	$tabla=$tabla;
}

$q="show columns from $database.$tabla";
//echo $q;



#---------------------------------------------------------
$var.="#----------------------------------------";
$var.=chr(10);

$r=mysql_query($q);
$rows=mysql_num_rows($r);

$var.='$query=\'select ';
for($i=0;$i<=($rows-1);$i++){
	$var.=$tabla;
	$var.='.';
	$var.=mysql_result($r,$i,0);
	if($i<=($rows-2)){$var.=",";}else{$var.='';}
	$var.=chr(10);
}
$var.=' from '.$tabla.'\';'.chr(10);

$var.=chr(10);
$var.='$result=mysql_query($query);'.chr(10);
$var.=chr(10);
$var.='if(mysql_error()){
	echo "Q: ".$query."<br>";
	echo "E: ".mysql_error()."<br>";
	echo "S: ".$_SERVER["SCRIPT_NAME"]."<br>";
}'.chr(10);
$var.=chr(10);

$var.="#----------------------------------------";
$var.=chr(10);
#---------------------------------------------------------




?>