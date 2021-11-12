<?php
include_once("../../includes/connect.php");


echo '<option value="">Seleccione</option>'.chr(13);

if(!$_POST["database"] ){
	return;
}

$query='show tables from '.$_POST["database"];
$result=mysql_query($query)or die(mysql_error().$query);
while($row=mysql_fetch_array($result)){
	echo '<option value="'.$row[0].'">'.$row[0].'</option>'.chr(13);
}
?>
