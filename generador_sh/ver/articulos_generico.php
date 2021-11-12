<! #------------------------------------------------------------- >
tabla headers : articulos

<table class="t1">
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
</table>
<! #------------------------------------------------------------- >


<! #------------------------------------------------------------- >
tabla: articulos

<table class="t1">
	<td>id</td>
	<td>codigo_interno</td>
	<td>marca</td>
	<td>descripcion</td>
	<td>contenido</td>
	<td>presentacion</td>
	<td>codigo_barra</td>
	<td>fecha</td>
	<td>hora</td>
	<td>clasificacion</td>
	<td>subclasificacion</td>
</table>
<! #------------------------------------------------------------- >


<! #------------------------------------------------------------- >

<?php
#rows
	$row["id"]
	$row["codigo_interno"]
	$row["marca"]
	$row["descripcion"]
	$row["contenido"]
	$row["presentacion"]
	$row["codigo_barra"]
	$row["fecha"]
	$row["hora"]
	$row["clasificacion"]
	$row["subclasificacion"]


#--------------------------------------------------------
#rows table
echo '<table class="t1">';
	echo "<td>".$row["id"]."</td>"
	echo "<td>".$row["codigo_interno"]."</td>"
	echo "<td>".$row["marca"]."</td>"
	echo "<td>".$row["descripcion"]."</td>"
	echo "<td>".$row["contenido"]."</td>"
	echo "<td>".$row["presentacion"]."</td>"
	echo "<td>".$row["codigo_barra"]."</td>"
	echo "<td>".$row["fecha"]."</td>"
	echo "<td>".$row["hora"]."</td>"
	echo "<td>".$row["clasificacion"]."</td>"
	echo "<td>".$row["subclasificacion"]."</td>"
</table>
#--------------------------------------------------------


#--------------------------------------------------------
#rows table font
echo '<table class="t1">';
	echo '<tr>';
	echo "<td>".$row["id"]."</td>"
	echo "<td>".$row["codigo_interno"]."</td>"
	echo "<td>".$row["marca"]."</td>"
	echo "<td>".$row["descripcion"]."</td>"
	echo "<td>".$row["contenido"]."</td>"
	echo "<td>".$row["presentacion"]."</td>"
	echo "<td>".$row["codigo_barra"]."</td>"
	echo "<td>".$row["fecha"]."</td>"
	echo "<td>".$row["hora"]."</td>"
	echo "<td>".$row["clasificacion"]."</td>"
	echo "<td>".$row["subclasificacion"]."</td>"
	echo '</tr>'.chr(13);
</table>
#--------------------------------------------------------


#--------------------------------------------------------
#input
<table class="t1">
<tr>
	<th>id</th>
	<td><input type="text" name="id" id="id" value="" size="10"></td>
</tr>
<tr>
	<th>codigo_interno</th>
	<td><input type="text" name="codigo_interno" id="codigo_interno" value="" size="10"></td>
</tr>
<tr>
	<th>marca</th>
	<td><input type="text" name="marca" id="marca" value="" size="10"></td>
</tr>
<tr>
	<th>descripcion</th>
	<td><input type="text" name="descripcion" id="descripcion" value="" size="10"></td>
</tr>
<tr>
	<th>contenido</th>
	<td><input type="text" name="contenido" id="contenido" value="" size="10"></td>
</tr>
<tr>
	<th>presentacion</th>
	<td><input type="text" name="presentacion" id="presentacion" value="" size="10"></td>
</tr>
<tr>
	<th>codigo_barra</th>
	<td><input type="text" name="codigo_barra" id="codigo_barra" value="" size="10"></td>
</tr>
<tr>
	<th>fecha</th>
	<td><input type="text" name="fecha" id="fecha" value="" size="10"></td>
</tr>
<tr>
	<th>hora</th>
	<td><input type="text" name="hora" id="hora" value="" size="10"></td>
</tr>
<tr>
	<th>clasificacion</th>
	<td><input type="text" name="clasificacion" id="clasificacion" value="" size="10"></td>
</tr>
<tr>
	<th>subclasificacion</th>
	<td><input type="text" name="subclasificacion" id="subclasificacion" value="" size="10"></td>
</tr>
</table>
#--------------------------------------------------------


