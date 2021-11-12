<?php
if($_POST["button1"]=="ToSource"){
	echo $var;
}

if($_POST["button1"]=="ToHTML"){
	$var=htmlspecialchars($var);
	$var=str_replace(chr(10),"<br>",$var);
	$var=str_replace(chr(9),"&nbsp;&nbsp;&nbsp;&nbsp;",$var);
	echo $var;
}

if($_POST["button1"]=="ToTextBox"){
	echo "<center>";
	echo '<textarea name="area1" rows="30" cols="110">'.$var.'</textarea>';
	echo "</center>";
}

if($_POST["button1"]=="ToFile"){
	header("Content-type: application/octet-stream");
	header('Content-Disposition: attachment; filename='.$_POST["file_name"]);
	header("Pragma: no-cache");
	header("Expires: 0");
	print $var;
}

?>