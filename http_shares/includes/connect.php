<?php
$server="localhost";
$user="root";
$passwd="maculuss";
$base="source";

$id_connection=mysql_connect($server,$user,$passwd);
if(mysql_error()){
         echo "no se pudo conectar con el Servidor<br>";
}
$db=mysql_select_db($base);

if(mysql_error()){
        // echo "No se pudo Abrir la Base de Datos<br>";
}

?>
