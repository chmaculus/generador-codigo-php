<?php
include_once("articulos_base.php");
include_once("connect.php");

$fecha=date("Y-n-d");
$hora=date("H:i:s");

if($_POST["id_articulos"]){
    $id_articulos=$_POST["id_articulos"];
}

if($_POST["accion"]=="ingreso"){
	$query='insert into articulos set
		id="'.$_POST["id"].'",
		codigo_interno="'.$_POST["codigo_interno"].'",
		marca="'.$_POST["marca"].'",
		descripcion="'.$_POST["descripcion"].'",
		contenido="'.$_POST["contenido"].'",
		presentacion="'.$_POST["presentacion"].'",
		codigo_barra="'.$_POST["codigo_barra"].'",
		fecha="'.$_POST["fecha"].'",
		hora="'.$_POST["hora"].'",
		clasificacion="'.$_POST["clasificacion"].'",
		subclasificacion="'.$_POST["subclasificacion"].'",
		';
	mysql_query($query)or die(mysql_error());
	$id_articulos=mysql_insert_id($id_connection);
}


if($_POST["accion"]=="modificacion"){
		$query='update articulos set
		id="'.$_POST["id"].'",
		codigo_interno="'.$_POST["codigo_interno"].'",
		marca="'.$_POST["marca"].'",
		descripcion="'.$_POST["descripcion"].'",
		contenido="'.$_POST["contenido"].'",
		presentacion="'.$_POST["presentacion"].'",
		codigo_barra="'.$_POST["codigo_barra"].'",
		fecha="'.$_POST["fecha"].'",
		hora="'.$_POST["hora"].'",
		clasificacion="'.$_POST["clasificacion"].'",
		subclasificacion="'.$_POST["subclasificacion"].'",
			where id="'.$_POST["id_articulos"].'"
	';
	mysql_query($query)or die(mysql_error());
	$id_articulos=$_POST["id_articulos"];
}

#muestra registro ingresado
$query='select * from articulos where id="'.$id_articulos.'"';
$array_articulos=mysql_fetch_array(mysql_query($query));

echo "<center>";
include("articulos_muestra.inc.php");

if(!mysql_error()){
	if($_POST["accion"]=="ingreso"){
		echo '<td>Los datos se ingresaron correctamente</td>';
	}
	if($_POST["accion"]=="modificacion"){
		echo '<td>Los datos se actualizaron correctamente</td>';
	}
}

echo "</center>";

 if($_POST["accion"]=="ELIMINAR"){
 	$query='delete from articulos where id="'.$id_articulos.'"';
 	mysql_query($query)or die(mysql_error());
 }

?>
</center>
