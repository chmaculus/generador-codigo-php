<?php


if($_POST["database"] AND $_POST["tabla"]){
	$database=$_POST["database"];
	$tabla=$_POST["tabla"];
}else{
	$database=$database;
	$tabla=$tabla;
}

include("cabeceras_scripts.inc.php");




$query='select * from xx where xx=xx';
$rows=mysql_num_rows(mysql_query($q));
if(mysql_error()){echo mysql_error()."<br>".$query."<br>".$_SERVER["SCRIPT_NAME"]."<br>";}
if($rows>0){
	echo "El registro existe<br>";
}

?>

