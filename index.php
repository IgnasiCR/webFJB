<?php

include_once "./config/config.php";

include_once "./config/login.php";

?>

<html lang="es">
    
    <head>
    
        <title>Inicio - Francisco Javier de Burgos</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
        
        <link rel="stylesheet" href="css/fontello.css">
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="css/banner.css">
        <link rel="stylesheet" href="css/blog.css">
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
        
            <section id="banner">
            
                <img src="img/banner.jpg">
                <div class="contenedor">
                <h2>Francisco Javier de Burgos</h2>
                <p>¿Quiere asegurarse un futuro?</p>
                <a href="ciclos">Leer más</a>
                </div>
            </section>
            
        <div class="contenedor">
            <section id="Bienvenidos">
            
            <h2>BIENVENIDOS A NUESTRA WEB</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec lacinia mauris. Etiam vulputate iaculis augue, at blandit eros sodales sit amet.</p>
            </section>
        </div>
            
            <section id="blog">
            
            <h3>Nuestras últimas noticias</h3>
                
                <div class="contenedor">
                    
                     <?php
            
            $conexion=mysqli_connect($host,$user,$password,$db,$port) or die("Error en la conexión");
            
            $por_pagina = 6;
            
            if (isset($_GET['pagina'])){
                $pagina = $_GET['pagina'];
                
            }else{
                $pagina = 1;
            }
            
            $empieza = ($pagina-1) * $por_pagina;
            
            $query = "SELECT * FROM `noticias` ORDER BY `noticias`.`id` DESC LIMIT $empieza, $por_pagina";
            
            $resultado = mysqli_query($conexion, $query);
            
            ?>
                
                <?php
                
                    while($fila = mysqli_fetch_assoc($resultado)){
                    
                    echo "<article><a href='noticia?id=$fila[id]'><img src='$fila[imagen]'><h4>$fila[titulo]</h4></a></article>";
                
                        }
                        
                        ?>
                    
                </div>
                
            </section>
            
            <section>
                
                <div class="contenedor">
                    
                     <?php 
            
            $query2 = "SELECT * FROM noticias";
            
            $resultado2 = mysqli_query($conexion, $query2);
            
            $total_registros = mysqli_num_rows($resultado2);
            
            $total_paginas = ceil($total_registros / $por_pagina);
            
            if ($pagina==1){
            echo "<center>";
            }else{
                echo "<center><a style='color:black;margin:3px;' href='index?pagina=1'>".'Primera'."</a>";
            }
                
            for($i=1; $i<=$total_paginas; $i++){
                if ($i==$pagina){
                     echo "<a style='text-decoration: none;margin:3px;'>".$i."</a>";
                }else{
                echo "<a style='color:black;margin:3px;' href='index?pagina=".$i."'>".$i."</a>";
                }
            }
            if ($pagina==$total_paginas){
                echo "</center>";
            }
            
            if($total_registros==0){
                echo "<p style='text-align:center;'>No hay ninguna noticia disponible.</p>";
            }
            else if ($pagina==$total_paginas){
                echo "</center>";
            }else{
            echo "<a style='color:black;margin:3px;' href='index?pagina=$total_paginas'>".'Última'."</a></center>";
            }
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