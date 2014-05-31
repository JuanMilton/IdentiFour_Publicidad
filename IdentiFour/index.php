<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>IdentiFour</title>

        <?php include("template/template_import.php"); ?>

        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
    </head>
    <body class="home">

        <?php include("template/template_header.php"); ?>

        <!-- Menu -->
        <div id="menu">

            <!-- ENDS menu-holder -->
            <div id="menu-holder">
                <!-- wrapper-menu -->
                <div class="wrapper">
                    <!-- Navigation -->
                    <ul id="nav" class="sf-menu">
                        <li class="current-menu-item"><a href="index.php">Inicio<span class="subheader">Bienvenido</span></a></li>
                        <li><a href="#">Galeria<span class="subheader">Opciones</span></a>
                            <ul>
                                <li><a href="imagenes.php"><span> Imagenes</span></a></li>
                                <li><a href="videos.php"><span> Videos</span></a></li>
                            </ul>
                        </li>
                        <li><a href="descargas.php">Descargas<span class="subheader">Software para la Tranca</span></a></li>
                        <li><a href="contactos.php">Registro<span class="subheader">Registro</span></a></li>
                        <li><a href="#">Soporte<span class="subheader">Ayuda</span></a>
                            <ul>
                                <li><a href="mu.php"><span> Manual de Usuario</span></a></li>
                                <li><a href="mi.php"><span> Manual de Instalación</span></a></li>
                                <li><a href="vi.php"><span> Videos de Instalación</span></a></li>
                                <li><a href="recursos.php"><span> Recursos</span></a></li>
                            </ul>
                        </li>
                        <li><a href="http://192.168.1.107:8680/scav" target="_blank">LogIn<span class="subheader">Administración</span></a></li>
                        <li><a href="equipo.php">Nosotros<span class="subheader">Personal</span></a></li>
                        
                    </ul>
                    <!-- Navigation -->
                </div>
                <!-- wrapper-menu -->
            </div>
            <!-- ENDS menu-holder -->
        </div>
        <!-- ENDS Menu -->

        <!-- Slider -->
        <div id="slider-block">
            <div id="slider-holder">
                <div id="slider">
                    <a href="#"><img src="images/01.jpg" title="Los vehículos llegan al entorno." alt="" /></a>
                    <a href="#"><img src="images/02.jpg" title="Se obtiene el RFID del vehículo" alt="" /></a>
                    <a href="#"><img src="images/03.jpg" title="El sistema IDENTIFOUR los reconoce." alt="" /></a>
                    <a href="#"><img src="images/04.jpg" title="Se levanta la tranca para que pueda pasar el vehículo" alt="" /></a>
                    <a href="#"><img src="images/05.jpg" title="IDENTIFOUR - FirstOneSoft" alt="" /></a>
                </div>
            </div>
        </div>
        <!-- ENDS Slider -->

        <!-- MAIN -->
        <div id="main">
            <!-- wrapper-main -->
            <div id="fb-root"></div>
            <div class="wrapper">

                <!-- content -->
                <div id="content">

                    <!-- Information  -->
                    <!--<div class="plain-text">-->
                    <p>
                    <h3>Sistema de Control de Acceso Vehicular "IDENTIFOUR"</h3>
<!--                    <span class="pullquote-right">
                        <div class="fb-like-box" data-href="https://www.facebook.com/pages/Cl%C3%ADnica-Dental-Las-Condes/541451155934194" data-width="The pixel width of the plugin" data-height="The pixel height of the plugin" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
                    </span>-->
                    <p></p>
                    <p><b>"IDENTIFOUR"</b> es un sistema de información que se encarga de la gestión de información respecto al acceso vehicular en un entorno cerrado. Además de realizar la gestión de propietarios, vehículos, guardias, con sus respectivos informes que se pueden obtener de este sistema como reportes.</p>
                    <p>El <b>Sistema de Control de Acceso Vehicular "IDENTIFOUR"</b> utiliza tecnología de señales inalámbricas conocidas como señales RF (Radio Frecuencia), para la detección automática de los motorizados</p>
                    <p>“IdentiFour” permite administrar información de los propietarios, visitas, vehículos, además de gestionar información acerca del entorno de trabajo, como trancas y áreas; este sistema emite notificaciones, alertas, avisos a diferentes niveles para los propietarios de vehículos, así como también para los diferentes guardias existentes, también contempla la generación de reportes de manera dinámica, como resultados de todo el control de acceso vehicular al entorno.</p>
                    </p>
                    <!--</div>-->
                    <!-- ENDS Information -->

                </div>
                <!-- ENDS content -->
            </div>
            <!-- ENDS wrapper-main -->
        </div>
        <!-- ENDS MAIN -->

        <?php include("template/template_bottom.php"); ?>

    </body>
</html>
