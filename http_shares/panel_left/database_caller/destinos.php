<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" href="style.css" type="text/css">
<meta content="text/html; charset=UTF-8" http-equiv="content-type" />
<title>Tablabla articulos By Christian Máculus</title>
</head>

<?php
include("../../includes/connect.php");
//include("../../includes/funciones.php");

include("modelos/".$_POST["modelo"]."/".$_POST["accion"]);

//echo $var;

/*
echo "accion: ".$_POST["accion"]."<br>";
echo "database: ".$_POST["database"]."<br>";
echo "tabla: ".$_POST["tabla"]."<br>";
echo "modelo: ".$_POST["modelo"]."<br>";
echo "nombre archivo: ".$_POST["file_name"]."<br>";
*/


/*
<input type="submit" name="button1" value="ToSource">
<input type="submit" name="button1" value="ToHTML">
<input type="submit" name="button1" value="ToTextBox">
<input type="submit" name="button1" value="ToFile">
*/

include("destinos.inc.php");

?>
