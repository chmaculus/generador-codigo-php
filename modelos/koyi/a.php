<?php
if($_GET["id_"]){
    include_once("connect.php");
    $query='select * from  where id="'.$_GET["id_"].'"';
    $array_=mysql_fetch_array(mysql_query($query));
}
if($_GET["uuid_"]){
    include_once("connect.php");
    $query='select * from  where uuid="'.$_GET["uuid_"].'"';
    $array_=mysql_fetch_array(mysql_query($query));
}
<form method="post" action="_update.php" name="form_">

<center>
<table class="t1" border="1">

</table>

if($_GET["id_"] OR $array_["id"]){
    echo '<input type="hidden" name="accion" value="modificacion">';
    echo '<input type="hidden" name="id_" value="'.$array_["id"].'">';
    echo '<input type="hidden" name="uuid_" value="'.$array_["uuid"].'">';
}else{
    echo '<input type="hidden" name="accion" value="ingreso">';
}
<input type="submit" name="ACEPTAR" value="ACEPTAR">
</form>
</center>
?>
