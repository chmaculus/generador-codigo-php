<?php
include("articulos_base.php");
include("connect.php");

if(!$_GET["id_articulos"]){
 	exit;
}
$id_articulos=$_GET["id_articulos"];

$query='select * from articulos where id="'.$id_articulos.'"';
$array_articulos=mysql_fetch_array(mysql_query($query));

<center>
include("articulos_muestra.inc.php");
</center>

?>
