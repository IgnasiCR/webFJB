<?php

include_once "../config/config.php";
include_once "../config/seguridad.php";

seguridadInterior(ADMINISTRADOR);

?>

<html lang="es">
    
    <head>
    
        <title>Gestión de la Galería - Francisco Javier de Burgos</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
        
        <link rel="stylesheet" href="../css/fontello.css">
        <link rel="stylesheet" href="../css/estilos.css">
        <link rel="stylesheet" href="../css/menu.css">
        <link rel="stylesheet" href="../css/banner.css">
        <link rel="stylesheet" href="../css/blog.css">
        <link rel="stylesheet" href="css/fontello.css">
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="css/galeria.css">
        
        <script src="js/galeria.js"></script>
        
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
            
            <h2>AÑADIR/BORRAR IMÁGENES DE LA GALERÍA</h2>
            
            <p>Abra el menú de la galería que desee modificar, y acto seguido si quiere añadir alguna imagen más carguela desde el equipo con la herramienta, y en caso
                de que quiera eliminar alguna de éstas, haga click encima de ésta para que se borre automáticamente.<p>
                <br/>
            <p>Tenga en cuenta que en las galerías de los ciclos formativos solo se pueden tener 3 imágenes, ni más ni menos. En la galería general del centro se pueden tener desde 0 imágenes hasta el máximo que se desee.</p>
            <br/>
            <p>Las imágenes de las galerías deben tener un tamaño exacto de 700x300px, en caso de no cumplirlos no podrá ser subida a la web.</p>
            
            </section>
            
            <section id="blog">
                
                <a class="botonGaleria">GALERÍA GENERAL</a>
    
        <div id="galeriaGeneral">
            
            <form action="galeriaGeneral.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="imagenes[]" multiple="multiple" />
                    <input type="submit" />
            </form>
              
                <?php
                
                /* MOSTRAR IMAGENES  */
                
                $directorio = '../img/galeria';

                $array = scandir($directorio);

                $longitud = count($array);

                for($i="2"; $i<$longitud; $i++){
                    echo "<a href='borrar.php?codigo=$array[$i]'><img src='../img/galeria/$array[$i]'/></a>";
                }
                
                ?>
        
        </div>
                
        <a onclick="galeriaCiclob()" class="botonGaleria">GALERÍA CICLO FORMATIVO BÁSICO</a>
    
        <div style='display:none' id="galeriaCiclob">
            
            <form action="galeriaCiclob.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="imagenes[]" multiple="multiple" />
                    <input type="submit" />
            </form>
              
                <?php
                
                /* MOSTRAR IMAGENES  */

                for($i="1"; $i<"4"; $i++){
                    echo "<img src='../img/ciclos/cfb$i.png'/>";
                }
                
                ?>
        
        </div>
        
        <a onclick="galeriaCiclogm()" class="botonGaleria">GALERÍA CICLO FORMATIVO GRADO MEDIO</a>
    
        <div style='display:none' id="galeriaCiclogm">
            
            <form action="galeriaCiclogm.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="imagenes[]" multiple="multiple" />
                    <input type="submit" />
            </form>
              
                <?php
                
                /* MOSTRAR IMAGENES  */

                for($i="1"; $i<"4"; $i++){
                    echo "<img src='../img/ciclos/cfgm$i.png'/>";
                }
                
                ?>
        
        </div>
        
        <a onclick="galeriaCiclogs()" class="botonGaleria">GALERÍA CICLO FORMATIVO GRADO SUPERIOR</a>
    
        <div style='display:none' id="galeriaCiclogs">
            
            <form action="galeriaCiclogs.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="imagenes[]" multiple="multiple" />
                    <input type="submit" />
            </form>
              
                <?php
                
                /* MOSTRAR IMAGENES  */

                for($i="1"; $i<"4"; $i++){
                    echo "<img src='../img/ciclos/cfgs$i.png'/>";
                }
                
                ?>
        
        </div>
                
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