#--------------------------------------------------------
#modify
<table class="t1">
<tr>
	<th>id</th>
	<td><input type="text" name="id" id="id" value="<?php if($array_articulos["id"]){ echo $array_articulos["id"]; } ?>" size="10"></td>
</tr>
<tr>
	<th>codigo_interno</th>
	<td><input type="text" name="codigo_interno" id="codigo_interno" value="<?php if($array_articulos["codigo_interno"]){ echo $array_articulos["codigo_interno"]; } ?>" size="10"></td>
</tr>
<tr>
	<th>marca</th>
	<td><input type="text" name="marca" id="marca" value="<?php if($array_articulos["marca"]){ echo $array_articulos["marca"]; } ?>" size="10"></td>
</tr>
<tr>
	<th>descripcion</th>
	<td><input type="text" name="descripcion" id="descripcion" value="<?php if($array_articulos["descripcion"]){ echo $array_articulos["descripcion"]; } ?>" size="10"></td>
</tr>
<tr>
	<th>contenido</th>
	<td><input type="text" name="contenido" id="contenido" value="<?php if($array_articulos["contenido"]){ echo $array_articulos["contenido"]; } ?>" size="10"></td>
</tr>
<tr>
	<th>presentacion</th>
	<td><input type="text" name="presentacion" id="presentacion" value="<?php if($array_articulos["presentacion"]){ echo $array_articulos["presentacion"]; } ?>" size="10"></td>
</tr>
<tr>
	<th>codigo_barra</th>
	<td><input type="text" name="codigo_barra" id="codigo_barra" value="<?php if($array_articulos["codigo_barra"]){ echo $array_articulos["codigo_barra"]; } ?>" size="10"></td>
</tr>
<tr>
	<th>fecha</th>
	<td><input type="text" name="fecha" id="fecha" value="<?php if($array_articulos["fecha"]){ echo $array_articulos["fecha"]; } ?>" size="10"></td>
</tr>
<tr>
	<th>hora</th>
	<td><input type="text" name="hora" id="hora" value="<?php if($array_articulos["hora"]){ echo $array_articulos["hora"]; } ?>" size="10"></td>
</tr>
<tr>
	<th>clasificacion</th>
	<td><input type="text" name="clasificacion" id="clasificacion" value="<?php if($array_articulos["clasificacion"]){ echo $array_articulos["clasificacion"]; } ?>" size="10"></td>
</tr>
<tr>
	<th>subclasificacion</th>
	<td><input type="text" name="subclasificacion" id="subclasificacion" value="<?php if($array_articulos["subclasificacion"]){ echo $array_articulos["subclasificacion"]; } ?>" size="10"></td>
</tr>
</table>

#--------------------------------------------------------


?>
<! #------------------------------------------------------------- >
#modify2
<table class="t1">
	<tr>
		<td>id</td>
		<td><input type="text" name="id" value="<?php echo $array_articulos["id"]; ?>" size="30" maxlength="80"></td>
	</tr>
	<tr>
		<td>codigo_interno</td>
		<td><input type="text" name="codigo_interno" value="<?php echo $array_articulos["codigo_interno"]; ?>" size="30" maxlength="80"></td>
	</tr>
	<tr>
		<td>marca</td>
		<td><input type="text" name="marca" value="<?php echo $array_articulos["marca"]; ?>" size="30" maxlength="80"></td>
	</tr>
	<tr>
		<td>descripcion</td>
		<td><input type="text" name="descripcion" value="<?php echo $array_articulos["descripcion"]; ?>" size="30" maxlength="80"></td>
	</tr>
	<tr>
		<td>contenido</td>
		<td><input type="text" name="contenido" value="<?php echo $array_articulos["contenido"]; ?>" size="30" maxlength="80"></td>
	</tr>
	<tr>
		<td>presentacion</td>
		<td><input type="text" name="presentacion" value="<?php echo $array_articulos["presentacion"]; ?>" size="30" maxlength="80"></td>
	</tr>
	<tr>
		<td>codigo_barra</td>
		<td><input type="text" name="codigo_barra" value="<?php echo $array_articulos["codigo_barra"]; ?>" size="30" maxlength="80"></td>
	</tr>
	<tr>
		<td>fecha</td>
		<td><input type="text" name="fecha" value="<?php echo $array_articulos["fecha"]; ?>" size="30" maxlength="80"></td>
	</tr>
	<tr>
		<td>hora</td>
		<td><input type="text" name="hora" value="<?php echo $array_articulos["hora"]; ?>" size="30" maxlength="80"></td>
	</tr>
	<tr>
		<td>clasificacion</td>
		<td><input type="text" name="clasificacion" value="<?php echo $array_articulos["clasificacion"]; ?>" size="30" maxlength="80"></td>
	</tr>
	<tr>
		<td>subclasificacion</td>
		<td><input type="text" name="subclasificacion" value="<?php echo $array_articulos["subclasificacion"]; ?>" size="30" maxlength="80"></td>
	</tr>
