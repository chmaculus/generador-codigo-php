<table border="1">

<?php

//$tabla=$_POST["tabla"];
if($_POST["database"] AND $_POST["tabla"]){
	$database=$_POST["database"];
	$tabla=$_POST["tabla"];
}else{
	$database=$database;
	$tabla=$tabla;
}

$database=$_POST["database"];
$tabla=$_POST["tabla"];


$query='show columns from '.$database.'.'.$tabla;
//echo $query;
$result=mysql_query($query)or die(mysql_error().$query);
$count=0;
while($row=mysql_fetch_array($result)){
	echo "	<tr>".chr(13);
	echo "		<td>$count</td><td>$row[0]</td><td>$row[1]</td>".chr(13);
	$count++;
	echo "	</tr>".chr(13);
}
?>
</table>
