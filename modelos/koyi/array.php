<?php

//$tabla=$_POST["tabla"];
if($_POST["database"] AND $_POST["tabla"]){
	$database=$_POST["database"];
	$tabla=$_POST["tabla"];
}else{
	$database=$database;
	$tabla=$tabla;
}

$q="show columns from $database.$tabla";
//echo $q;

$var.=chr(10);




#-------------------------------------------------
$var.='    $id_articulos=mysql_insert_id($id_connection);'.chr(10);
$var.=''.chr(10);
$var.=''.chr(10);
$var.="#----------------------------------------".chr(10);
$var.='    #muestra registro ingresado'.chr(10);
$var.='$query=\'select * from '.$tabla.' where id="\'.$id_'.$tabla.'.\'"\';'.chr(10);
$var.='    $array_'.$tabla.'=mysql_fetch_array(mysql_query($query));'.chr(10);
$var.='if(mysql_error()){echo mysql_error()."<br>".$query."<br>".$_SERVER["SCRIPT_NAME"]."<br>";}'.chr(10);
$var.="#----------------------------------------".chr(10);
$var.=chr(10);


$var.=chr(10);
$var.="#----------------------------------------".chr(10);
$var.='#muestra registro ingresado'.chr(10);
$var.='$query=\'select * from '.$tabla.' where id="\'.$id_'.$tabla.'.\'"\';'.chr(10);
$var.='$array_'.$tabla.'=mysql_fetch_array(mysql_query($query));'.chr(10);
$var.='if(mysql_error()){echo mysql_error()."<br>".$query."<br>".$_SERVER["SCRIPT_NAME"]."<br>";}'.chr(10);
$var.="#----------------------------------------".chr(10);
$var.=chr(10);
#-------------------------------------------------




#-------------------------------------------------
$var.=chr(10);
$var.="#----------------------------------------".chr(10);

$r=mysql_query($q);
$rows=mysql_num_rows($r);
while($row=mysql_fetch_array($r)){
	$var.='$array_'.$tabla.'["'.$row[0].'"]'.chr(10);
}
$var.="#----------------------------------------".chr(10);
$var.=chr(10);
#-------------------------------------------------


#-------------------------------------------------
$var.=chr(10);
$var.="#----------------------------------------".chr(10);

$r=mysql_query($q);
$rows=mysql_num_rows($r);
while($row=mysql_fetch_array($r)){
	$var.='$array_'.$tabla.'["'.$row[0].'"]=$_POST["'.$row[0].'"];'.chr(10);
}
$var.="#----------------------------------------".chr(10);
$var.=chr(10);
#-------------------------------------------------


#-------------------------------------------------
$var.=chr(10);
$var.="#----------------------------------------".chr(10);

$r=mysql_query($q);
$rows=mysql_num_rows($r);
while($row=mysql_fetch_array($r)){
	$var.='$array_'.$tabla.'["'.$row[0].'"]=$_GET["'.$row[0].'"];'.chr(10);
}
$var.="#----------------------------------------".chr(10);
$var.=chr(10);
#-------------------------------------------------



#-------------------------------------------------
$var.="#----------------------------------------".chr(10);

$r=mysql_query($q);
$rows=mysql_num_rows($r);
while($row=mysql_fetch_array($r)){
	$var.='echo $array_'.$tabla.'["'.$row[0].'"];'.chr(10);
}

$var.="#----------------------------------------".chr(10);
$var.=chr(10);
#-------------------------------------------------


#-------------------------------------------------
$var.="#----------------------------------------".chr(10);
$var.='echo \'<table border="1">\';'.chr(10);

$r=mysql_query($q);
$rows=mysql_num_rows($r);
while($row=mysql_fetch_array($r)){
	$var.='echo "<td>".$array_'.$tabla.'["'.$row[0].'"]."<td>";'.chr(10);
}
$var.='echo "</table>";'.chr(10);
$var.="#----------------------------------------".chr(10);
$var.=chr(10);
#-------------------------------------------------


