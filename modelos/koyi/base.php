<?php

//$tabla=$_POST["tabla"];
if($_POST["database"] AND $_POST["tabla"]){
	$database=$_POST["database"];
	$tabla=$_POST["tabla"];
}else{
	$database=$database;
	$tabla=$tabla;
}


$var.='<?php'.chr(10);
$var.='include_once("cabecera.inc.php");'.chr(10);
$var.='?>'.chr(10);
$var.='<center>'.chr(10);
$var.='<titulo>'.$tabla.'</titulo>'.chr(10);

$var.='<table>'.chr(10);
$var.='	<tr>'.chr(10);
$var.='		<td><A href="'.$tabla.'_modifica.php"><button>Ingresar</button></a></td>'.chr(10);
$var.='		<td><A href="'.$tabla.'_busqueda.php"><button>Buscar</button></a></td>'.chr(10);
$var.='		<td><A href="'.$tabla.'_listado.php"><button>Listado</button></a></td>'.chr(10);
$var.='	</tr>'.chr(10);
$var.='</table>'.chr(10);
$var.='</center><br><br>'.chr(10);

?>
