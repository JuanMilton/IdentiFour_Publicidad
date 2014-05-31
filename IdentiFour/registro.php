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
                        <li ><a href="index.php">Inicio<span class="subheader">Bienvenido</span></a></li>
                        <li><a href="#">Galeria<span class="subheader">Opciones</span></a>
                            <ul>
                                <li><a href="imagenes.php"><span> Imagenes</span></a></li>
                                <li><a href="videos.php"><span> Videos</span></a></li>
                            </ul>
                        </li>
                        <li><a href="descargas.php">Descargas<span class="subheader">Software para la Tranca</span></a></li>
                        <li class="current-menu-item"><a href="contactos.php">Registro<span class="subheader">Registro</span></a></li>
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

  
        <h2>
        <?php
            // Connecting, selecting database
            $dbconn = pg_connect("host=192.168.1.107 dbname=db_scav user=postgres password=postgres") or die('No se pudo conectar: ' . pg_last_error());

            $query = pg_query($dbconn, "SELECT COUNT(*) AS TOTAL FROM administrador_entorno WHERE email = '".$_POST['email']."';");
            $total = 0;
            while($row = pg_fetch_array($query)){
                $total = $row["total"];
            }
            if ($total == 0)
            {
                pg_query($dbconn, "INSERT INTO administrador_entorno(ci,nombres,apellidos,email,password) VALUES('".$_POST['ci']."', '".$_POST['nombre']."', '".$_POST['apellido']."', '".$_POST['email']."', '".$_POST['pass']."');");
                pg_query($dbconn, "INSERT INTO entorno(nombre,ubicacion,licencia_activa,ci) VALUES('".$_POST['entorno']."', '".$_POST['ubicacion']."', false, '1');");
                
                echo 'Su registro se ha realizado correctamente';
            }else
                echo 'El correo electrónico ya se encuentra registrado';


            // Closing connection
            pg_close($dbconn);
        ?>
        </h2>
        
        <!-- ENDS MAIN -->
        <div style="position: absolute; bottom: 0; width: 100%;">
        <?php include("template/template_bottom.php"); ?>
        <div>
    </body>
</html>




