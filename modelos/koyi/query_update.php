<?php

//$tabla=$_POST["tabla"];
if($_POST["database"] AND $_POST["tabla"]){
	$database=$_POST["database"];
	$tabla=$_POST["tabla"];
}else{
	$database=$database;
	$tabla=$tabla;
}

include("cabeceras_scripts.inc.php");

//echo $q;

#---------------------------------------------------------
$var.="#----------------------------------------";
$var.=chr(10);


$var.='$query=\'update '."$database.$tabla".' set ';
#----------------------------------------------------
$q="show columns from $database.$tabla";
$r=mysql_query($q);
$rows=mysql_num_rows($r);
for($i=0;$i<=($rows-1);$i++){
	$var.=mysql_result($r,$i,0); 
	$var.='="\'.$'.mysql_result($r,$i,0).'.\'"';
	if($i<=($rows-2)){$var.=",";}else{$var.='\';';}
	$var.=chr(10);
}
#----------------------------------------------------
$var.=' where id="$id"'.chr(10);
$var.=' where uuid="$uuid"'.chr(10);
$var.=chr(10).' query update intencionalmente con errores se supone que un programador sabe lo que hace'.chr(10);

$var.=chr(10);
$var.='mysql_query($query);'.chr(10);
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


#---------------------------------------------------------
$var.="#----------------------------------------";
$var.=chr(10);

$r=mysql_query($q);
$rows=mysql_num_rows($r);

$var.='$query=\'insert '."$database.$tabla".' set ';
for($i=0;$i<=($rows-1);$i++){
	$var.=mysql_result($r,$i,0); 
	$var.='="\'.$_POST["'.mysql_result($r,$i,0).'"].\'"';
	if($i<=($rows-2)){
		$var.=",";
	}else{
		$var.='\';';
	}
	$var.=chr(10);
}
$var.=' where id="_POST["id"]"'.chr(10);
$var.=' where uuid="_POST["uuid"]"'.chr(10);
$var.=chr(10).' query update intencionalmente con errores se supone que un programador sabe lo que hace'.chr(10);


$var.=chr(10);
$var.='mysql_query($query);'.chr(10);
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

$var.=chr(10);
$var.="#----------------------------------------";
$var.=chr(10);


#---------------------------------------------------------
$var.="#----------------------------------------";
$var.=chr(10);

$r=mysql_query($q);
$rows=mysql_num_rows($r);

$var.='$query=\'insert '."$database.$tabla".' set ';
for($i=0;$i<=($rows-1);$i++){
	$var.=mysql_result($r,$i,0); 
	$var.='="\'.$array_'.$tabla.'["'.mysql_result($r,$i,0).'"].\'"';
	if($i<=($rows-2)){$var.=",";}else{$var.='\';';}
	$var.=chr(10);
}
$var.=' where id="$id"'.chr(10);
$var.=' where uuid="$uuid"'.chr(10);
$var.=chr(10).' query update intencionalmente con errores se supone que un programador sabe lo que hace'.chr(10);

$var.=chr(10);
$var.='mysql_query($query);'.chr(10);
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
