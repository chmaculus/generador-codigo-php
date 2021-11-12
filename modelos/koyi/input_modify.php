<?php


//$tabla=$_POST["tabla"];
if($_POST["database"] AND $_POST["tabla"]){
	$database=$_POST["database"];
	$tabla=$_POST["tabla"];
}else{
	$database=$database;
	$tabla=$tabla;
}


$var='<?php'.chr(10);
$var.='include("'.$tabla.'_base.php");'.chr(10);




$q="show columns from $database.$tabla";
//echo $q;
$r=mysql_query($q);
$rows=mysql_num_rows($r);
if(mysql_error()){ echo mysql_error(); }



$var.=chr(10);
$var.=chr(10);
$var.=chr(10);



$var.='if($_GET["id_'.$tabla.'"]){'.chr(10);
$var.='    include_once("connect.php");'.chr(10);
$var.='    $query=\'select * from '.$tabla.' where id="\'.$_GET["id_'.$tabla.'"].\'"\';'.chr(10);
$var.='    $array_'.$tabla.'=mysql_fetch_array(mysql_query($query));'.chr(10);
$var.='    if(mysql_error()){echo "<br>".mysql_error()."<br>".$query."<br>".$_SERVER["SCRIPT_NAME"]."<br>";}'.chr(10);
$var.='}'.chr(10);
$var.='if($_GET["uuid_'.$tabla.'"]){'.chr(10);
$var.='    include_once("connect.php");'.chr(10);
$var.='    $query=\'select * from '.$tabla.' where uuid="\'.$_GET["uuid_'.$tabla.'"].\'"\';'.chr(10);
$var.='    $array_'.$tabla.'=mysql_fetch_array(mysql_query($query));'.chr(10);
$var.='}'.chr(10);
$var.=hex2bin("3f").hex2bin("3e").chr(10);


$var.=''.chr(10);
$var.='<form method="post" action="'.$tabla.'_update.php" name="form_'.$tabla.'">'.chr(10);
$var.=''.chr(10);
$var.='<center>'.chr(10);

$var.='<table class="t1" border="1">'.chr(10);



#-----------------------------------------------------------------

while($row=mysql_fetch_array($r)){
	$var.= '	<tr>'.chr(10);	
	$var.= '		<th>'.$row[0].'</th>'.chr(10);
	if($row[1]=="text"){
		$var.='			<td><textarea name="'.$row[0].'" id="'.$row[0].'" rows="10" cols="33"><?php if($array_'.$tabla.'["'.$row[0].'"]){echo $array_'.$tabla.'["'.$row[0].'"];}?></textarea></td>';
	}else{
		$var.= '		<td><input type="text" name="'.$row[0].'" id="'.$row[0].'" value="<?php if($array_'.$tabla.'["'.$row[0].'"]){echo $array_'.$tabla.'["'.$row[0].'"];}?>" size="10"></td>'.chr(10);
	}
	$var.=	'	</tr>'.chr(10);	
}
$var.=''.chr(10);
$var.='</table>'.chr(10);
$var.=''.chr(10);

#-----------------------------------------------------------------


$var.=hex2bin("3c").hex2bin("3f")."php".chr(10);


#-----------------------------------------------------------------
$var.='/*'.chr(10);
$var.='<table class="t1" border="1">'.chr(10);

$r=mysql_query($q);
$var.= '	<tr>'.chr(10);

while($row=mysql_fetch_array($r)){
	$var.= '		<th>'.$row[0].'</th>'.chr(10);
}

$var.=	'	</tr>'.chr(10);
$var.='*/'.chr(10);



$var.='/*'.chr(10);
$r=mysql_query($q);
$var.= '	<tr>'.chr(10);
while($row=mysql_fetch_array($r)){
	
	if($row[1]=="text"){
		$var.='			<td><textarea name="'.$row[0].'" id="'.$row[0].'" rows="10" cols="33"><?php if($array_'.$tabla.'["'.$row[0].'"]){echo $array_'.$tabla.'["'.$row[0].'"];}?></textarea></td>';
	}else{
		$var.= '		<td><input type="text" name="'.$row[0].'" id="'.$row[0].'" value="<?php if($array_'.$tabla.'["'.$row[0].'"]){echo $array_'.$tabla.'["'.$row[0].'"];}?>" size="10"></td>'.chr(10);
	}
	
}
$var.=	'	</tr>'.chr(10);
$var.='*/'.chr(10);
#-----------------------------------------------------------------






$var.=hex2bin("3f").hex2bin("3e").chr(10);



$var.=''.chr(10);
$var.='</table>'.chr(10);
$var.=''.chr(10);


$var.=hex2bin("3c").hex2bin("3f")."php".chr(10);
$var.='if($_GET["id_'.$tabla.'"] OR $array_'.$tabla.'["id"]){'.chr(10);
$var.='    echo \'<input type="hidden" name="accion" value="modificacion">\';'.chr(10);
$var.='    echo \'<input type="hidden" name="id_'.$tabla.'" value="\'.$array_'.$tabla.'["id"].\'">\';'.chr(10);
$var.='    echo \'<input type="hidden" name="uuid_'.$tabla.'" value="\'.$array_'.$tabla.'["uuid"].\'">\';'.chr(10);
$var.='}else{'.chr(10);
$var.='    echo \'<input type="hidden" name="accion" value="ingreso">\';'.chr(10);
$var.='}'.chr(10);
$var.=hex2bin("3f").hex2bin("3e").chr(10);


$var.='<br>'.chr(10);
$var.='<input type="submit" name="ACEPTAR" value="ACEPTAR">'.chr(10);
$var.='</form>'.chr(10);
$var.='</center>'.chr(10);


//echo $var;
?>