</table>
<! #------------------------------------------------------------- >
<?php

#----------------------------------------------------------------------------------
#muestra
echo '<table class="t1">';
echo "<tr>";
	echo '<td>id</td>';
	echo '<td>'.$array_articulos["id"].'</td>';
echo "</tr>";
echo "<tr>";
	echo '<td>codigo_interno</td>';
	echo '<td>'.$array_articulos["codigo_interno"].'</td>';
echo "</tr>";
echo "<tr>";
	echo '<td>marca</td>';
	echo '<td>'.$array_articulos["marca"].'</td>';
echo "</tr>";
echo "<tr>";
	echo '<td>descripcion</td>';
	echo '<td>'.$array_articulos["descripcion"].'</td>';
echo "</tr>";
echo "<tr>";
	echo '<td>contenido</td>';
	echo '<td>'.$array_articulos["contenido"].'</td>';
echo "</tr>";
echo "<tr>";
	echo '<td>presentacion</td>';
	echo '<td>'.$array_articulos["presentacion"].'</td>';
echo "</tr>";
echo "<tr>";
	echo '<td>codigo_barra</td>';
	echo '<td>'.$array_articulos["codigo_barra"].'</td>';
echo "</tr>";
echo "<tr>";
	echo '<td>fecha</td>';
	echo '<td>'.$array_articulos["fecha"].'</td>';
echo "</tr>";
echo "<tr>";
	echo '<td>hora</td>';
	echo '<td>'.$array_articulos["hora"].'</td>';
echo "</tr>";
echo "<tr>";
	echo '<td>clasificacion</td>';
	echo '<td>'.$array_articulos["clasificacion"].'</td>';
echo "</tr>";
echo "<tr>";
	echo '<td>subclasificacion</td>';
	echo '<td>'.$array_articulos["subclasificacion"].'</td>';
echo "</tr>";
</table>
#----------------------------------------------------------------------------------


#----------------------------------------------------------------------------------
#array post
	$array_articulos["id"]=$_POST["id"];
	$array_articulos["codigo_interno"]=$_POST["codigo_interno"];
	$array_articulos["marca"]=$_POST["marca"];
	$array_articulos["descripcion"]=$_POST["descripcion"];
	$array_articulos["contenido"]=$_POST["contenido"];
	$array_articulos["presentacion"]=$_POST["presentacion"];
	$array_articulos["codigo_barra"]=$_POST["codigo_barra"];
	$array_articulos["fecha"]=$_POST["fecha"];
	$array_articulos["hora"]=$_POST["hora"];
	$array_articulos["clasificacion"]=$_POST["clasificacion"];
	$array_articulos["subclasificacion"]=$_POST["subclasificacion"];
#----------------------------------------------------------------------------------


#----------------------------------------------------------------------------------
#array get
	$array_articulos["id"]=$_GET["id"];
	$array_articulos["codigo_interno"]=$_GET["codigo_interno"];
	$array_articulos["marca"]=$_GET["marca"];
	$array_articulos["descripcion"]=$_GET["descripcion"];
	$array_articulos["contenido"]=$_GET["contenido"];
	$array_articulos["presentacion"]=$_GET["presentacion"];
	$array_articulos["codigo_barra"]=$_GET["codigo_barra"];
	$array_articulos["fecha"]=$_GET["fecha"];
	$array_articulos["hora"]=$_GET["hora"];
	$array_articulos["clasificacion"]=$_GET["clasificacion"];
	$array_articulos["subclasificacion"]=$_GET["subclasificacion"];
