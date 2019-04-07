<?php

include_once "../config/config.php";
include_once "../config/seguridad.php";
include_once "gestionUsuarios.php";

seguridad(ADMINISTRADOR);

?>

<html lang="es">
    
    <head>
    
        <title>Gestión de Usuarios - Francisco Javier de Burgos</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
        
        <link rel="stylesheet" href="../css/fontello.css">
        <link rel="stylesheet" href="../css/estilos.css">
        <link rel="stylesheet" href="../css/menu.css">
        <link rel="stylesheet" href="../css/banner.css">
        <link rel="stylesheet" href="../css/blog.css">
        <link rel="stylesheet" href="css/usuarios.css">
        
        <script type="text/javascript" src="js/usuarios.js"></script>
        
    </head>
    
    <body>
    
        <header>
        
            <div class="contenedor">
            
                <h1 class="icon-school">FJB</h1>
            
                <input type="checkbox" id="menu-bar">
                <label class="icon-menu" for="menu-bar"></label>
                
                <nav class="menu">
                
                    <a href="index">Inicio</a>
                    
                    <a href="noticias">Noticias</a>
                    
                    <?php if($_SESSION['rol']==2){
                        
                        echo "<a href='galeria'>Galería</a>";
                    
                        echo "<a href='usuarios'>Usuarios</a>";
                    }
                    
                    ?>
                    
                    <a href="salir">Salir</a>
                    
                </nav>
                
            </div>
            
        </header>
        
        <main>
            
        <div class="contenedor">
            <section style="margin-top: 50px;" id="Bienvenidos">
            
            <h2>GESTIÓN DE USUARIOS</h2>
            
             <br/>
            
            <p>Si quiere crear un usuario tendrá que rellenar el siguiente formulario, pero tenga en cuenta que solo hay dos tipos de roles en la web, "1" para Maestro y
            "2" para Administrador. También podrá editar y borrar aquellos que lo desee haciendo click en el botón correspondiente.</p>
            
            </section>
            
            <section id="blog">
                
                <?php
                echo "<h3 align='center'>";
                echo $usuarioRepetido;
                echo "</h3>";
                ?>
                
                <form class="misUsuarios" method="POST" action="" onsubmit="return validarUsuarios(this);">
                <table style="border-radius: 5px; margin-top: 5px;" class="jtabla">
                    
            <tr>
                <th>Login</th>
                <th>Password</th>
                <th>Nombre</th>
                <th>Rol</th>
                <th>Parámetros</th>
            </tr>
            <tr>
                <td title="Login"><input id="añadirUsuarios" type="text" name="login" onkeypress="this.style.backgroundColor='';" required/></td>
                <td title="Password"><input id="añadirUsuarios" type="password" name="password" onkeypress="this.style.backgroundColor='';" required/></td>
                <td title="Nombre"><input id="añadirUsuarios" type="text" name="nombre" onkeypress="this.style.backgroundColor='';" required/></td>
                <td title="Rol"><input id="añadirUsuarios" type="text" name="rol" onkeypress="this.style.backgroundColor='';" required/></td>
                <td title="Parámetros"><input id='botonEnlace' type="submit" name="anadeUsuarios" value="Añadir"/><input id='botonEnlace' type="submit" name="actualizaUsuarios" value="Editar" style="display:none"/><br/><input id='botonEnlace' onclick='limpiar();' type="reset" value="Limpiar"></td>
            </tr>
        </table>
                </form>
                <br/>
                <table class="jtabla">
            <tr>
                <th>Login</th>
                <th>Password</th>
                <th>Nombre</th>
                <th>Rol</th>
                <th>Parámetros</th>
            </tr>
            
            <?php
		
		// Crear la tabla con el listado de todas las filas 
		// de la tabla alumnos de la BD ejemplos.
		
		$conexion=mysqli_connect($host,$user,$password,$db,$port) or die("Error en la conexión");
		$consultaSQL="Select * from usuarios;";
		$datos=mysqli_query($conexion, $consultaSQL) or die(mysqli_error($conexion));
		
		// Ciclamos por todos las filas que me lleguen en $datos
		
		while($fila=mysqli_fetch_array($datos,MYSQLI_ASSOC)){
			
			echo "<tr><td title='Login'>$fila[login]</td><td title='Password'>$fila[password]</td><td title='Nombre'>$fila[nombre]</td><td title='Rol'>$fila[rol]</td><td title='Parámetros'><a style='color:black;' href='usuarios?login=$fila[login]'>Borrar</a><br/><input id='botonEnlace' type='submit' name='editarMiembros' onclick='cargaUsuarios(this);' value='Editar'></td></tr>";
			
		}
		mysqli_close($conexion);
                
                
                
?>
            
        </table>
                
            </section>
            
             </div>
            
            <footer>
            
            <div class="contenedor">
                
                <p class="copy">FJB &copy; 2017</p>
                
                <div class="sociales">
                
                <a class="icon-facebook" href="#"></a>
                <a class="icon-twitter" href="#"></a>
                <a class="icon-instagram" href="#"></a>
                <a class="icon-google" href="#"></a>

                    
                </div>
                
                </div>
                
            </footer>
            
        </main>
    
    </body>

</html>