#-------------------------------------------------
$var.="#----------------------------------------".chr(10);
$var.='echo \'<table border="1">\';'.chr(10);
$r=mysql_query($q);
$rows=mysql_num_rows($r);
while($row=mysql_fetch_array($r)){
	$var.='echo "<td>".$_POST["'.$row[0].'"]."<td>";'.chr(10);
}
$var.='echo "</table>";'.chr(10);

$var.="#----------------------------------------".chr(10);
$var.=chr(10);
#-------------------------------------------------


#-------------------------------------------------
$var.="#----------------------------------------".chr(10);
$var.='echo \'<table border="1">\';'.chr(10);
$r=mysql_query($q);
$rows=mysql_num_rows($r);
while($row=mysql_fetch_array($r)){
	$var.='echo "<td>".$_GET["'.$row[0].'"]."<td>";'.chr(10);
}
$var.='echo "</table>";'.chr(10);

$var.="#----------------------------------------".chr(10);
$var.=chr(10);
#-------------------------------------------------



#-------------------------------------------------
$var.="#----------------------------------------".chr(10);
$r=mysql_query($q);
$rows=mysql_num_rows($r);
while($row=mysql_fetch_array($r)){
	$var.='echo $_POST["'.$row[0].'"];'.chr(10);
}

$var.="#----------------------------------------".chr(10);
$var.=chr(10);
#-------------------------------------------------


#-------------------------------------------------
$var.="#----------------------------------------".chr(10);
$r=mysql_query($q);
$rows=mysql_num_rows($r);
while($row=mysql_fetch_array($r)){
	$var.='echo $_GET["'.$row[0].'"];'.chr(10);
}

$var.="#----------------------------------------".chr(10);
$var.=chr(10);
#-------------------------------------------------

#-------------------------------------------------
$var.="#----------------------------------------".chr(10);
$r=mysql_query($q);
$rows=mysql_num_rows($r);
while($row=mysql_fetch_array($r)){
	$var.='	if($array_costo["'.$row[0].'"]!=$_POST["'.$row[0].'"]){
		$array_costos_nuevo["'.$row[0].'"]=$_POST["'.$row[0].'"];
		$distinto=1;
	}else{
		$array_costos_nuevo["'.$row[0].'"]=$array_costo["'.$row[0].'"];
	}'.chr(10);
}

$var.="#----------------------------------------".chr(10);
$var.=chr(10);
#-------------------------------------------------


#---------------------------------------------------
$var.=chr(10);
$var.="#----------------------------------------".chr(10);
$var.='echo \'<table border="1">\';'.chr(10);

$r=mysql_query($q);
$rows=mysql_num_rows($r);
while($row=mysql_fetch_array($r)){
	$var.='	echo \'<tr>\';'.chr(10);
	$var.='		echo \'<th>'.$row[0].'</th>\';'.chr(10);
	$var.='		echo \'<td>\'.$array_'.$tabla.'["'.$row[0].'"].\'</td>\';'.chr(10);
	$var.='	echo \'</tr>\';'.chr(10);
}
$var.='echo "</table>";'.chr(10);
$var.="#----------------------------------------".chr(10);
$var.=chr(10);
#---------------------------------------------------






#---------------------------------------------------
$var.=chr(10);
$var.="#----------------------------------------".chr(10);
$var.='echo \'<table border="1">\';'.chr(10);

$r=mysql_query($q);
$rows=mysql_num_rows($r);

$var.='	echo \'<tr>\';'.chr(10);
while($row=mysql_fetch_array($r)){
	$var.='		echo \'<th>'.$row[0].'</th>\';'.chr(10);
}
$var.='	echo \'</tr>\';'.chr(10);

$r=mysql_query($q);
$rows=mysql_num_rows($r);
$var.='	echo \'<tr>\';'.chr(10);
while($row=mysql_fetch_array($r)){
	$var.='		echo \'<td>\'.$array_'.$tabla.'["'.$row[0].'"].\'</td>\';'.chr(10);
}
$var.='	echo \'</tr>\';'.chr(10);
$var.='echo "</table>";'.chr(10);
$var.="#----------------------------------------".chr(10);
$var.=chr(10);
#---------------------------------------------------

?>