#----------------------------------------------------------------------------------


#----------------------------------------------------------------------------------
#rows char 13
	echo $row["id"].'<br>'.chr(13);
	echo $row["codigo_interno"].'<br>'.chr(13);
	echo $row["marca"].'<br>'.chr(13);
	echo $row["descripcion"].'<br>'.chr(13);
	echo $row["contenido"].'<br>'.chr(13);
	echo $row["presentacion"].'<br>'.chr(13);
	echo $row["codigo_barra"].'<br>'.chr(13);
	echo $row["fecha"].'<br>'.chr(13);
	echo $row["hora"].'<br>'.chr(13);
	echo $row["clasificacion"].'<br>'.chr(13);
	echo $row["subclasificacion"].'<br>'.chr(13);
#----------------------------------------------------------------------------------


#--------------------------------------
<table class="t1">
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
$query='select * from articulos';
$result=mysql_query($query)or die(mysql_error() ." ".$_SERVER["script_name"]." ".$query);
while($row=mysql_fetch_array($result)){
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
}
</table>
#--------------------------------------


#estructura tabla: articulos
#--------------------------------------
# 0	id	mediumint(8) unsigned
# 1	codigo_interno	varchar(10)
# 2	marca	varchar(30)
# 3	descripcion	varchar(80)
# 4	contenido	varchar(80)
# 5	presentacion	varchar(80)
# 6	codigo_barra	varchar(20)
# 7	fecha	date
# 8	hora	time
# 9	clasificacion	varchar(60)
# 10	subclasificacion	varchar(60)
#--------------------------------------


#--------------------------------------
#temporal mio
	echo '<td><input type="text" name="id'.$row["id"].'" id="id'.$row["id"].'" size="4" onchange="calcular2('.$row["id"].');" value="'.$array_costos["id"].'"></td>';
	echo '<td><input type="text" name="codigo_interno'.$row["id"].'" id="codigo_interno'.$row["id"].'" size="4" onchange="calcular2('.$row["id"].');" value="'.$array_costos["codigo_interno"].'"></td>';
	echo '<td><input type="text" name="marca'.$row["id"].'" id="marca'.$row["id"].'" size="4" onchange="calcular2('.$row["id"].');" value="'.$array_costos["marca"].'"></td>';
	echo '<td><input type="text" name="descripcion'.$row["id"].'" id="descripcion'.$row["id"].'" size="4" onchange="calcular2('.$row["id"].');" value="'.$array_costos["descripcion"].'"></td>';
	echo '<td><input type="text" name="contenido'.$row["id"].'" id="contenido'.$row["id"].'" size="4" onchange="calcular2('.$row["id"].');" value="'.$array_costos["contenido"].'"></td>';
	echo '<td><input type="text" name="presentacion'.$row["id"].'" id="presentacion'.$row["id"].'" size="4" onchange="calcular2('.$row["id"].');" value="'.$array_costos["presentacion"].'"></td>';
	echo '<td><input type="text" name="codigo_barra'.$row["id"].'" id="codigo_barra'.$row["id"].'" size="4" onchange="calcular2('.$row["id"].');" value="'.$array_costos["codigo_barra"].'"></td>';
	echo '<td><input type="text" name="fecha'.$row["id"].'" id="fecha'.$row["id"].'" size="4" onchange="calcular2('.$row["id"].');" value="'.$array_costos["fecha"].'"></td>';
	echo '<td><input type="text" name="hora'.$row["id"].'" id="hora'.$row["id"].'" size="4" onchange="calcular2('.$row["id"].');" value="'.$array_costos["hora"].'"></td>';
	echo '<td><input type="text" name="clasificacion'.$row["id"].'" id="clasificacion'.$row["id"].'" size="4" onchange="calcular2('.$row["id"].');" value="'.$array_costos["clasificacion"].'"></td>';
	echo '<td><input type="text" name="subclasificacion'.$row["id"].'" id="subclasificacion'.$row["id"].'" size="4" onchange="calcular2('.$row["id"].');" value="'.$array_costos["subclasificacion"].'"></td>';
#--------------------------------------

?>


