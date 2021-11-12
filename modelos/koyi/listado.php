<?php

//$tabla=$_POST["tabla"];
if($_POST["database"] AND $_POST["tabla"]){
	$database=$_POST["database"];
	$tabla=$_POST["tabla"];
}else{
	$database=$database;
	$tabla=$tabla;
}

//include("cabeceras_scripts.inc.php");
$var.= '<?php
include("'.$tabla.'_base.php");
?>'.chr(10);


$var.=chr(10);
$var.=chr(10);
$var.=chr(10);
$var.=chr(10);



$var.='<center>'.chr(10);
$var.='<?php'.chr(10);
$var.='include("connect.php");'.chr(10);
$var.='$query="select * from '.$tabla.' limit 0,1000";'.chr(10);
$var.='$result=mysql_query($query);'.chr(10);
$var.='if(mysql_error()){echo mysql_error()."<br>".$query."<br>";}'.chr(10);


$var.=''.chr(10);
$var.=''.chr(10);
$var.='echo \'<table class="t1">\';'.chr(10);

$var.='echo "<tr>";'.chr(10);

#-------------------------------------------
$q="show columns from $database.$tabla";
$r=mysql_query($q);
if(mysql_error()){echo mysql_error();}
while($row=mysql_fetch_array($r)){
	$var.='	echo "<th>'.$row[0].'</th>";'.chr(10);
}
#-------------------------------------------

$var.='echo "</tr>";'.chr(10);

$var.=''.chr(10);


$var.='while($row=mysql_fetch_array($result)){'.chr(10);
$var.='	echo "<tr>";'.chr(10);

#-------------------------------------------
$q="show columns from $database.$tabla";
$r=mysql_query($q);
if(mysql_error()){echo mysql_error();}
while($row=mysql_fetch_array($r)){
	$var.='	echo \'<td>\'.$row["'.$row[0].'"].\'</td>\';'.chr(10);
}
#-------------------------------------------

$var.='	echo \'<td><A HREF="'.$tabla.'_ingreso.php?id_'.$tabla.'=\'.$row["id"].\'"><button>Modificar</button></A></td>\';'.chr(10);
$var.='	echo \'<td><A HREF="'.$tabla.'_eliminar.php?id_'.$tabla.'=\'.$row["id"].\'"><button>Eliminar</button></A></td>\';'.chr(10);


$var.='	echo "</tr>".chr(10);'.chr(10);
$var.='}'.chr(10);
$var.='?>'.chr(10);
$var.='</table>';
$var.='</center>'.chr(10);

?>
