<?php
include("source_base.php");
include("../../includes/connect.php");
//include("../../includes/funciones.php");
$query="select * from source limit 0,100";
$result=mysql_query($query)or die(mysql_error());
?>

<center>
<table class="t1">
<tr>
	<th>id</th>
	<th>categoria</th>
	<th>descripcion</th>
	<th>contenido</th>
	<th>Accion</th>
	<th>Accion</th>
</tr>

<?php
while($row=mysql_fetch_array($result)){
	echo "<tr>";
	echo '<td>'.$row["id"].'</td>';
	echo '<td>'.$row["categoria"].'</td>';
	echo '<td>'.$row["descripcion"].'</td>';
	echo '<td><textarea>'.hex2bin($row["contenido"]).'</textarea></td>';
	echo '<td><A href="source_ingreso.php?id_source='.$row["id"].'"><button>Modificar</button></A></td>';
	echo '<td><A href="source_eliminar.php?id_source='.$row["id"].'"><button>Eliminar</button></A></td>';
	echo "</tr>";
}
?>
</center>
