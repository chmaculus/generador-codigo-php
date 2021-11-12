<?php
$file="articulos_eliminar.php";
$gestor = fopen($file, 'a');

if(!$gestor){
	echo "No se pudo abrir el archivo\n";
}

/*
    if (!$gestor = fopen($file, 'a')) {
         echo "No se puede abrir el archivo ($file)";
         exit;
    }
*/
echo 'size: '.filesize($file);

//$contenido = fread($gestor, filesize($file));
$contenido = fread($gestor, 1);
fclose($gestor);
$contenido='< ? php'.chr(10).$contenido;

$contenido=str_replace( "'" , "\'" , $contenido );
$contenido=str_replace( chr(10), '\'.chr(10);'.chr(10).'$str.=\'' , $contenido );


    if (!$gestor = fopen($file, 'a')) {
         echo "No se puede abrir el archivo ($file)";
         exit;
    }

/*
$contenido.='\';'.chr(10)."? >".chr(10)

    if (fwrite($gestor, $contenido) == FALSE) {
        echo "No se puede escribir al archivo ($nombre_archivo)";
        exit;
    }
*/

fclose($gestor);
//echo $contenido;
?>
