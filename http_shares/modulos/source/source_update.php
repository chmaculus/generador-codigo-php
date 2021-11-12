<?php
include_once("source_base.php");
include_once("../../includes/connect.php");

$fecha=date("Y-n-d");
$hora=date("H:i:s");

if($_POST["id_source"]){
    $id_source=$_POST["id_source"];
}

$contenido=stripslashes($_POST["contenido"]);

if($_POST["accion"]=="ingreso"){
	$query='insert into source set
		categoria="'.$_POST["categoria"].'",
		descripcion="'.$_POST["descripcion"].'",
		contenido="'.bin2hex($contenido).'"
		';
	echo $query;
	mysql_query($query)or die(mysql_error());
	$id_source=mysql_insert_id($id_connection);
}


if($_POST["accion"]=="modificacion"){
		$query='update source set
		categoria="'.$_POST["categoria"].'",
		descripcion="'.$_POST["descripcion"].'",
		contenido="'.bin2hex($contenido).'"
			where id="'.$_POST["id_source"].'"
	';
	echo $query;
	mysql_query($query)or die(mysql_error());
	$id_source=$_POST["id_source"];
}

#muestra registro ingresado
$query='select * from source where id="'.$id_source.'"';
$array_source=mysql_fetch_array(mysql_query($query));

echo "<center>";
include("source_muestra.inc.php");

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
 	$query='delete from source where id="'.$id_source.'"';
 	mysql_query($query)or die(mysql_error());
 }

?>
</center>
