<?php
include("articulos_base.php");
include("connect.php");
$query="select * from articulos limit 0,100";
$result=mysql_query($query)or die(mysql_error());
?>

<center>
<table class="t1">
<tr>
	<th>id</th>
	<th>codigo_interno</th>
	<th>marca</th>
	<th>descripcion</th>
	<th>contenido</th>
	<th>presentacion</th>
	<th>codigo_barra</th>
	<th>fecha</th>
	<th>hora</th>
	<th>clasificacion</th>
	<th>subclasificacion</th>
	<th>Accion</th>
	<th>Accion</th>
</tr>

<?php
while($row=mysql_fetch_array($result)){
	echo "<tr>";
	echo '<td>'.$row["id"].'</td>';
	echo '<td>'.$row["codigo_interno"].'</td>';
	echo '<td>'.$row["marca"].'</td>';
	echo '<td>'.$row["descripcion"].'</td>';
	echo '<td>'.$row["contenido"].'</td>';
	echo '<td>'.$row["presentacion"].'</td>';
	echo '<td>'.$row["codigo_barra"].'</td>';
	echo '<td>'.$row["fecha"].'</td>';
	echo '<td>'.$row["hora"].'</td>';
	echo '<td>'.$row["clasificacion"].'</td>';
	echo '<td>'.$row["subclasificacion"].'</td>';
	echo '<td><A href="articulos_ingreso.php?id_articulos='.$row["id"].'"><button>Modificar</button></A></td>';
	echo '<td><A href="articulos_eliminar.php?id_articulos='.$row["id"].'"><button>Eliminar</button></A></td>';
	echo "</tr>";
}
?>
</center>
