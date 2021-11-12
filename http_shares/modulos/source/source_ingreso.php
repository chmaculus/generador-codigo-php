<?php
include_once("source_base.php");
//include_once("../../includes/funciones.php");

if($_GET["id_source"]){
	include_once("../../includes/connect.php");
	$query='select * from source where id="'.$_GET["id_source"].'"';
	$array_source=mysql_fetch_array(mysql_query($query));
}
?>
<center>
<form method="post" action="source_update.php" name="form_source">
<table class="t1">

<tr>
<tr>
	<th>categoria</th>
	<td><input type="text" name="categoria" id="categoria" value="<?php if($array_source["categoria"]){ echo $array_source["categoria"]; } ?>" size="10"></td>
</tr>
<tr>
	<th>descripcion</th>
	<td><input type="text" name="descripcion" id="descripcion" value="<?php if($array_source["descripcion"]){ echo $array_source["descripcion"]; } ?>" size="10"></td>
</tr>
<tr>
	<th>contenido</th>
	<td><textarea name="contenido" id="contenido"  rows="10" cols="60" ><?php if($array_source["contenido"]){ echo hex2bin($array_source["contenido"]); } ?></textarea></td>
</tr>

</table>
<?php
if($_GET["id_source"] OR $array_source["id"]){
	echo '<input type="hidden" name="accion" value="modificacion">';
	echo '<input type="hidden" name="id_source" value="'.$array_source["id"].'">';
}else{
	echo '<input type="hidden" name="accion" value="ingreso">';
}
?>
<input type="submit" name="ACEPTAR" value="ACEPTAR">
</form>
</center>
