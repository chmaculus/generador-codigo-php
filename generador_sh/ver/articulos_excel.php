<?php

include_once("connect.php");

$fecha=date("Y-n-d");
$hora=date("H_i_s");

$query='select * from articulos';
$result = mysql_query($query)or die(mysql_error());

$header_abre='<html>
<head>
<title>Listado de stock</title>
</head>
<table border="1">
';

$header_cierra="</table>";

$header = "<tr>";
$header .= "<td>id</td>";
$header .= "<td>codigo_interno</td>";
$header .= "<td>marca</td>";
$header .= "<td>descripcion</td>";
$header .= "<td>contenido</td>";
$header .= "<td>presentacion</td>";
$header .= "<td>codigo_barra</td>";
$header .= "<td>fecha</td>";
$header .= "<td>hora</td>";
$header .= "<td>clasificacion</td>";
$header .= "<td>subclasificacion</td>";
$header .= "</tr>".chr(13);

while($row=mysql_fetch_array($result)){
	$linea="<tr>";
	$linea.="<td>". $row["id"]."</td>";
	$linea.="<td>". $row["codigo_interno"]."</td>";
	$linea.="<td>". $row["marca"]."</td>";
	$linea.="<td>". $row["descripcion"]."</td>";
	$linea.="<td>". $row["contenido"]."</td>";
	$linea.="<td>". $row["presentacion"]."</td>";
	$linea.="<td>". $row["codigo_barra"]."</td>";
	$linea.="<td>". $row["fecha"]."</td>";
	$linea.="<td>". $row["hora"]."</td>";
	$linea.="<td>". $row["clasificacion"]."</td>";
	$linea.="<td>". $row["subclasificacion"]."</td>";
	$linea.="</tr>".chr(13);
	$data .= $linea;
}

header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=listado_articulos_".$fecha."_".$hora.".xls");
header("Pragma: no-cache");
header("Expires: 0");
print $header_abre.$header.$data.$header_cierra;

?>
