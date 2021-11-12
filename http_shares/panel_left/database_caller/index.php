<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>Source</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<META http-equiv=expires content=50>
	<link href="source3.css" rel="stylesheet" type="text/css">

	<script language="javascript" src="../../js/jquery-1.3.min.js"></script>
	<script language="javascript" src="funciones.js"></script>
</head>
<div id="DivAarriba">
	<form action="formulario_destinos.php" method="post" target="FrameCentralRight">
	<table>
	<tr>
	<td>DB</td>
	<td>
	<select name="database" id="database" size="0" OnChange="refreshtables();">
		<?php 
			include("databases.inc.php");
		?>
	</select>
	</td>
	</tr>
	<tr>
	<td>Tabla</td>

	<td>
	<select name="tabla" id="tabla" size="0">
		<?php 
			include("tablas.inc.php");
		?>
	</select>
	</td>
	</tr>

	<tr>
	<td>?</td>
	<td>
	<select name="accion" id="accion" size="0">
		<?php 
			include("accion.inc.php");
			//include("accion_koyi.inc.php");
		?>
	</select>
	</td>
	</tr>

	<tr>
	<td>modelo</td>
	<td>
	<select name="modelo" id="modelo" size="0">
		<?php 
			include("modelos.inc.php");
		?>
	</select>
	</td>
	</tr>

	</table>
	<input type="submit" name="ACEPTAR" value="ACEPTAR">
	</form>
</div>

<div id="DivAbajo">
<iframe name="FramePanelLeftDown" class="FramePanelLeftDown"></iframe>
</div>