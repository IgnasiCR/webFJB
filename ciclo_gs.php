<?php

include_once "./config/config.php";

include_once "./config/login.php";

?>

<html lang="es">

    <head>
    
        <title>CFGS - Francisco Javier de Burgos</title>
        
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
            
            <h2>CICLO FORMATIVO GRADO SUPERIOR</h2>
                <p>Técnico Superior en Administración de Sistemas Informáticos en Red</p>
            </section>
        </div>
            
           <div id="contenedor-slider" class="contenedor-slider">
                <div id="slider" class="slider">
                    <section class="slider__section"><img src="img/ciclos/cfgs1.png" class="slider__img"></section>
                    <section class="slider__section"><img src="img/ciclos/cfgs2.png" class="slider__img"></section>
                    <section class="slider__section"><img src="img/ciclos/cfgs3.png" class="slider__img"></section>
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
                    
                    <p>Puedes acceder a un ciclo de <b>grado superior</b> cuando reúnas alguno de los siguientes requisitos:</p>
                    
                    <p align="left">Acceso <b>directo</b>:</p>
                    
                    <ul>     
                        <li><p>Estar en posesión del Título de Bachiller, o de un certificado acreditativo de haber superado todas las materias del Bachillerato.</p></li>     
                        
                        <li><p>Haber superado el segundo curso de cualquier modalidad de Bachillerato experimental.</p></li> 
                        
                        <li><p>Estar en posesión de un Título de Técnico (Formación Profesional de Grado Medio)*.</p>
                        
                        <p>*Siempre que la demanda de plazas en ciclos formativos de grado superior supere la oferta, las Administraciones educativas podrán establecer procedimientos de admisión al centro docente, de acuerdo con las condiciones que el Gobierno determine reglamentariamente.</p></li> 
                        
                        <li><p>Estar en posesión de un Título de Técnico Superior, Técnico Especialista o equivalente a efectos académicos.</p></li> 
                        
                        <li><p>Haber superado el Curso de Orientación Universitaria (COU).</p></li> 
                        
                        <li><p>Estar en posesión de cualquier Titulación Universitaria o equivalente.</p></li> 
                        
                    </ul>
                    
                    <p>Acceso mediante <b>prueba</b> (para quienes no tengan alguno de los requisitos anteriores):</p>
                    
                    <ul>     
                        <li><p>Haber superado la <a href="http://todofp.es/todofp/pruebas-convalidaciones/pruebas/ciclos-grado-superior.html">prueba de acceso a ciclos formativos de grado superior</a> (se requiere tener al menos 19 años en el año que se realiza la prueba o 18 para quienes poseen el título de Técnico).</p></li>
                        
                        <li><p>Haber superado la prueba de acceso a la Universidad para mayores de 25 años</p></li>
                        
                    </ul>
                    
                    <h3>¿Qué voy a aprender y hacer?</h3>
                    
                    <p>Configurar, administrar y mantener sistemas informáticos, garantizando la funcionalidad, la integridad de los recursos y servicios del sistema, con la calidad exigida y cumpliendo la reglamentación vigente.</p>
                    
                    <p align="left">Este profesional será capaz de:</p>
                    
                    <ul>     
                        <li><p>Administrar sistemas operativos de servidor, instalando y configurando el software, en condiciones de calidad para asegurar el funcionamiento del sistema.</p></li>     
                        
                        <li><p>Administrar servicios de red (web, mensajería electrónica y transferencia de archivos, entre otros) instalando y configurando el software, en condiciones de calidad.</p></li> 
                        
                        <li><p>Implantar y gestionar bases de datos instalando y administrando el software de gestión en condiciones de calidad, según las características de la explotación.</p></li>     
                        
                        <li><p>Evaluar el rendimiento de los dispositivos hardware identificando posibilidades de mejoras según las necesidades de funcionamiento.</p></li> 
                        
                        <li><p>Determinar la infraestructura de redes telemáticas elaborando esquemas y seleccionando equipos y elementos.</p></li>
                        
                        <li><p>Integrar equipos de comunicaciones en infraestructuras de redes telemáticas, determinando la configuración para asegurar su conectividad.</p></li> 
                        
                        <li><p>Administrar usuarios de acuerdo a las especificaciones de explotación para garantizar los accesos y la disponibilidad de los recursos del sistema.</p></li> 
                        
                        <li><p>Diagnosticar las disfunciones del sistema y adoptar las medidas correctivas para restablecer su funcionalidad.</p></li> 
                        
                        <li><p>Gestionar y/o realizar el mantenimiento de los recursos de su área (programando y verificando su cumplimiento), en función de las cargas de trabajo y el plan de mantenimiento.</p></li> 
                        
                    </ul>
                    
                    
                    <h3>Al finalizar mis estudios, ¿qué puedo hacer?</h3>
                    
                    <ul>     
                        <li><p><b>Trabajar como:</b></p></li>
                        
                        <ul>
                            
                            <li><p>Técnico en administración de sistemas.</p></li>
                            
                            <li><p>Responsable de informática.</p></li>
                            
                            <li><p>Técnico en servicios de Internet.</p></li>
                            
                            <li><p>Técnico en servicios de mensajería electrónica.</p></li>
                            
                            <li><p>Personal de apoyo y soporte técnico.</p></li>
                            
                            <li><p>Técnico en teleasistencia.</p></li>
                            
                            <li><p>Técnico en administración de base de datos.</p></li>
                            
                            <li><p>Técnico de redes.</p></li>
                            
                            <li><p>Supervisor de sistemas.</p></li>
                            
                            <li><p>Técnico en servicios de comunicaciones.</p></li>
                            
                            <li><p>Técnico en entornos web.</p></li>
                        
                        </ul>
                        
                        <li><p><b>Seguir estudiando:</b></p></li>
                        
                        <ul>
                            
                            <li><p>Cursos de especialización profesional.</p></li>
                            
                            <li><p>La preparación y realización de la prueba de acceso a ciclos de grado superior.</p></li>
                            
                            <li><p>Otro Ciclo de Formación Profesional de Grado Superior con la posibilidad de establecer convalidaciones de módulos profesionales de acuerdo a la normativa vigente.</p></li>
                            
                            <li><p>Enseñanzas Universitarias con la posibilidad de establecer convalidaciones de acuerdo con la normativa vigente.</p></li>
                        
                        </ul>
                        
                    </ul>
                    
                    <h3>¿Cuáles son las salidas profesionales?</h3>
                    
                    <p>Este profesional ejerce su actividad en el área de informática de entidades que dispongan de sistemas para la gestión de datos e infraestructura de redes (intranet, internet y/o extranet).</p>
                    
                    <h3>Plan de formación:</h3>
                    
                    <p align="left">Los módulos profesionales de este ciclo formativo son:</p>
                    
                    <ul>   
                        
                        <li><p>Implantación de sistemas operativos.</p></li>
                        
                        <li><p>Planificación y administración de redes.</p></li> 
                        
                        <li><p>Fundamentos de hardware.</p></li>  
                        
                        <li><p>Gestión de bases de datos.</p></li> 
                        
                        <li><p>Lenguajes de marcas y sistemas de gestión de información.</p></li> 
                        
                        <li><p>Administración de sistemas operativos.</p></li>
                        
                        <li><p>Servicios de red e Internet.</p></li> 
                        
                        <li><p>Implantación de aplicaciones web.</p></li>
                        
                        <li><p>Administración de sistemas gestores de bases de datos.</p></li>
                        
                        <li><p>Seguridad y alta disponibilidad.</p></li>
                        
                        <li><p>Proyecto de administración de sistemas informáticos en red.</p></li>
                        
                        <li><p>Formación y orientación laboral.</p></li>
                        
                        <li><p>Empresa e iniciativa emprendedora.</p></li>
                        
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