<?php
include_once("../includes/connect.php");

$query='select distinct categoria from source order by categoria';


echo '<option value="">Seleccione</option>'.chr(13);
$result=mysql_query($query)or die(mysql_error());
while($row=mysql_fetch_array($result)){
	echo '<option value="'.$row[0].'">'.$row[0].'</option>'.chr(13);
}
?>
