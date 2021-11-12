<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>Source</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<META http-equiv=expires content=50>
	<link href="source3.css" rel="stylesheet" type="text/css">

	<script language="javascript" src="../js/jquery-1.3.min.js"></script>
	<script language="javascript" src="funciones.js"></script>
</head>

<div id="DivAarriba">
	<select name="categoria" id="categoria" size="0" onchange="categoria();">
		<?php 
			include("categoria.inc.php");
		?>
	</select><br>
	<select name="descripcion" id="descripcion" size="0">
		<?php 
			include("descripcion.inc.php");
		?>
	</select><br>
</div>

<div id="DivAbajo">
<iframe name="FramePanelLeftDown" class="FramePanelLeftDown"></iframe>
</div>