<?php

//$tabla=$_POST["tabla"];
if($_POST["database"] AND $_POST["tabla"]){
	$database=$_POST["database"];
	$tabla=$_POST["tabla"];
}else{
	$database=$database;
	$tabla=$tabla;
}

$var.='<?php'.chr(10);
include("cabeceras_scripts.inc.php");
$var.='echo "<br><br>";'.chr(10);
$var.='$query=\'select * from '.$tabla.' where id="\'.$id_'.$tabla.'.\'"\';'.chr(10);
$var.='$array_'.$tabla.'=mysql_fetch_array(mysql_query($query));'.chr(10);
$var.=''.chr(10);
$var.='include("'.$tabla.'_muestra.inc.php");'.chr(10);

$var.='?>'.chr(10);
$var.=''.chr(10);

?>
