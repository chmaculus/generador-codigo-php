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


$var.=''.chr(10);
$var.=''.chr(10);

$var.='include_once("connect.php");'.chr(10);

$var.=''.chr(10);
$var.=''.chr(10);
$var.='echo "<center>";'.chr(10);

$var.=''.chr(10);
$var.='if($_GET["id_'.$tabla.'"]){'.chr(10);
$var.='	$id_'.$tabla.'=$_GET["id_'.$tabla.'"];'.chr(10);
$var.='}'.chr(10);
$var.='if($_POST["id_'.$tabla.'"]){'.chr(10);
$var.='	$id_'.$tabla.'=$_POST["id_'.$tabla.'"];'.chr(10);
$var.='}'.chr(10);
$var.='if($_POST["decision"]=="ELIMINAR"){'.chr(10);
$var.='	include("'.$tabla.'_update.php");'.chr(10);
$var.='echo "<center>";'.chr(10);
$var.='	echo \'<font1>Los datos se eliminaron correctamente</font1>\';'.chr(10);
$var.='	exit;'.chr(10);
$var.='}'.chr(10);

$var.=''.chr(10);

$var.='if($_POST["decision"]=="CANCELAR"){'.chr(10);
$var.='	include("'.$tabla.'_muestra.inc.php");'.chr(10);
$var.='	echo \'<font1>Los datos no se han eliminado</font1>\';'.chr(10);
$var.='	exit;'.chr(10);
$var.='}'.chr(10);

$var.=''.chr(10);
$var.=''.chr(10);


$var.='$query=\'select * from '.$tabla.' where id="\'.$id_'.$tabla.'.\'"\';'.chr(10);
$var.='$array_'.$tabla.'=mysql_fetch_array(mysql_query($query));'.chr(10);


$var.=''.chr(10);
$var.='include("'.$tabla.'_muestra.inc.php");'.chr(10);

$var.=''.chr(10);
$var.='echo \''.chr(10);
$var.='<form action="'.$tabla.'_eliminar.php" method="post">'.chr(10);
$var.='		<input type="hidden" name="id_'.$tabla.'" value="\'.$id_'.$tabla.'.\'">'.chr(10);
$var.='		<input type="hidden" name="accion" value="ELIMINAR">'.chr(10);
$var.='		<input type="submit" name="decision" value="ELIMINAR">'.chr(10);
$var.='		<input type="submit" name="decision" value="CANCELAR">'.chr(10);
$var.='</form>\';'.chr(10);
$var.='?>'.chr(10);
$var.='</center>'.chr(10);

$var.=''.chr(10);
$var.=''.chr(10);




