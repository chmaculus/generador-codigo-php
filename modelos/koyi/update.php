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
$var.='include_once("connect.php");'.chr(10);
$var.='$fecha=date("Y-n-d");'.chr(10);
$var.='$hora=date("H:i:s");'.chr(10);
$var.=''.chr(10);
$var.=''.chr(10);
$var.=''.chr(10);
$var.='#---------------------------------------------------------------------------------'.chr(10);
$var.='if($_POST["accion"]=="ingreso"){'.chr(10);
$var.=''.chr(10);
$var.='	$query=\'insert into '.$tabla.' set'.chr(10);


#-------------------------------------------------------------
$q="show columns from $database.$tabla";
$r=mysql_query($q);
$rows=mysql_num_rows($r);
for($i=0;$i<=($rows-1);$i++){
	$row=mysql_result($r,$i,0);
	//$var.=mysql_result($r,$i,0); 
	$var.='		'.$row.'="\'.$_POST["'.$row.'"].\'"';	
	if($i<=($rows-2)){$var.=",";}else{$var.='\';';}
	$var.=chr(10);
}
#-------------------------------------------------------------



$var.='	mysql_query($query);'.chr(10);
$var.='	if(mysql_error()){echo mysql_error()."<br>".$query."<br>".$_SERVER["SCRIPT_NAME"]."<br>";}'.chr(10);
$var.='	$id_'.$tabla.'=mysql_insert_id($id_connection);'.chr(10);
$var.=''.chr(10);

$var.=''.chr(10);
$var.='	#muestra registro ingresado'.chr(10);
$var.='	$query=\'select * from '.$tabla.' where id="\'.$id_'.$tabla.'.\'"\';'.chr(10);
$var.='	$array_'.$tabla.'=mysql_fetch_array(mysql_query($query));'.chr(10);
$var.='	include("'.$tabla.'_muestra.inc.php");'.chr(10);
$var.='}'.chr(10);
$var.='#---------------------------------------------------------------------------------'.chr(10);
$var.=''.chr(10);
$var.=''.chr(10);


$var.='#---------------------------------------------------------------------------------'.chr(10);
$var.='if($_POST["accion"]=="modificacion"){'.chr(10);
$var.='		$id_'.$tabla.'=$_POST["id_'.$tabla.'"];'.chr(10);
$var.='		'.chr(10);
$var.='		$query=\'update '.$tabla.' set'.chr(10);

#-------------------------------------------------------------
$rows=mysql_num_rows($r);
for($i=0;$i<=($rows-1);$i++){
	$row=mysql_result($r,$i,0);
	$var.='		'.$row.'="\'.$_POST["'.$row.'"].\'"';	
	if($i<=($rows-2)){$var.=",";}else{$var.='';}
	$var.=chr(10);
}
#-------------------------------------------------------------

$var.='				where id="\'.$id_'.$tabla.'.\'"'.chr(10);
$var.='			\';'.chr(10);
$var.='	mysql_query($query);'.chr(10);
$var.='	if(mysql_error()){echo mysql_error()."<br>".$query."<br>".$_SERVER["SCRIPT_NAME"]."<br>";}'.chr(10);
$var.=''.chr(10);


$var.='	#muestra registro ingresado'.chr(10);
$var.='	$query=\'select * from '.$tabla.' where id="\'.$id_'.$tabla.'.\'"\';'.chr(10);
$var.='	$array_'.$tabla.'=mysql_fetch_array(mysql_query($query));'.chr(10);
$var.='	include("'.$tabla.'_muestra.inc.php");'.chr(10);
$var.='}'.chr(10);
$var.='#---------------------------------------------------------------------------------'.chr(10);
$var.=''.chr(10);
$var.=''.chr(10);
$var.=''.chr(10);


$var.='?>'.chr(10);
$var.=''.chr(10);

$var.=''.chr(10);
$var.=''.chr(10);
$var.=''.chr(10);
$var.=''.chr(10);
$var.='<?php'.chr(10);
$var.='if(!mysql_error()){'.chr(10);
$var.='	if($_POST["accion"]=="ingreso"){'.chr(10);
$var.='		echo \'<td><font1>Los datos se ingresaron correctamente</font1></td>\';'.chr(10);
$var.='	}'.chr(10);
$var.='	if($_POST["accion"]=="modificacion"){'.chr(10);
$var.='		echo \'<td><font1>Los datos se actualizaron correctamente</font1></td>\';'.chr(10);
$var.='	}'.chr(10);
$var.='}'.chr(10);

$var.='if($_POST["accion"]=="ELIMINAR"){'.chr(10);
$var.=' 	$query=\'delete from '.$tabla.' where id="\'.$id_'.$tabla.'.\'"\';'.chr(10);
$var.=' 	mysql_query($query);'.chr(10);
$var.='	if(mysql_error()){echo mysql_error()."<br>".$query."<br>".$_SERVER["SCRIPT_NAME"]."<br>";}'.chr(10);

$var.=' 	exit;'.chr(10);
$var.='}'.chr(10);

$var.=''.chr(10);
$var.=''.chr(10);

$var.='?>'.chr(10);
$var.='</center>'.chr(10);
$var.='</body>'.chr(10);
$var.='</html>'.chr(10);

?>
