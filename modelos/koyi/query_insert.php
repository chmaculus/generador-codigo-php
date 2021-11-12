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

$var.='$query=\'insert into '."$database.$tabla".' set '.chr(10);
for($i=0;$i<=($rows-1);$i++){
	$var.=mysql_result($r,$i,0); 
	$var.='="\'.$'.mysql_result($r,$i,0).'.\'"';
	if($i<=($rows-2)){$var.=",";}else{$var.='\';';}
	$var.=chr(10);
}
$var.=chr(10);
$var.='mysql_query($query);'.chr(10);
$var.=chr(10);
$var.='if(mysql_error()){
	echo $query."<br>";
	echo mysql_error()."<br>";
	echo $_SERVER["SCRIPT_NAME"]."<br>";
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

$var.='$query=\'insert into '."$database.$tabla".' set '.chr(10);
for($i=0;$i<=($rows-1);$i++){
	$var.=mysql_result($r,$i,0); 
	$var.='="\'.$_POST["'.mysql_result($r,$i,0).'"].\'"';
	if($i<=($rows-2)){$var.=",";}else{$var.='\';';}
	$var.=chr(10);
}

$var.=chr(10);
$var.='mysql_query($query);'.chr(10);
$var.=chr(10);
$var.='if(mysql_error()){
	echo $query."<br>";
	echo mysql_error()."<br>";
	echo $_SERVER["SCRIPT_NAME"]."<br>";
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

$var.='$query=\'insert into '."$database.$tabla".' set '.chr(10);
for($i=0;$i<=($rows-1);$i++){
	$var.=mysql_result($r,$i,0); 
	$var.='="\'.$array_'.$tabla.'["'.mysql_result($r,$i,0).'"].\'"';
	
	if($i<=($rows-2)){$var.=",";}else{$var.='\';';}
	$var.=chr(10);
}

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

$query='insert into blackcat.precios set
id="'.$array_precios["id"].'",
codigo="'.$array_precios["codigo"].'",
descripcion="'.$array_precios["descripcion"].'",
precio_s_iva="'.$array_precios["precio_s_iva"].'",
precio_c_iva="'.$array_precios["precio_c_iva"].'",
moneda="'.$array_precios["moneda"].'",
iva="'.$array_precios["iva"].'",
rubro="'.$array_precios["rubro"].'",
proveedor="'.$array_precios["proveedor"].'",
stock="'.$array_precios["stock"].'",
entrante="'.$array_precios["entrante"].'",
detalle="'.$array_precios["detalle"].'",
imagen="'.$array_precios["imagen"].'"';
?>
