<?php

include_once "../config/config.php";
include_once "../config/seguridad.php";

seguridadInterior(ADMINISTRADOR);

/* SUBIDA DE ARCHIVOS */

$archivo = $_FILES['imagenes']['tmp_name'];

$cantidad = count($archivo);

$directorio = "../img/galeria/";

$i="0";

for ($n="0"; $n<$cantidad; $n++) {
        list($width, $height, $type, $attr) = getimagesize("$archivo[$n]");
        if($width=="700" && $height=="300"){
            if($type=="2" || $type=="3"){
                echo "OK :)";
            }
            else{
                header("Location: galeria");
                exit();
            }
            
        }else{
            header("Location: galeria");
            exit();
        }
}

for ($n="0"; $n<$cantidad; $n++) {
$archivo_codigo = $archivo[$n];
$nombre_archivo = $i."-".uniqid().".jpg";
$i++;
$archivo_subir = $directorio . $nombre_archivo;
if (move_uploaded_file($archivo_codigo, $archivo_subir)) {
echo "OK :)";
}else{
echo "ERROR :)";}
}

header("Location: galeria");