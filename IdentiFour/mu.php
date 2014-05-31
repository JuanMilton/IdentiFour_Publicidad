<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>IdentiFour</title>

        <?php include("template/template_import.php"); ?>
    </head>
    <body class="home">

        <?php include("template/template_header.php"); ?>

        <div id="menu">

            <!-- ENDS menu-holder -->
            <div id="menu-holder">
                <!-- wrapper-menu -->
                <div class="wrapper">
                    <!-- Navigation -->
                    <ul id="nav" class="sf-menu">
                        <li><a href="index.php">Inicio<span class="subheader">Bienvenido</span></a></li>
                        <li><a href="#">Galeria<span class="subheader">Opciones</span></a>
                            <ul>
                                <li><a href="imagenes.php"><span> Imagenes</span></a></li>
                                <li><a href="videos.php"><span> Videos</span></a></li>
                            </ul>
                        </li>
                        <li><a href="descargas.php">Descargas<span class="subheader">Software para la Tranca</span></a></li>
                        <li><a href="contactos.php">Registro<span class="subheader">Registro</span></a></li>
                        <li class="current-menu-item"><a href="#">Soporte<span class="subheader">Ayuda</span></a>
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

        <div id="main">
            <!-- wrapper-main -->
            <div class="wrapper">

                <!-- content -->
                <div id="content">
                    <div id="page-title">
                        <span class="title">Maloclusión</span>
                    </div>
                    <!-- Information  -->
                    <div>
                        <div class="plain-text">
                            <h3>Clínica Dental Medic “LAS CONDES”</h3>
                            <p></p>
                            <p>Es la causa de varios problemas, tanto en los dientes como en la articulación o el periodonto. También ocurre cuando un puente o una corona se fracturan.</p>
                            <p>Los síntomas o signos pueden ser los chasquidos, el dolor articular, las crepitaciones o la trabazón. Además, de dolor de cabeza, espalda, fatiga, dolor de espalda o de nariz.</p>
                            <p>Entre los tratamientos más utilizados se encuentran los ajustes de mordida y de contacto entre dientes (tanto naturales como artificiales), ingesta de relajantes, cambios de dieta y colocación de aditamentos fijos o removibles.</p>
                        </div>
                    </div>
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
