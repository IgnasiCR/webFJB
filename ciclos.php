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
            
        <div id="ciclos" class="contenedor">
            <section id="Bienvenidos">
            
            <h2>CICLOS FORMATIVOS - INFORMACIÓN</h2>
                <p>El Instituto Francisco Javier de Burgos, cuenta con dos ciclos formativos, uno de Grado Medio (Sistemas Microinformáticos y Redes) y otro de Grado Superior (Administración de Sistemas Informáticos en Red).</p>
            </section>
        </div>
            
            <section id="blog">
                
                <div class="contenedor">
                
                <a href="ciclo_b"><article>
                    
                    <img src="img/ciclos/cfb.png">
                    <h4>Informática y comunicaciones</h4>
                    
                </article></a>    
                    
                <a href="ciclo_gm"><article>
                    
                    <img src="img/ciclos/cfgm.png">
                    <h4>Sistemas Microinformáticos y Redes</h4>
                    
                </article></a>
                    
                <a href="ciclo_gs"><article>
                    
                    <img src="img/ciclos/cfgs.png">
                    <h4>Administración de Sistemas Informáticos en Red</h4>
                    
                </article></a>
                    
                </div>
                
            </section>
            
            <section id="blog">
                
                <div class="contenedor">
                
                <article id="cisco">
                    
                    <h2 align="center">CISCO NETWORKING ACADEMY</h2>
                    
                    <p><a href="https://www.netacad.com">Cisco Networking Academy (CNA)</a> es un programa educativo sin ánimo de lucro cuyo objetivo es contribuir a la preparación de estudiantes en el diseño, configuración y mantenimiento de redes, a través de uno de los modelos e-learning más avanzados.</p>
                   
                    <img style="width:128px;" src="img/cisco.ico">
                    
                    <p>En el IES Francisco Javier de Burgos podrás oficialmente obtener varios titulos de Cisco Networking Academy: <i>IT Essentials, CCNA 1 Exploration, CCNA 2 Routing and Switching, CCNA 3 Scaling Networks, CyberSecurity Essentials.</i></p>
                    
                   </article>
                    
                </div>
                
            </section>
            
            <div class="contenedor">
            <section id="empresas">
            
            <h2 align="center">EMPRESAS COLABORADORAS</h2>
            <br/>
            <img src="img/imagen_general.png">
            
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