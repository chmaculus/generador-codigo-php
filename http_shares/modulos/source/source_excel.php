<?php

include_once("connect.php");

$fecha=date("Y-n-d");
$hora=date("H_i_s");

$query='select * from source';
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
$header .= "<td>categoria</td>";
$header .= "<td>descripcion</td>";
$header .= "<td>contenido</td>";
$header .= "</tr>".chr(13);

while($row=mysql_fetch_array($result)){
	$linea="<tr>";
	$linea.="<td>". $row["id"]."</td>";
	$linea.="<td>". $row["categoria"]."</td>";
	$linea.="<td>". $row["descripcion"]."</td>";
	$linea.="<td>". $row["contenido"]."</td>";
	$linea.="</tr>".chr(13);
	$data .= $linea;
}

header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=listado_source_".$fecha."_".$hora.".xls");
header("Pragma: no-cache");
header("Expires: 0");
print $header_abre.$header.$data.$header_cierra;

?>
