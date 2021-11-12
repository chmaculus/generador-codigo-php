<?php

//$tabla=$_POST["tabla"];
if($_POST["database"] AND $_POST["tabla"]){
	$database=$_POST["database"];
	$tabla=$_POST["tabla"];
}else{
	$database=$database;
	$tabla=$tabla;
}
$var.='<center>'.chr(10);

$var.='<table border="1">'.chr(10);

#-------------------------------------------------------------
$q="show columns from $database.$tabla";
$r=mysql_query($q);
while($row=mysql_fetch_array($r)){
$var.='<tr>'.chr(10);
$var.='	<th>'.$row[0].'</th>';
$var.='	<td><?php echo $array_'.$tabla.'["'.$row[0].'"]; ?></td>'.chr(10);
$var.='</tr>'.chr(10);
}
#-------------------------------------------------------------

$var.='</table>'.chr(10);




#--------------------------------------------------------------





$var.='<table border="1">'.chr(10);
$var.='<tr>'.chr(10);

#-------------------------------------------------------------
$q="show columns from $database.$tabla";
$r=mysql_query($q);
while($row=mysql_fetch_array($r)){
$var.='	<th>'.$row[0].'</th>'.chr(10);
}
#-------------------------------------------------------------


$var.='</tr>'.chr(10);
$var.='<tr>'.chr(10);


#-------------------------------------------------------------
$q="show columns from $database.$tabla";
$r=mysql_query($q);
while($row=mysql_fetch_array($r)){
$var.='	<td><?php echo $array_'.$tabla.'["'.$row[0].'"]; ?></td>'.chr(10);
}
#-------------------------------------------------------------



$var.='</tr>'.chr(10);
$var.='</table>'.chr(10);

?>
