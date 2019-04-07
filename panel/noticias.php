<?php

include_once "../config/config.php";
include_once "../config/seguridad.php";
include_once "gestionUsuarios.php";

seguridad(MAESTRO);

if(isset($_POST['anadirComunicado'])){
        $foto= uniqid()."-".$_FILES["imagen"]["name"];
        $ruta=$_FILES["imagen"]["tmp_name"];
        $destino="../img/noticias/".$foto;
        list($width, $height, $type, $attr) = getimagesize("$ruta");
        if($width=="400" && $height=="300"){
            if($type=="2" || $type=="3"){
            }
            else{
                 header("Location: noticias?error=type");
                exit();
            }
            
        }else{
            header("Location: noticias?error=medida");
            exit();
        }
        
        copy($ruta,$destino);
        $destino2="./img/noticias/".$foto;
	$textoEnvio=htmlentities(addslashes($_POST[comunicado]));
        $consulta="INSERT INTO `noticias` (`id`, `titulo`, `subtitulo`, `cuerpo`, `fecha`, `autor`, `imagen`, `login`) VALUES (NULL, '$_POST[titulo]', '$_POST[subtitulo]', '".$textoEnvio."', '$_POST[fecha]', '$_POST[autor]', '$destino2', '$_SESSION[login]');";
	$conexion=mysqli_connect($host,$user,$password,$db,$port) or die("Error en la conexión");
	mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));
	mysqli_close($conexion);
}

?>

<html lang="es">
    
    <head>
    
        <title>Gestión de Noticias - Francisco Javier de Burgos</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
        
        <link rel="stylesheet" href="../css/fontello.css">
        <link rel="stylesheet" href="../css/estilos.css">
        <link rel="stylesheet" href="../css/menu.css">
        <link rel="stylesheet" href="../css/banner.css">
        <link rel="stylesheet" href="../css/blog.css">
        <link rel="stylesheet" href="css/noticias.css">
        
        <script type="text/javascript" src="js/noticias.js"></script>
        
    </head>
    
    <body>
    
        <header>
        
            <div class="contenedor">
            
                <h1 class="icon-school">FJB</h1>
            
                <input type="checkbox" id="menu-bar">
                <label class="icon-menu" for="menu-bar"></label>
                
                <nav class="menu">
                
                    <a href="index">Inicio</a>
                    
                    <a href="#">Noticias</a>
                    
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
            
            <h2>GESTIÓN DE NOTICIAS</h2>
            
             <br/>
            
            <p>La imagen que se sube debe ser de 400x300px ya que ésta debe ser pequeña y será situada en "Inicio". Luego dentro de la noticia puede utilizar imágenes 
                en el cuerpo de la noticia (subiéndola a <a href="http://imgur.com/">Imgur</a> u otras webs) pulsando en "Añadir Imagen" en el editor.</p>
            
            </section>
            
            <section id="blog">
            
                <script type="text/javascript" src="editor/editor.js"></script> <script type="text/javascript">
  bkLib.onDomLoaded(function() {
        new nicEditor({buttonList : ['bold','italic','underline','strikeThrough','ol','ul','link','left','center','right','justify','html','image']}).panelInstance('areaTexto');
       
  });
  </script>
  
  <h3 id="errorNoticia" align="center">Desde dispositivos móviles no se pueden crear noticias.</h3>
  <?php
  if(isset($_GET['error'])){
        if($_GET['error']=="type"){
            echo "<h3>La imagen no utiliza los formatos JPG, JPEG o PNG.</h3>";
        }
        else{
            echo "<h3>La imagen no cumple el formato 400x300 píxeles.</h3>";
        }
}
  ?>
                      
  <form class="misComunicados" method="POST" action="" enctype="multipart/form-data">
            <table id="insertarNoticia" style="border-radius: 5px; margin-top: 5px;width:100%;" class="jtabla">
                    
            <tr style="width:5%;">
                <th>Titulo</th>
                <th>Subtitulo</th>
                <th>Imagen</th>
                <th>Noticia</th>
                <th>Fecha</th>
                <th>Autor</th>
                <th>Parámetros</th>
            </tr>
            <tr style="width:95%;">
                <td title="Titulo"><input id="añadirNoticias" type="text" name="titulo" required></td>
                <td title="Subtitulo"><input id="añadirNoticias" type="text" name="subtitulo" required></td>
                <td title="Imagen"><input id="añadirNoticias" type="file" name="imagen"></td>
                <td title="Noticia"><textarea cols="50" name="comunicado" id="areaTexto" style="width:100%; height:300px">

                                                                    </textarea></td>
                <td title="Fecha"><input id="añadirNoticias" type="date" name="fecha"></td>
                <td title="Autor"><input id="añadirNoticias" type="text" name="autor" required></td>
                <td title="Parámetros"><input id="botonEnlace" type="submit" name="anadirComunicado" value="Añadir"></td>
            </tr>
        </table></form>
                
            </section>
            
             </div>
            
            <section id="blog">
            
            <h3>Eliminar noticias</h3>
                
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
                    
                    echo "<article><a href='borrarNoticia?id=$fila[id]'><img src='.$fila[imagen]'><h4>$fila[titulo]</h4></a></article>";
                
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
                echo "<p style='text-align:center;'>No hay ningún comunicado disponible.</p>";
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