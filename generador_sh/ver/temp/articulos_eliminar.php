<?php
include_once("articulos_base.php");
include_once("connect.php");
echo "<center>";
if($_GET["id_articulos"]){
	$id_articulos=$_GET["id_articulos"];
}
if($_POST["id_articulos"]){
	$id_articulos=$_POST["id_articulos"];
}
if($_POST["decision"]=="ELIMINAR"){
	include("articulos_update.php");
echo "<center>";
	echo '<font1>Los datos se eliminaron correctamente</font1>';
	exit;
}

if($_POST["decision"]=="CANCELAR"){
	include("articulos_muestra.inc.php");
	echo '<font1>Los datos no se han eliminado</font1>';
	exit;

}


$query='select * from articulos where id="'.$id_articulos.'"';
$array_articulos=mysql_fetch_array(mysql_query($query));

include("articulos_muestra.inc.php");

echo '
<form action="articulos_eliminar.php" method="post">
		<input type="hidden" name="id_articulos" value="'.$id_articulos.'">
		<input type="hidden" name="accion" value="ELIMINAR">
		<input type="submit" name="decision" value="ELIMINAR">
		<input type="submit" name="decision" value="CANCELAR">
</form>';
?>
</center>
