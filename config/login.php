<?php

include_once "./config/config.php";

if(isset($_POST['acceder'])){
	    //Conecto con la BD
	    $conexion=mysqli_connect($host,$user,$password, $db, $port);
	    // Escapar código no seguro que llegue desde el formulario
		$usuario=mysqli_real_escape_string($conexion,$_POST['usuario']);
		$pass=mysqli_real_escape_string($conexion,$_POST['password']);
		//Crear el string o cadena de consulta
		$consulta="Select * from usuarios "
                        . "where login='$usuario' "
                        . "and `password`= password('$pass');";
				 
	    // Lanzar la ejecución de la consulta				
	    $datos=mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));
	    //Comprobar que nos da como resultado una fila en la bd
	    if(mysqli_num_rows($datos)==1){
		//identificación positiva
		session_start();
		$_SESSION['autenticado']=true;
                $fila=mysqli_fetch_array($datos,MYSQLI_ASSOC);
                $_SESSION['login']=$fila['login'];
		$_SESSION['rol']=$fila['rol'];
                mysqli_close($conexion);
		header("Location: panel/index");
		}else{
		}
	
}	

