<?php

include_once "../config/config.php";
include_once "../config/seguridad.php";

seguridad(ADMINISTRADOR);

if($_SESSION['rol']>=2){
if(isset($_GET['login'])){
	$conexion=mysqli_connect($host,$user,$password,$db,$port) or die("Error en la conexión");
	$loginLimpio=mysqli_real_escape_string($conexion, $_GET['login']);
	$consulta="DELETE FROM usuarios WHERE login='$loginLimpio';";
	mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));
	mysqli_close($conexion);
	header("Location: usuarios");
	
}}

if($_SESSION['rol']>=2){
if(isset($_POST['anadeUsuarios'])){
    
        $conexion=mysqli_connect($host,$user,$password,$db,$port) or die("Error en la conexión");
        $usuario=mysqli_real_escape_string($conexion,$_POST['login']);
        $consulta="SELECT * FROM `usuarios` WHERE LOGIN='$usuario';";
        
	    $datos=mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));
            
	    if(mysqli_num_rows($datos)>0){
                $usuarioRepetido="El nombre de usuario elegido ya está siendo utilizado.";
		}else{
		
    
	$consulta="INSERT INTO `usuarios` VALUES('$_POST[login]', PASSWORD('$_POST[password]'), '$_POST[nombre]', '$_POST[rol]');";
	$conexion=mysqli_connect($host,$user,$password,$db,$port) or die("Error en la conexión");
	mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));
	mysqli_close($conexion);
                }
}}

if($_SESSION['rol']>=2){
if(isset($_POST['actualizaUsuarios'])){
    
        $consultaVerificar="SELECT password FROM usuarios WHERE login = '$_POST[login]'";
        $conexionVerificar=mysqli_connect($host,$user,$password,$db,$port) or die("Error en la conexión");
        $datosVerificar=mysqli_query($conexionVerificar, $consultaVerificar) or die(mysqli_error($conexionVerificar));
        $filaVerificar=mysqli_fetch_array($datosVerificar);
        if(!($_POST[password]==$filaVerificar[password])){
        
	$consulta="UPDATE usuarios SET password=password('$_POST[password]'), nombre='$_POST[nombre]', rol='$_POST[rol]' where login='$_POST[login]';";
	$conexion=mysqli_connect($host,$user,$password,$db,$port) or die("Error en la conexión");
	mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));
        mysqli_close($conexion);}
        else{
        $consulta="UPDATE usuarios SET rol='$_POST[rol]', nombre='$_POST[nombre]' where login='$_POST[login]';";
	$conexion=mysqli_connect($host,$user,$password,$db,$port) or die("Error en la conexión");
	mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));
        mysqli_close($conexion);
        }
}}

?>