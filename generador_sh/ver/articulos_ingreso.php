<?php
include_once("articulos_base.php");
if($_GET["id_articulos"]){
	include_once("connect.php");
	$query='select * from articulos where id="'.$_GET["id_articulos"].'"';
	$array_articulos=mysql_fetch_array(mysql_query($query));
}
?>
<center>
<form method="post" action="articulos_update.php" name="form_articulos">
<table class="t1">

<tr>
	<th>id</th>
	<td><input type="text" name="id" id="id" value="<?php if($array_articulos["id"]){ echo $array_articulos["id"]; } ?>" size="10"></td>
</tr>
<tr>
	<th>codigo_interno</th>
	<td><input type="text" name="codigo_interno" id="codigo_interno" value="<?php if($array_articulos["codigo_interno"]){ echo $array_articulos["codigo_interno"]; } ?>" size="10"></td>
</tr>
<tr>
	<th>marca</th>
	<td><input type="text" name="marca" id="marca" value="<?php if($array_articulos["marca"]){ echo $array_articulos["marca"]; } ?>" size="10"></td>
</tr>
<tr>
	<th>descripcion</th>
	<td><input type="text" name="descripcion" id="descripcion" value="<?php if($array_articulos["descripcion"]){ echo $array_articulos["descripcion"]; } ?>" size="10"></td>
</tr>
<tr>
	<th>contenido</th>
	<td><input type="text" name="contenido" id="contenido" value="<?php if($array_articulos["contenido"]){ echo $array_articulos["contenido"]; } ?>" size="10"></td>
</tr>
<tr>
	<th>presentacion</th>
	<td><input type="text" name="presentacion" id="presentacion" value="<?php if($array_articulos["presentacion"]){ echo $array_articulos["presentacion"]; } ?>" size="10"></td>
</tr>
<tr>
	<th>codigo_barra</th>
	<td><input type="text" name="codigo_barra" id="codigo_barra" value="<?php if($array_articulos["codigo_barra"]){ echo $array_articulos["codigo_barra"]; } ?>" size="10"></td>
</tr>
<tr>
	<th>fecha</th>
	<td><input type="text" name="fecha" id="fecha" value="<?php if($array_articulos["fecha"]){ echo $array_articulos["fecha"]; } ?>" size="10"></td>
</tr>
<tr>
	<th>hora</th>
	<td><input type="text" name="hora" id="hora" value="<?php if($array_articulos["hora"]){ echo $array_articulos["hora"]; } ?>" size="10"></td>
</tr>
<tr>
	<th>clasificacion</th>
	<td><input type="text" name="clasificacion" id="clasificacion" value="<?php if($array_articulos["clasificacion"]){ echo $array_articulos["clasificacion"]; } ?>" size="10"></td>
</tr>
<tr>
	<th>subclasificacion</th>
	<td><input type="text" name="subclasificacion" id="subclasificacion" value="<?php if($array_articulos["subclasificacion"]){ echo $array_articulos["subclasificacion"]; } ?>" size="10"></td>
</tr>

</table>
<?php
if($_GET["id_articulos"] OR $array_articulos["id"]){
	echo '<input type="hidden" name="accion" value="modificacion">';
	echo '<input type="hidden" name="id_articulos" value="'.$array_articulos["id"].'">';
}else{
	echo '<input type="hidden" name="accion" value="ingreso">';
}
?>
<input type="submit" name="ACEPTAR" value="ACEPTAR">
</form>
</center>
