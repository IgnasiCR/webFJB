<?php

include_once "./config/config.php";

include_once "./config/login.php";

?>

<html lang="es">

    <head>
    
        <title>Ciclos Formativos - Francisco Javier de Burgos</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
        
        <link rel="stylesheet" href="css/fontello.css">
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="css/banner.css">
        <link rel="stylesheet" href="css/blog.css">
        <link rel="stylesheet" href="css/noticias.css">
        <link rel="stylesheet" href="css/ciclos.css">
        <link rel="stylesheet" href="css/login.css">
    
        <script src="js/login.js"></script>
        
    </head>
    
    <body>
    
        <header>
        
            <div class="contenedor">
            
                <h1 class="icon-school">FJB</h1>
            
                <input type="checkbox" id="menu-bar">
                <label class="icon-menu" for="menu-bar"></label>
                
                <nav class="menu">
                
                    <a href="index">Inicio</a>
                    <a id="menu2" href="ciclos">Ciclos Formativos</a>
                    <div id="submenu">
                        
                        <a href="ciclo_b">Informática y Comunicaciones</a>
                        
                        <a href="ciclo_gm">Sistemas Microinformáticos y Redes</a>
                            
                        <a href="ciclo_gs">Administración de Sistemas Informáticos en Red</a>
                        
                    </div>
                    
                    <a href="galeria">Galeria</a>
                    
                    <a href="contacto">Contacto</a>
                    <a onclick="aparecer()" href="#">Login</a>

                
                </nav>
                
                <nav id="login">
            
                    <button onclick="desaparecer()" id="X">X</button>
                    
        <div id="tituloSuperior" class="contenedor">
            <section id="Bienvenidos">
            
            <h2>ACCESO ADMINISTRATIVO</h2>
            </section>
        </div>
            
            <section id="blog">
                
                <form id="acceso" action="" method="POST" name="logueo">
                
                <table id="tablaLogueo">
                    
                    <tr><td>Usuario</td></tr>
                    
                       <tr><td><input name="usuario" type="name"></td></tr>
                    
                       <tr><td>Contraseña</td></tr>
                    
                       <tr><td><input name="password" type="password"></td></tr>
                    
                </table>
                    
                <input id="logueo" name="acceder" type="submit" value="Acceder">
                
                </form>
                
            </section>
                
                </nav>
                
            </div>
            
        </header>
        
        <main>
            
            <?php 

        $id = $_GET['id'];
        $consulta = "SELECT * FROM noticias WHERE id='$id'";
        $conexion=mysqli_connect($host,$user,$password,$db,$port) or die("Error en la conexión");
        $datos = mysqli_query($conexion, $consulta) or die(mysql_error());
        $fila = mysqli_fetch_assoc($datos);
        
?>
            
        <div id="ciclos" class="contenedor">
            <section id="Bienvenidos">
            
            <h2><?php echo $fila['titulo']; ?></h2>
            <p><?php echo $fila['subtitulo']; ?></p>
            
            </section>
        </div>
            
            <section id="noticia">
                
                <div class="contenedor">
                
                <?php 
                echo "<p style='font-weight: bold;text-align:left;margin-bottom:5px;'>$fila[fecha]</p>";
                
                echo "<p align='justify'>".nl2br(html_entity_decode($fila[cuerpo]))."</p>"; 
                
                echo "<p style='font-style: italic;text-align:right;margin-bottom:5px;'>$fila[autor]</p>";
                
                echo "<a target='_blank' class='icon-facebook' id='facebook' href='http://www.facebook.com/sharer.php?u=http://webfjb.esy.es/noticia?id=$fila[id]&t=FJB - Noticias' title='Compartir en Facebook'></a>"
                
                ?>
                
                </div>
                
            </section>
            
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