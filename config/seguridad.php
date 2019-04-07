<?php


define("ADMINISTRADOR",2);
define("MAESTRO",1);

function seguridad($rol){
 //Prorogamos la sesión activa
	 session_start();
	 //Verificamos que venimos de una sesión activa e identificada
	 if(!($_SESSION['autenticado'] && $_SESSION['rol']>=$rol)){
			header("Location: ../index.php");
	 }
	
}

function seguridadInterior($rol){
 //Prorogamos la sesión activa
	 session_start();
	 //Verificamos que venimos de una sesión activa e identificada
	 if(!($_SESSION['autenticado'] && $_SESSION['rol']>=$rol)){
			header("Location: index.php");
	 }
	
}

?>