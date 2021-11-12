<?php
include("source_base.php");
include("connect.php");

if(!$_GET["id_source"]){
 	exit;
}
$id_source=$_GET["id_source"];

$query='select * from source where id="'.$id_source.'"';
$array_source=mysql_fetch_array(mysql_query($query));

<center>
include("source_muestra.inc.php");
</center>

?>
