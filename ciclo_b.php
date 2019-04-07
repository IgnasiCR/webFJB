<?php

include_once "./config/config.php";

include_once "./config/login.php";

?>

<html lang="es">

    <head>
    
        <title>FPB - Francisco Javier de Burgos</title>
        
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
            
            <h2>CICLO FORMATIVO BÁSICO</h2>
                <p>Auxiliar de Informática y Comunicaciones</p>
            </section>
        </div>
            
           <div id="contenedor-slider" class="contenedor-slider">
                <div id="slider" class="slider">
                    <section class="slider__section"><img src="img/ciclos/cfb1.png" class="slider__img"></section>
                    <section class="slider__section"><img src="img/ciclos/cfb2.png" class="slider__img"></section>
                    <section class="slider__section"><img src="img/ciclos/cfb3.png" class="slider__img"></section>
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
                    
                    <p>El acceso a los ciclos de <b>Formación Profesional Básica</b> requerirá el cumplimiento simultáneo de las siguientes condiciones:</p>
                    
                    
                    <ul>     
                        <li><p>Tener un mínimo de 15 años (cumplidos o cumplirlos durante el año en curso) y no superar los 17 años.</p></li>     
                        
                        <li><p>Haber cursado 3º de ESO. Excepcionalmente se puede acceder si has cursado 2º de ESO.</p></li> 
                        
                        <li><p>Haber recibido una recomendación del equipo docente de la ESO, con el consentimiento de tus tutores legales.</p></li>
                    </ul>
                    
                    <h3>¿Qué voy a aprender y hacer?</h3>
                    
                    <p>Acopiar los materiales para acometer el montaje y/o mantenimiento en sistemas microinformáticos y redes de transmisión de datos.</p>
                    
                    <p align="left">Este profesional será capaz de:</p>
                    
                    <ul>     
                        <li><p>Realizar comprobaciones rutinarias de verificación en el montaje y mantenimiento de sistemas y/o instalaciones.</p></li>     
                        
                        <li><p>Adquirir hábitos de responsabilidad y autonomía basados en la práctica de valores, favoreciendo las relaciones interpersonales y profesionales, trabajando en equipo y generando un ambiente favorable de convivencia que permita integrarse en los distintos ámbitos de la sociedad.</p></li> 
                        
                        <li><p>Valorar las diferentes manifestaciones artísticas y culturales de forma fundamentada utilizándolas como fuente de enriquecimiento personal y social y desarrollando actitudes estéticas y sensibles hacia la diversidad cultural y el patrimonio artístico.</p></li>     
                        
                        <li><p>Realizar operaciones auxiliares de montaje de sistemas microinformáticos y dispositivos auxiliares en condiciones de calidad.</p></li> 
                        
                        <li><p>Manejar las herramientas del entorno usuario proporcionadas por el sistema operativo y los dispositivos de almacenamiento de información.</p></li> 
                        
                    </ul>
                    
                    <p>Estas enseñanzas incluyen los conocimientos necesarios para llevar a cabo las actividades de nivel básico de prevención de riesgos laborales.</p>
                    
                    <h3>Al finalizar mis estudios, ¿qué puedo hacer?</h3>
                    
                    <ul>     
                        <li><p><b>Trabajar:</b></p></li>
                        
                        <ul>
                            
                            <li><p>Ayudante de montador de antenas receptoras/ televisión satélites.</p></li>
                            
                            <li><p>Ayudante de instalador de equipos y sistemas de comunicación.</p></li>
                            
                            <li><p>Ayudante de instalador de sistemas para transmisión de datos</p></li>
                            
                            <li><p>Ayudante de instalador y reparador de equipos telefónicos y telegráficos.</p></li>
                            
                            <li><p>Ayudante de montador de sistemas microinformáticos.</p></li>
                            
                            <li><p>Ayudante de instalador de sistemas informáticos.</p></li>
                        
                        </ul>
                        
                        <li><p><b>Seguir estudiando:</b></p></li>
                        
                        <ul>
                           
                            <li><p>Un ciclo formativo de grado medio (Este título tendrá preferencia para la admisión a todos los títulos de grado medio de las familias profesionales de Electricidad y Electrónica, Informática y Comunicaciones, Fabricación Mecánica, Instalación y Mantenimiento, Energía y Agua, Industrias Extractivas, Marítimo-Pesquera, Química, Transporte y Mantenimiento de Vehículos, Madera, Mueble y Corcho y Edificación y Obra Civil</p></li>
                        
                        </ul>
                        
                    </ul>
                    
                    <h3>¿Cuáles son las salidas profesionales?</h3>
                    
                    <p>Este profesional ejerce su actividad por cuenta ajena en empresas dedicadas a la comercialización, montaje, mantenimiento y reparación de sistemas microinformáticos, equipos eléctricos o electrónicos y en empresas que utilicen sistemas informáticos, para su gestión.</p>
                    
                    <h3>Plan de formación:</h3>
                    
                    <p align="left">Los módulos profesionales de este ciclo formativo son:</p>
                    
                    <ul>   
                        
                        <li><p>Montaje y mantenimiento de sistemas y componentes informáticos.</p></li>
                        
                        <li><p>Operaciones auxiliares para la configuración y la explotación.</p></li> 
                        
                        <li><p>Equipos eléctricos y electrónicos.</p></li>  
                        
                        <li><p>Instalación y mantenimiento de redes para transmisión de datos.</p></li> 
                        
                        <li><p>Ciencias aplicadas I.</p></li> 
                        
                        <li><p>Ciencias aplicadas II.</p></li>
                        
                        <li><p>Comunicación y sociedad I.</p></li> 
                        
                        <li><p>Comunicación y sociedad II.</p></li>
                        
                        <li><p>Formación en centros de trabajo</p></li>
                        
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