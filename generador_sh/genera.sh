#!/bin/bash
#uso: genera codigo + tabla



#-----------------------------------------------------
server="localhost"
user="root"
pass="maculuss"
database="koyikun"
tabla=$1
#-----------------------------------------------------




#-----------------------------------------------------
echo '<?php'>./includes/connect.php
echo '$server="'$server'";'>>./includes/connect.php
echo '$user="'$user'";'>>./includes/connect.php
echo '$passwd="'$pass'";'>>./includes/connect.php
echo '$base="source";'>>./includes/connect.php
echo ''>>./includes/connect.php
echo '$id_connection=mysql_connect($server,$user,$passwd);'>>./includes/connect.php
echo 'if(mysql_error()){'>>./includes/connect.php
echo '         echo "no se pudo conectar con el Servidor<br>";'>>./includes/connect.php
echo '}'>>./includes/connect.php
echo '$db=mysql_select_db($base);'>>./includes/connect.php
echo ''>>./includes/connect.php
echo 'if(mysql_error()){'>>./includes/connect.php
echo '        // echo "No se pudo Abrir la Base de Datos<br>";'>>./includes/connect.php
echo '}'>>./includes/connect.php
echo ''>>./includes/connect.php
echo '?>'>>./includes/connect.php
#-----------------------------------------------------







#-----------------------------------------------------
echo '<?php'>config.php
echo '$database="'$database'";'>>config.php
echo '$tabla="'$tabla'";'>>config.php
echo '$modelo="koyi";'>>config.php
echo '$seguridad="0";'>>config.php
echo '$path_connect="";'>>config.php
echo '?>'>>config.php
#-----------------------------------------------------

rm -fR nuevocodigo/$1
mkdir nuevocodigo/$1


cp lib/connect.php nuevocodigo/$1
cp lib/cabecera.inc.php nuevocodigo/$1
cp lib/style.css nuevocodigo/$1

php base.php >nuevocodigo/$1/$1_base.php
php busqueda.php >nuevocodigo/$1/$1_busqueda.php
php ingreso.php >nuevocodigo/$1/$1_ingreso.php
php input_modify.php > nuevocodigo/$1/$1_modifica.php


php eliminar.php > nuevocodigo/$1/$1_eliminar.php


php listado.php > nuevocodigo/$1/$1_listado.php
php muestra.php > nuevocodigo/$1/$1_muestra.php
php muestra_inc.php > nuevocodigo/$1/$1_muestra.inc.php
php update.php > nuevocodigo/$1/$1_update.php


#python generico.py $1>nuevocodigo/$1/$1_generico.php
#python excel.py $1>nuevocodigo/$1/$1_excel.php

