<! #------------------------------------------------------------- >
tabla headers : source

<table class="t1">
	<th>id</th>
	<th>categoria</th>
	<th>descripcion</th>
	<th>contenido</th>
</table>
<! #------------------------------------------------------------- >


<! #------------------------------------------------------------- >
tabla: source

<table class="t1">
	<td>id</td>
	<td>categoria</td>
	<td>descripcion</td>
	<td>contenido</td>
</table>
<! #------------------------------------------------------------- >


<! #------------------------------------------------------------- >

<?php
#rows
	$row["id"]
	$row["categoria"]
	$row["descripcion"]
	$row["contenido"]


#--------------------------------------------------------
#rows table
echo '<table class="t1">';
	echo "<td>".$row["id"]."</td>"
	echo "<td>".$row["categoria"]."</td>"
	echo "<td>".$row["descripcion"]."</td>"
	echo "<td>".$row["contenido"]."</td>"
</table>
#--------------------------------------------------------


#--------------------------------------------------------
#rows table font
echo '<table class="t1">';
	echo '<tr>';
	echo "<td>".$row["id"]."</td>"
	echo "<td>".$row["categoria"]."</td>"
	echo "<td>".$row["descripcion"]."</td>"
	echo "<td>".$row["contenido"]."</td>"
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
	<th>categoria</th>
	<td><input type="text" name="categoria" id="categoria" value="" size="10"></td>
</tr>
<tr>
	<th>descripcion</th>
	<td><input type="text" name="descripcion" id="descripcion" value="" size="10"></td>
</tr>
<tr>
	<th>contenido</th>
	<td><input type="text" name="contenido" id="contenido" value="" size="10"></td>
</tr>
</table>
#--------------------------------------------------------


#--------------------------------------------------------
#modify
<table class="t1">
<tr>
	<th>id</th>
	<td><input type="text" name="id" id="id" value="<?php if($array_source["id"]){ echo $array_source["id"]; } ?>" size="10"></td>
</tr>
<tr>
	<th>categoria</th>
	<td><input type="text" name="categoria" id="categoria" value="<?php if($array_source["categoria"]){ echo $array_source["categoria"]; } ?>" size="10"></td>
</tr>
<tr>
	<th>descripcion</th>
	<td><input type="text" name="descripcion" id="descripcion" value="<?php if($array_source["descripcion"]){ echo $array_source["descripcion"]; } ?>" size="10"></td>
</tr>
<tr>
	<th>contenido</th>
	<td><input type="text" name="contenido" id="contenido" value="<?php if($array_source["contenido"]){ echo $array_source["contenido"]; } ?>" size="10"></td>
</tr>
</table>

#--------------------------------------------------------


?>
<! #------------------------------------------------------------- >
#modify2
<table class="t1">
	<tr>
		<td>id</td>
		<td><input type="text" name="id" value="<?php echo $array_source["id"]; ?>" size="30" maxlength="80"></td>
	</tr>
	<tr>
		<td>categoria</td>
		<td><input type="text" name="categoria" value="<?php echo $array_source["categoria"]; ?>" size="30" maxlength="80"></td>
	</tr>
	<tr>
		<td>descripcion</td>
		<td><input type="text" name="descripcion" value="<?php echo $array_source["descripcion"]; ?>" size="30" maxlength="80"></td>
	</tr>
	<tr>
		<td>contenido</td>
		<td><input type="text" name="contenido" value="<?php echo $array_source["contenido"]; ?>" size="30" maxlength="80"></td>
	</tr>
</table>
<! #------------------------------------------------------------- >
<?php

#----------------------------------------------------------------------------------
#muestra
echo '<table class="t1">';
echo "<tr>";
	echo '<td>id</td>';
	echo '<td>'.$array_source["id"].'</td>';
echo "</tr>";
echo "<tr>";
	echo '<td>categoria</td>';
	echo '<td>'.$array_source["categoria"].'</td>';
echo "</tr>";
echo "<tr>";
	echo '<td>descripcion</td>';
	echo '<td>'.$array_source["descripcion"].'</td>';
echo "</tr>";
echo "<tr>";
	echo '<td>contenido</td>';
	echo '<td>'.$array_source["contenido"].'</td>';
echo "</tr>";
</table>
#----------------------------------------------------------------------------------


#----------------------------------------------------------------------------------
#array post
	$array_source["id"]=$_POST["id"];
	$array_source["categoria"]=$_POST["categoria"];
	$array_source["descripcion"]=$_POST["descripcion"];
	$array_source["contenido"]=$_POST["contenido"];
#----------------------------------------------------------------------------------


#----------------------------------------------------------------------------------
#array get
	$array_source["id"]=$_GET["id"];
	$array_source["categoria"]=$_GET["categoria"];
	$array_source["descripcion"]=$_GET["descripcion"];
	$array_source["contenido"]=$_GET["contenido"];
#----------------------------------------------------------------------------------


#----------------------------------------------------------------------------------
#rows char 13
	echo $row["id"].'<br>'.chr(13);
	echo $row["categoria"].'<br>'.chr(13);
	echo $row["descripcion"].'<br>'.chr(13);
	echo $row["contenido"].'<br>'.chr(13);
#----------------------------------------------------------------------------------


#--------------------------------------
<table class="t1">
	<th>id</th>
	<th>categoria</th>
	<th>descripcion</th>
	<th>contenido</th>
$query='select * from source';
$result=mysql_query($query)or die(mysql_error() ." ".$_SERVER["script_name"]." ".$query);
while($row=mysql_fetch_array($result)){
	echo '<td>'.$row["id"].'</td>';
	echo '<td>'.$row["categoria"].'</td>';
	echo '<td>'.$row["descripcion"].'</td>';
	echo '<td>'.$row["contenido"].'</td>';
}
</table>
#--------------------------------------


#estructura tabla: source
#--------------------------------------
# 0	id	mediumint(8) unsigned
# 1	categoria	varchar(50)
# 2	descripcion	varchar(100)
# 3	contenido	longtext
#--------------------------------------


#--------------------------------------
#temporal mio
	echo '<td><input type="text" name="id'.$row["id"].'" id="id'.$row["id"].'" size="4" onchange="calcular2('.$row["id"].');" value="'.$array_costos["id"].'"></td>';
	echo '<td><input type="text" name="categoria'.$row["id"].'" id="categoria'.$row["id"].'" size="4" onchange="calcular2('.$row["id"].');" value="'.$array_costos["categoria"].'"></td>';
	echo '<td><input type="text" name="descripcion'.$row["id"].'" id="descripcion'.$row["id"].'" size="4" onchange="calcular2('.$row["id"].');" value="'.$array_costos["descripcion"].'"></td>';
	echo '<td><input type="text" name="contenido'.$row["id"].'" id="contenido'.$row["id"].'" size="4" onchange="calcular2('.$row["id"].');" value="'.$array_costos["contenido"].'"></td>';
#--------------------------------------

?>


