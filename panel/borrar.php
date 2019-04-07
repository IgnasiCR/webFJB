<?php

include_once "../config/config.php";
include_once "../config/seguridad.php";

seguridadInterior(ADMINISTRADOR);

if($_SESSION[rol]==2){
    if(isset($_GET['codigo'])){
	
        $imagen=$_GET['codigo'];
        unlink("../img/galeria/$imagen");
	header("Location: galeria");
	
}
}else{
    header("Location: index.php");
}

?>