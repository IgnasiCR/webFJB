<?php

if(isset($_POST['install'])){
	$conexion=mysqli_connect($_POST[host],$_POST[user],$_POST[password],NULL,$_POST[port]) or die(mysqli_error($conexion));

    
    //Crear la infraestructura.
    
    $creacionInfraestructura[]="DROP DATABASE IF EXISTS fjb;";
    $creacionInfraestructura[]="CREATE DATABASE fjb;";
    
    $creacionInfraestructura[]="GRANT USAGE ON *.* TO 'adminfjb'@'%' IDENTIFIED BY PASSWORD '*4ACFE3202A5FF5CF467898FC58AAB1D615029441';";

    $creacionInfraestructura[]="GRANT ALL PRIVILEGES ON `fjb`.* TO 'adminfjb'@'%';";
    
   $creacionInfraestructura[]="USE fjb;";
   $creacionInfraestructura[]="DROP TABLE IF EXISTS usuarios;";
   $creacionInfraestructura[]="CREATE TABLE `usuarios` (
  `login` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `rol` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
   $creacionInfraestructura[]="INSERT INTO `usuarios` (`login`, `password`, `nombre`, `rol`) VALUES ('admin', '*4ACFE3202A5FF5CF467898FC58AAB1D615029441', 'admin', 2);";
    
   $creacionInfraestructura[]="USE fjb;";
   $creacionInfraestructura[]="DROP TABLE IF EXISTS noticias;";
   $creacionInfraestructura[]="CREATE TABLE `noticias` (
  `id` bigint(20) NOT NULL,
  `titulo` text NOT NULL,
  `subtitulo` text NOT NULL,
  `cuerpo` longtext NOT NULL,
  `fecha` varchar(50) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `imagen` text NOT NULL,
  `login` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
      
   $creacionInfraestructura[]="ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`login`);";
   
   $creacionInfraestructura[]="ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `login` (`login`);";
   
   
   $creacionInfraestructura[]="ALTER TABLE `noticias`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;";
   
   $creacionInfraestructura[]="ALTER TABLE `noticias`
  ADD CONSTRAINT `noticias_ibfk_1` FOREIGN KEY (`login`) REFERENCES `usuarios` (`login`) ON DELETE NO ACTION ON UPDATE NO ACTION;";
           
   $escritura='<?php '
        . '$host="'.$_POST['host'].'";'
        . '$user="adminfjb";'
        . '$password="admin";'
        . '$db="fjb";'
        . '$port="'.$_POST['port'].'";';
    $file= fopen("../config/config.php","w");
    fwrite($file, $escritura);
    fclose($file);
   
    echo "Creando infraestructura...</br></br>";
    
    foreach($creacionInfraestructura as $consulta){
        
        mysqli_query($conexion, $consulta) or die("Error: ".mysqli_error($conexion));
        echo "Ejecutado: $consulta <br></br>";
        
    }
    
    echo "Instalación completada con éxito.</br> Borre la carpeta 'install' del raíz, y su contenido.</br></br>";
    
}
        



?>

<html>
    <head><title>Instalación AW</title>
    
    <meta charset="utf-8"/>
		
		<style>
			
			.miForm label{
				
                            display:block;
                            font-family: 'Open Sans', sans-serif;
                            font-size: 13px;
			}
                        
                        p{
                            font-family: 'Open Sans', sans-serif;
                            font-size: 13px;
                        }
			</style>
        
    </head>
    
    <body>
        
        <div class="form">
            
        <form class="miForm" method="POST" action="">
		
            <h2 align="center">Introduzca los datos del servidor MySQL dónde instalar la Aplicación Web</h2>
            
            <table align="center"><tr><td><label>Usuario: </label><input type="text" name="user" required/>
                        <label>Contraseña: </label><input type="password" name="password" required/>
                        <label>Host: </label><input type="text" name="host" required/>
                        <label>Puerto: </label><input type="text" name="port" required/>
			
                    </td></tr><tr><td><label><input type="submit" name="install" value="Instalar"/></label></td></tr>
                        
      </table>
		
            <br/><p align="center">El usuario del servidor debe tener permisos total en la base de datos.</p>
                        
		</form>
        
        </div>
            
    </body>
</html>