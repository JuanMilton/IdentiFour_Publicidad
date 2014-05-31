<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>IdentiFour</title>

        <?php include("template/template_import.php"); ?>

        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
        <script>
            // This example adds a marker to indicate the position
            // of Bondi Beach in Sydney, Australia
            function initialize() {
                var mapOptions = {
                    zoom: 15,
                    center: new google.maps.LatLng(-17.774067, -63.195269),
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                var map = new google.maps.Map(document.getElementById('map-canvas'),
                        mapOptions);

                var image = 'img/marker.png';
                var myLatLng = new google.maps.LatLng(-17.774067, -63.195269);
                var beachMarker = new google.maps.Marker({
                    position: myLatLng,
                    map: map,
                    icon: image
                });
            }

            google.maps.event.addDomListener(window, 'load', initialize);

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
                        <li><a href="index.php">Inicio<span class="subheader">Bienvenido</span></a></li>
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

        <!-- MAIN -->
        <div id="main">
            <!-- wrapper-main -->
            <div class="wrapper">

                <!-- content -->
                <div id="content">

                    <!-- title -->
                    <div id="page-title">
                        <span class="title">Registro</span>
                        <span class="subtitle">Registro de Entornos y Administrador.</span>
                    </div>
                    <!-- ENDS title -->

                    <!-- column (left)-->
                    <div class="one-column">
                        <!-- form -->
                        
                        <script type="text/javascript" src="js/form-validation.js"></script>
                        <form id="contactForm" action="registro.php"  method="post">
                            <fieldset>
                                <h3>Información del Administrador</h3>
                                
                                <div>
                                    <label>Nombres (*)</label>
                                    <input name="nombre"  id="nombre" type="text" class="form-poshytip" title="Ingrese su nombre completo" />
                                </div>
                                
                                <div>
                                    <label>Apellidos (*)</label>
                                    <input name="apellido"  id="apellido" type="text" class="form-poshytip" title="Ingrese su apellido completo" />
                                </div>
                                
                                <div>
                                    <label>CI (*)</label>
                                    <input name="ci"  id="ci" type="text" class="form-poshytip" title="Ingrese su número de documento de identidad completo" />
                                </div>
                                
                                <div>
                                    <label>Correo Electrónico (*)</label>
                                    <input name="email"  id="email" type="text" class="form-poshytip" title="Ingrese su email" />
                                </div>
                                
                                <div>
                                    <label>Contraseña (*)</label>
                                    <input name="pass"  id="pass" type="password" class="form-poshytip" title="Ingrese su contraseña para acceder al sistema" />
                                </div>
                                
                                <br/>
                                <br/>
                                
                                <h3>Información del Entorno</h3>
                                
                                <div>
                                    <label>Nombre (*)</label>
                                    <input name="entorno"  id="entorno" type="text" class="form-poshytip" title="Ingrese el nombre del entorno completo" />
                                </div>
                                
                                <div>
                                    <label>Ubicación</label>
                                    <input name="ubicacion"  id="ubicacion" type="text" class="form-poshytip" title="Ingrese la ubicación del entorno" />
                                </div>
                                

<!--                                 send mail configuration 
                                <input type="hidden" value="bismarck.villca@hotmail.com" name="to" id="to" />
                                <input type="hidden" value="bismarck.villca@hotmail.com" name="from" id="from" />
                                <input type="hidden" value="Pagina Web Clinica Dental Las Condes" name="subject" id="subject" />
                                <input type="hidden" value="send-mail.php" name="sendMailUrl" id="sendMailUrl" />
                                 ENDS send mail configuration -->

                            <p><input style="width: 150px;" type="submit" value="REGISTRAR" name="submit" id="submit" /></p>
                            </fieldset>
                            <p id="error" class="warning">Message</p>
                        </form>
                        <p id="success" class="success">Muchas Gracias por su Comentario.</p>
                        <!-- ENDS form -->
                    </div>
                    <!-- ENDS column -->

                    <!-- column (right)-->
                    <div class="one-column">
                        <!-- content -->
                        <div id="map-canvas" style="width:438px; height:267px;"></div>
                        <h6>FirstoneSoft - IdentiFour</h6>
                        <p>Si tiene algun problema con el registro o activación de la licencia puede ponerse en contacto con la empresa. Puede enviar un mensaje de correo electrónico a <b>jmcm578@gmail.com</b>.</p>
                        <p>Santa Cruz de la Sierra - Bolivia<br/>
                            Av. Bush y Segundo Anillo<br/>
                            Telf. 77370309 <br/>
                            <a href="jmcm578@gmail.com">jmcm578@gmail.com</a></p>
                        <!-- ENDS content -->
                    </div>
                    <!-- ENDS column -->

                </div>
                <!-- ENDS content -->
            </div>
            <!-- ENDS wrapper-main -->
        </div>
        <!-- ENDS MAIN -->

        <?php include("template/template_bottom.php"); ?>

    </body>
</html>

