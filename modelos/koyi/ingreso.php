<?php

//$tabla=$_POST["tabla"];
if($_POST["database"] AND $_POST["tabla"]){
	$database=$_POST["database"];
	$tabla=$_POST["tabla"];
}else{
	$database=$database;
	$tabla=$tabla;
}

include("cabeceras_scripts.inc.php");


$q="show columns from $database.$tabla";
//echo $q;
$r=mysql_query($q);
$rows=mysql_num_rows($r);

//$var=GetDataByID(3);


$var.='
<form method="post" action="'.$tabla.'_update.php" name="form_'.$tabla.'">

<center><br>
<table class="t1" border="1">
';




$var3="";
while($row=mysql_fetch_array($r)){
	$var3.= '	<tr>'.chr(10);
	$var3.= '		<th>'.$row[0].'</th>'.chr(10);
	if($row[1]=="text"){
		$var3.='			<td><textarea name="'.$row[0].'" id="'.$row[0].'" rows="10" cols="33"></textarea></td>';
	}else{
		$var3.= '		<td><input type="text" name="'.$row[0].'" id="'.$row[0].'" value="" size="10"></td>'.chr(10);
	}
	$var3.=	'	</tr>'.chr(10);
}
$var2='</table>
<input type="hidden" name="accion" value="ingreso" />
<input type="submit" name="ACEPTAR" value="ACEPTAR">
</form>
</center>';

$var=$var.$var3.$var2;
?>
