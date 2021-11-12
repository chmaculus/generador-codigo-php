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
$var.='include("'.$tabla.'_base.php");'.chr(10);
$var.='?>'.chr(10);
$var.='<body onLoad=document.aa.busqueda.focus()>'.chr(10);
$var.=''.chr(10);
$var.='<center>'.chr(10);
$var.='<br>'.chr(10);
$var.='<titulo>Busqueda '.$tabla.'</titulo>'.chr(10);
$var.='<?php'.chr(10);
$var.='$limite=20;'.chr(10);
$var.='$desde=$_POST["desde"];'.chr(10);
$var.='$hasta=$_POST["hasta"];'.chr(10);
$var.=''.chr(10);
$var.=''.chr(10);
$var.='include(\'connect.php\');'.chr(10);
$var.='?>'.chr(10);

$var.='</body>'.chr(10);
$var.='<form name="aa" action="<?php echo $_SERVER["SCRIPT_NAME"]; ?>" method="post">'.chr(10);
$var.='<input type="text" name="busqueda" value="<?php echo $_POST["busqueda"]; ?>">'.chr(10);
$var.='<input type="submit" name="buscar" value="Buscar"><br>'.chr(10);
$var.=''.chr(10);
$var.='<?php'.chr(10);
$var.=''.chr(10);
$var.='#en caso de una nueva busqueda resetear las variables '.chr(10);
$var.='if($_POST["buscar"]=="Buscar"){'.chr(10);
$var.='	$desde="";'.chr(10);
$var.='	$hasta="";'.chr(10);
$var.='}'.chr(10);
$var.='#-------------------'.chr(10);
$var.=''.chr(10);
$var.='if (!$_POST["busqueda"]) {'.chr(10);
$var.='	echo \'<br><font1>Busqueda vacia</font1>\';'.chr(10);
$var.='	exit;'.chr(10);
$var.='}'.chr(10);
$var.=''.chr(10);
$var.=''.chr(10);
$var.='$query=\'select * from '.$tabla.' where blabla like "%\'.$_POST["busqueda"].\'%"\';'.chr(10);

$var.='#total de los resultados'.chr(10);
$var.='$total_rows=mysql_num_rows(mysql_query($query));'.chr(10);
$var.='if(mysql_error()){'.chr(10);
$var.='	echo mysql_error()." ".$SCRIPT_NAME;'.chr(10);
$var.='}'.chr(10);
$var.='#--------------------------------------------'.chr(10);

$var.='// control paginas'.chr(10);
$var.='#primera busqueda cuando no existen las variables'.chr(10);
$var.='if(!$desde || $desde==0){'.chr(10);
$var.='	$desde="0";'.chr(10);
$var.='	$hasta = $limite;'.chr(10);
$var.='}'.chr(10);
$var.='#----------------------------------------------'.chr(10);

$var.='if($_POST["control"]=="anteriores"){'.chr(10);
$var.='	if($desde >= $limite){ //para que no reste en la primera busqueda'.chr(10);
$var.='		$desde = $desde - $limite;'.chr(10);
$var.='		$hasta = $desde + $limite;'.chr(10);
$var.='	}'.chr(10);
$var.='}'.chr(10);
$var.='if($_POST["control"]=="siguientes"){'.chr(10);
$var.='	if($hasta != $total_rows){ //para que llegado al final no siga sumando'.chr(10);
$var.='		$desde = $desde + $limite;'.chr(10);
$var.='		$hasta = $desde + $limite;'.chr(10);
$var.='	}'.chr(10);
$var.='	if ($hasta > $total_rows) { $hasta = $total_rows ; }'.chr(10);
$var.='}'.chr(10);
$var.=''.chr(10);
$var.='$query .= " limit $desde,$limite";// establece limite al query actual'.chr(10);
$var.=''.chr(10);
$var.='# limita que hasta no sea mayor que el total de los resultados'.chr(10);
$var.='if ($hasta > $total_rows) { $hasta = $total_rows ; }'.chr(10);
$var.='#---------------------------------------------------'.chr(10);
$var.='// fin control paginas'.chr(10);
$var.=''.chr(10);
$var.='$result = mysql_query($query);'.chr(10);
$var.='if(mysql_error()){'.chr(10);
$var.='	echo mysql_error()." ".$SCRIPT_NAME;'.chr(10);
$var.='}'.chr(10);
$var.=''.chr(10);
$var.=''.chr(10);
$var.='#crea cabecera listado'.chr(10);
$var.='echo \'<br><br><font1>Mostrando Resultados desde: \'.($desde+1).\' Hasta: \'.$hasta.\' de: \'.$total_rows.\'</font1><br>\';'.chr(10);
$var.=''.chr(10);
$var.='echo \'<table class="t1">\';'.chr(10);
$var.='echo \'<tr>\';'.chr(10);


#----------------------------------------------------
$q="show columns from $database.$tabla";
$r=mysql_query($q);
$rows=mysql_num_rows($r);
for($i=0;$i<=($rows-1);$i++){
	$row=mysql_result($r,$i,0);
	$var.='	echo "<th>'.$row.'</th>";';
	$var.=chr(10);
}
#----------------------------------------------------


$var.='	echo "<td></td>";'.chr(10);
$var.='	echo "<td></td>";'.chr(10);
$var.='echo \'</tr>\';'.chr(10);
$var.='#-------------------------------'.chr(10);


$var.='#muestra resultados'.chr(10);
$var.='while($row=mysql_fetch_array($result)){'.chr(10);
$var.='	echo "<tr>";'.chr(10);

#----------------------------------------------------
$q="show columns from $database.$tabla";
$r=mysql_query($q);
$rows=mysql_num_rows($r);
for($i=0;$i<=($rows-1);$i++){
	$row=mysql_result($r,$i,0);
$var.='	echo \'<td>\'.$row["'.$row.'"].\'</td>\';';
	$var.=chr(10);
}
#----------------------------------------------------




$var.='	echo \'<td><A HREF="'.$tabla.'_ingreso.php?id_'.$tabla.'=\'.$row["id"].\'"><button>Modificar</button></A></td>\';'.chr(10);
$var.='	echo \'<td><A HREF="'.$tabla.'_eliminar.php?id_'.$tabla.'=\'.$row["id"].\'"><button>Eliminar</button></A></td>\';'.chr(10);
$var.='	echo "</tr>".chr(13);'.chr(10);
$var.='}'.chr(10);
$var.='echo "</table>";'.chr(10);
$var.=''.chr(10);
$var.=''.chr(10);
$var.='echo \'<br><font1>Mostrando Resultados desde: \'.($desde+1).\' Hasta: \'.$hasta.\' de: \'.$total_rows.\'</font1><br>\';'.chr(10);
$var.=''.chr(10);
$var.='#almacena variables'.chr(10);
$var.='echo \'<input type="hidden" name="desde" value="\'.$desde.\'">\';'.chr(10);
$var.='echo \'<input type="hidden" name="hasta" value="\'.$hasta.\'">\';'.chr(10);
$var.='#-----------------------'.chr(10);
$var.=''.chr(10);
$var.='#botones de control de pagina'.chr(10);
$var.='echo \'<input type="submit" name="control" value="anteriores">\';'.chr(10);
$var.='echo \'<input type="submit" name="control" value="siguientes">\';'.chr(10);
$var.='#---------------------------'.chr(10);
$var.=''.chr(10);
$var.='?>'.chr(10);
$var.=''.chr(10);
$var.='</form>'.chr(10);
$var.='</center>'.chr(10);
$var.='</body>'.chr(10);
$var.='</html>'.chr(10);
?>
