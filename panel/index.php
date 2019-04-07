<?php

include_once "../config/config.php";
include_once "../config/seguridad.php";

seguridad(MAESTRO);

?>

<html lang="es">
    
    <head>
    
        <title>Inicio - Francisco Javier de Burgos</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
        
        <link rel="stylesheet" href="../css/fontello.css">
        <link rel="stylesheet" href="../css/estilos.css">
        <link rel="stylesheet" href="../css/menu.css">
        <link rel="stylesheet" href="../css/banner.css">
        <link rel="stylesheet" href="../css/blog.css">
        
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
            
            <h2>PANEL ADMINISTRATIVO</h2>
            
             <br/>
            
            <p>A esta parte privada de la página web solo se puede acceder si usted es maestro o administrador. En ésta tendrá la oportunidad de realizar
                acciones que otros usuarios no pueden hacer, tales como: crear noticias, añadir y/o borrar imágenes de las galerías, o incluso añadir o borrar usuarios.</p>
            
            <br/>
            
            </section>
        </div>
            
            <section id="blog">
              
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