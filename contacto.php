<?php

include_once "./config/config.php";

include_once "./config/login.php";

?>

<html lang="es">

    <head>
    
        <title>Contacto - Francisco Javier de Burgos</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
        
        <link rel="stylesheet" href="css/fontello.css">
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="css/banner.css">
        <link rel="stylesheet" href="css/blog.css">
        <link rel="stylesheet" href="css/ciclos.css">
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="css/contacto.css">
    
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
                    
                    <a href="#">Contacto</a>
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
            
            <h2>CONTÁCTENOS</h2>
            
            </section>
            
             <section id="contacto">
                
                <div class="contact-us">
    

    <div class="helpLeftColumn">
        <div class="pod-item email">
            <div class="pod-image"><img src="img/email.png"></div>
    <div class="text-container">  
        <h3 class="helpTitle">Correo electrónico</h3>
        <div class="helpBlurb">Podrán enviarnos durante las 24 horas del día, 7 días a la semana, las dudas que tengan sobre los ciclos formativos y/o centro, a la siguiente dirección de correo.</div>

            <div class="children">
                <a href="mailto:18007046.edu@juntadeandalucia.es"><b>Enviar correo electrónico</b></a>
            </div>
    </div>
</div>
    </div>
    <div class="helpRightColumn">
        <div class="telephone-contact-section">
<div class="pod-item telephone">
    <div class="pod-image"><img src="img/tlf.png"></div>
    <div class="text-container">  
        <h3 class="helpTitle">Teléfono</h3>
        <div class="helpBlurb">Disponemos de servicio de atención al alumno con el siguiente horario: 09:00 - 14:00. Por favor, llámenos al:</div>

    </div>
</div><h3 class="infoTextContainer heading customer-services">Atención al alumno
    
</h3>

    <div class="telNumberBlock">

            <span class="dialNumber">
                <div>
                    <a href="tel:958649903"><b>958649903</b></a>
                </div>
            </span>
    </div>
            
        </div>
        <div class="pod-item post">
            <div class="pod-image"><img src="img/correo.png"></div>
    <div class="text-container">  
        <h3 class="helpTitle">Correo ordinario</h3>
        <div class="helpBlurb">Nos puede enviar también una carta a la siguiente dirección: <br>Avda. Gonzalez Carrascosa s/n,<br>18600,<br>Motril</div>

    </div>
</div>
    </div>
</div>
                
                 <div id="map"> <p align="center"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3196.921433458731!2d-3.51282008471155!3d36.74845687995916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7190b9d9f41ecd%3A0xc984a810d69fafb7!2sI.E.S.+Fco.+Javier+de+Burgos!5e0!3m2!1ses!2ses!4v1496946382931" width="700" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></p> </div>
                
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