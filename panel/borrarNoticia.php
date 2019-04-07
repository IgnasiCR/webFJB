<?php

include_once "../config/config.php";
include_once "../config/seguridad.php";

seguridadInterior(MAESTRO);

if($_SESSION[rol]>=1){
    if(isset($_GET['id'])){
	
        $conexion=mysqli_connect($host,$user,$password,$db,$port) or die("Error en la conexión");
	$IDLimpio=mysqli_real_escape_string($conexion, $_GET['id']);
	$consultaSQL="SELECT * FROM noticias WHERE id='$IDLimpio';";
	$datos=mysqli_query($conexion, $consultaSQL) or die(mysqli_error($conexion));
        $fila=mysqli_fetch_array($datos,MYSQLI_ASSOC);
        unlink(".".$fila['imagen']);
        $consulta="DELETE FROM noticias WHERE id='$IDLimpio';";
	mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));
	mysqli_close($conexion);
        header("Location: noticias");
        
	
}
}else{
    header("Location: index.php");
}

?>