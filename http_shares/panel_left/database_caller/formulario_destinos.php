<center>
<p>Formulario para generar codigo php de seleccion
select completa el select name para el formulario
en tabla se ingresa el dato sobre la tabla que va a consultar
en columna el campo de los datos, el valor option value no esta definido

</p>


<form action="destinos.php" method="post">

<table border="1">
	<tr>
		<td>Select name</td>
		<?php echo '<td><input type="text" name="select" value="'.$_POST["select"].'" size="5"></td>';?>
	</tr>
	<tr>
		<td>Database</td>
		<?php echo '<td><input type="text" name="database" value="'.$_POST["database"].'" size="15"></td>';?>
	</tr>
	<tr>
		<td>Tabla</td>
		<?php echo '<td><input type="text" name="tabla" value="'.$_POST["tabla"].'" size="15"></td>';?>
	</tr>
	<tr>
		<td>Modelo</td>
		<?php echo '<td><input type="text" name="modelo" value="'.$_POST["modelo"].'" size="15"></td>';?>
	</tr>
	<tr>
		<td>Columna</td>
		<?php echo '<td><input type="text" name="column" value="'.$_POST["columna"].'" size="15"></td>';?>
	</tr>
	<tr>
		<td>Nombre de archivo</td>
		<?php echo '<td><input type="text" name="file_name" value="'.$_POST["tabla"].'_'.$_POST["accion"].'" size="20"></td>';?>
	</tr>
</table>

<?php
echo '<input type="hidden" name="database" value="'.$_POST["database"].'" />';
echo '<input type="hidden" name="tabla" value="'.$_POST["tabla"].'" />';
echo '<input type="hidden" name="accion" value="'.$_POST["accion"].'" />';
echo '<input type="hidden" name="modelo" value="'.$_POST["modelo"].'" />';


?>

<input type="submit" name="button1" value="ToSource">
<input type="submit" name="button1" value="ToHTML">
<input type="submit" name="button1" value="ToTextBox">
<input type="submit" name="button1" value="ToFile">
</form>