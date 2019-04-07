<?php

include_once "./config/config.php";

include_once "./config/login.php";

?>

<html lang="es">

    <head>
    
        <title>CFGM - Francisco Javier de Burgos</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
        
        <link rel="stylesheet" href="css/fontello.css">
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="css/banner.css">
        <link rel="stylesheet" href="css/blog.css">
        <link rel="stylesheet" href="css/contenidos_cf.css">
        
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    
        <link rel="stylesheet" href="css/slider.css">
        
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
            
            <h2>CICLO FORMATIVO GRADO MEDIO</h2>
                <p>Técnico en Sistemas Microinformáticos y Redes</p>
            </section>
        </div>
            
           <div id="contenedor-slider" class="contenedor-slider">
                <div id="slider" class="slider">
                    <section class="slider__section"><img src="img/ciclos/cfgm1.png" class="slider__img"></section>
                    <section class="slider__section"><img src="img/ciclos/cfgm2.png" class="slider__img"></section>
                    <section class="slider__section"><img src="img/ciclos/cfgm3.png" class="slider__img"></section>
                </div>
  <div id="btn-prev" class="btn-prev">&#60;</div>
  <div id="btn-next" class="btn-next">&#62;</div>
               
               <script src="js/slider.js"></script>
               
 </div>
            
            <section id="cf">
                
                <div class="contenedor">
                
                <article>
                    
                    <h3>Duración del estudio:</h3>
                    
                    <p>2000 horas.</p>
                    
                    <h3>Requisitos de acceso:</h3>
                    
                    <p>Puedes acceder a un ciclo de <b>grado medio</b> cuando reúnas alguno de los siguientes requisitos:</p>
                    
                    <p align="left">Acceso <b>directo</b>:</p>
                    
                    <ul>     
                        <li><p>Estar en posesión del <strong>título de Graduado en Educación Secundaria Obligatoria</strong> o de un nivel académico superior.</p></li>     
                        
                        <li><p>Estar en posesión de un Título Profesional Básico (Formación Profesional Básica).</p></li> 
                        
                        <li><p>Estar en posesión de un título de Técnico o de Técnico Auxiliar o equivalente a efectos académicos.</p></li>     
                        <li><p>Haber superado el segundo curso del Bachillerato Unificado y Polivalente (BUP).</p></li> 
                    </ul>
                    
                    <p>Acceso mediante <b>prueba</b> (para quienes no tengan alguno de los requisitos anteriores):</p>
                    
                    <ul>     
                        <li><p>Haber superado la <a href="http://todofp.es/todofp/pruebas-convalidaciones/pruebas/ciclos-grado-medio.html">prueba de acceso a ciclos formativos de grado medio</a> (se requerirá tener, al menos, diecisiete años, cumplidos en el año de realización de la prueba)..</p></li>
                    </ul>
                    
                    <h3>¿Qué voy a aprender y hacer?</h3>
                    
                    <p>Instalar, configurar y mantener sistemas microinformáticos, aislados o en red, así como redes locales en pequeños entornos.</p>
                    
                    <p align="left">Este profesional será capaz de:</p>
                    
                    <ul>     
                        <li><p>Instalar y configurar software básico y de aplicación, redes locales cableadas, inalámbricas o mixtas y conectadas a redes públicas.</p></li>     
                        
                        <li><p>Instalar, configurar y mantener servicios multiusuario, aplicaciones y dispositivos compartidos en un entorno de red local.</p></li> 
                        
                        <li><p>Montar y configurar ordenadores y periféricos.</p></li>     
                        
                        <li><p>Determinar la logística asociada a las operaciones de instalación, configuración y mantenimiento de sistemas microinformáticos.</p></li> 
                        
                        <li><p>Determinar la logística asociada a las operaciones de instalación, configuración y mantenimiento de sistemas microinformáticos.</p></li> 
                        
                    </ul>
                    
                    <p>Estas enseñanzas incluyen los conocimientos necesarios para llevar a cabo las actividades de nivel básico de prevención de riesgos laborales.</p>
                    
                    <h3>Al finalizar mis estudios, ¿qué puedo hacer?</h3>
                    
                    <ul>     
                        <li><p><b>Trabajar:</b></p></li>
                        
                        <ul>
                            
                            <li><p>En empresas del sector servicios que se dediquen a la comercialización, montaje y reparación de equipos, redes y servicios microinformáticos en general, como parte del soporte informático de la organización o en entidades de cualquier tamaño y sector productivo que utilizan sistemas microinformáticos y redes de datos para su gestión.</p></li>
                        
                        </ul>
                        
                        <li><p><b>Seguir estudiando:</b></p></li>
                        
                        <ul>
                            
                            <li><p>Cursos de especialización profesional.</p></li>
                            
                            <li><p>La preparación y realización de la prueba de acceso a ciclos de grado superior.</p></li>
                            
                            <li><p>Otro ciclo de Formación Profesional de Grado Medio con la posibilidad de establecer convalidaciones de módulos profesionales de acuerdo a la normativa vigente.</p></li>
                            
                            <li><p>El Bachillerato en cualquiera de sus modalidades.</p></li>
                        
                        </ul>
                        
                    </ul>
                    
                    <h3>¿Cuáles son las salidas profesionales?</h3>
                    
                    <ul>   
                        
                        <li><p>Instalador-reparador de equipos informáticos.</p></li>
                        
                        <li><p>Técnico de soporte informático.</p></li> 
                        
                        <li><p>Montar y configurar ordenadores y periféricos.</p></li>     
                        <li><p>Técnico de redes de datos.</p></li> 
                        
                        <li><p>Reparador de periféricos de sistemas microinformáticos.</p></li> 
                        
                        <li><p>Comercial de microinformática.</p></li>
                        
                        <li><p>Técnico de soporte informático.</p></li> 
                        
                        <li><p>Operador de tele-asistencia.</p></li>
                        
                        <li><p>Operador de sistemas.</p></li>
                        
                    </ul>
                    
                    <h3>Plan de formación:</h3>
                    
                    <p align="left">Los módulos profesionales de este ciclo formativo son:</p>
                    
                    <ul>   
                        
                        <li><p>Montaje y mantenimiento de equipo.</p></li>
                        
                        <li><p>Sistemas operativos monopuesto.</p></li> 
                        
                        <li><p>Aplicaciones ofimáticas.</p></li>  
                        
                        <li><p>Sistemas operativos en red.</p></li> 
                        
                        <li><p>Redes locales.</p></li> 
                        
                        <li><p>Seguridad informática.</p></li>
                        
                        <li><p>Servicios en red.</p></li> 
                        
                        <li><p>Aplicaciones web.</p></li>
                        
                        <li><p>Formación y orientación laboral.</p></li>
                        
                        <li><p>Empresa e iniciativa empresarial.</p></li>
                        
                        <li><p>Formación en centros de trabajo.</p></li>
                        
                    </ul>
                    
                </article>
                    
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