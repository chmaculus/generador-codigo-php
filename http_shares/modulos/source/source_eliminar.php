<?php
include_once("source_base.php");
echo "<center>";
if($_GET["id_source"]){
	$id_source=$_GET["id_source"];
}
if($_POST["id_source"]){
	$id_source=$_POST["id_source"];
}
if($_POST["decision"]=="ELIMINAR"){
	include("source_update.php");
echo "<center>";
	echo '<font1>Los datos se eliminaron correctamente</font1>';
	exit;
}

if($_POST["decision"]=="CANCELAR"){
	include_once("connect.php");
	include("source_muestra.inc.php");
	echo '<font1>Los datos no se han eliminado</font1>';
	exit;

}


include_once("connect.php");

$query='select * from source where id="'.$id_source.'"';
$array_source=mysql_fetch_array(mysql_query($query));

include("source_muestra.inc.php");

echo '
<form action="source_eliminar.php" method="post">
		<input type="hidden" name="id_source" value="'.$id_source.'">
		<input type="hidden" name="accion" value="ELIMINAR">
		<input type="submit" name="decision" value="ELIMINAR">
		<input type="submit" name="decision" value="CANCELAR">
</form>';
?>
</center>
