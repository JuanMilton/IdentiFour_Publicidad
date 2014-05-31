<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>IdentiFour</title>

        <?php include("template/template_import.php"); ?>
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
                        <li><a href="index.php">Inicio<span class="subheader">Bienvenido</span></a></li>
                        <li class="current-menu-item"><a href="#">Galeria<span class="subheader">Opciones</span></a>
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

        <!-- MAIN -->
        <div id="main">
            <!-- wrapper-main -->
            <div class="wrapper">

                <!-- content -->
                <div id="content">

                    <!-- title -->
                    <div id="page-title">
                        <span class="title">Galeria de Videos</span>
                        <span class="subtitle">Videos</span>
                    </div>
                    <!-- ENDS title -->

                    <!-- gallery-->
                    <ul  >
                        <li class="pink">
                            <video controls><source src="videos/presentacion.mp4"/></video>
                            <br>
                            <span class="subtitle">Ejemplo de Ingreso y Salida de Vehículos sin IDENTIFOUR y con IDENTIFOUR</span>
                        </li>
                    </ul>
                    <!-- ENDS gallery -->

                </div>
                <!-- ENDS content -->
            </div>
            <!-- ENDS wrapper-main -->
        </div>
        <!-- ENDS MAIN -->

        <?php include("template/template_bottom.php"); ?>

    </body>
</html>

