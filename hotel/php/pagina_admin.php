<?php 

session_start();

if(!isset($_SESSION['usuario'])){
    echo '
        <script>
        alert ("Debes iniciar sesión para acceder");
        window.location = "../login.html";
        </script>
        ';

        session_destroy();
        die();
}

session_destroy();
?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>ADMINISTRACIÓN NOOR</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/main_admin.css" type="text/css">
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    <link rel="icon" href="images/mandala.png" type="image/png">
</head>

<body>

    <!-- header -->
    <header class="header" id="header">
        <div class="head-top">
            <div class="site-name">
                <span><img src="../images/logo_hotel.png" alt="logo hotel" height="80px"></span>
            </div>
            <div class="site-nav">
                <span id="nav-btn">MENU <i class = "fas fa-bars"></i></span>
            </div>
        </div>

        <div class="head-bottom flex">
            <h2>PAGINA PRINCIPAL ADMINISTRADORES</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto est quos veniam impedit numquam itaque voluptatum, dicta asperiores accusamus, eligendi neque ut incidunt, modi harum molestiae atque natus officia minima.</p>
            
        </div>
    </header>
    <!-- end of header -->

    <!-- side navbar -->
    <div class="sidenav" id="sidenav">
        <span class="cancel-btn" id="cancel-btn">
                <i class = "fas fa-times"></i>
            </span>

        <ul class="navbar">
            <li><a href="#header">Inicio</a></li>
            <li><a href="#habs">Habitaciones</a></li>
            <li><a href="#desayunos">Desayunos</a></li>
        </ul>

        <button class="btn log-out" onclick="location.href='php/cerrar_sesion.php'" method="post">Cerrar sesión</button>
    </div>
    <!-- end of side navbar -->

    <!-- fullscreen modal -->
    <div id="modal"></div>
    <!-- end of fullscreen modal -->

    <section class="reservas_habs" id="habs">
        <div class="title">
            <h2>RESERVAS DE HABITACIONES</h2>
        </div>
        <div class="contenedor">
            <table style="border: 1px solid #000; width: 100%;">
                <tr style="font-weight: bold; text-align:left; border-bottom: 1px solid #000;">
                <td >id</td>
                <td >Check-In</td>
                <td >Check-Out</td>
                <td >Adultos</td>
                <td >Niños</td>
                <td >Tipo de Habitación</td>
                <td >Cantidad de habitaciones</td>
                <td >Nombre</td>
                <td >Teléfono</td>
                <td >Correo</td>
                <td >Comentarios</td>
                </tr>
            
                
                <?php
                include 'conexion_be.php';
                $query="SELECT * FROM habitaciones";
                $result= mysqli_query($conexion, $query);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
       
       <tr style="text-align:left; border: 1px solid #000;">
                    <td style="border: 1px solid #000;"><?php echo $mostrar['id'] ?></td>
                    <td style="border: 1px solid #000;"><?php echo $mostrar['ingreso'] ?></td>
                    <td style="border: 1px solid #000;"><?php echo $mostrar['salida'] ?></td>
                    <td style="border: 1px solid #000;"><?php echo $mostrar['adultos'] ?></td>
                    <td style="border: 1px solid #000;"><?php echo $mostrar['ninos'] ?></td>
                    <td style="border: 1px solid #000;"><?php echo $mostrar['tipo_hab'] ?></td>
                    <td style="border: 1px solid #000;"><?php echo $mostrar['cantidad'] ?></td>
                    <td style="border: 1px solid #000;"><?php echo $mostrar['nombre'] ?></td>
                    <td style="border: 1px solid #000;"><?php echo $mostrar['telefono'] ?></td>
                    <td style="border: 1px solid #000;"><?php echo $mostrar['correo'] ?></td>
                    <td style="border: 1px solid #000;"><?php echo $mostrar['comentarios'] ?></td>
                    </tr>
                    
                    <?php
                        }
                        ?>
                        
            </table>
            <br>
        </div>
    </section>


    <section class="reservas_desayuno" id="desayunos">
        <div class="title">
            <h2>RESERVAS DE DESAYUNOS</h2>
        </div>
        <div class="contenedor">
            <table style="border: 1px solid #000; width: 100%;">
                <tr style="font-weight: bold; text-align:left; border-bottom: 1px solid #000;">
                <td >id</td>
                <td >Fecha</td>
                <td >Hora</td>
                <td >Cantidad</td>
                <td >Nombre</td>
                <td >Correo</td>
                <td >Comentarios</td>
                </tr>
            
                
                <?php
                include 'conexion_be.php';
                $query="SELECT * FROM desayunos";
                $result= mysqli_query($conexion, $query);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
       
       <tr style="text-align:left; border: 1px solid #000;">
                    <td style="border: 1px solid #000;"><?php echo $mostrar['id'] ?></td>
                    <td style="border: 1px solid #000;"><?php echo $mostrar['fecha'] ?></td>
                    <td style="border: 1px solid #000;"><?php echo $mostrar['hora'] ?></td>
                    <td style="border: 1px solid #000;"><?php echo $mostrar['cantidad'] ?></td>
                    <td style="border: 1px solid #000;"><?php echo $mostrar['nombre'] ?></td>
                    <td style="border: 1px solid #000;"><?php echo $mostrar['correo'] ?></td>
                    <td style="border: 1px solid #000;"><?php echo $mostrar['comentarios'] ?></td>
                    </tr>
                    
                    <?php
                        }
                        ?>
                        
            </table>
            <br>
        </div>
    </section>







    <!-- footer -->
    <footer class="footer">
        <div class="footer-container">
            <div>
                <h2>Sobre nosotros </h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque sapiente mollitia doloribus provident? Eos quisquam aliquid vel dolorum, impedit culpa.</p>
                <ul class="social-icons">
                    <li class="flex">
                        <a href="https://twitter.com/?lang=es" target="blank"><i class="fa fa-twitter fa-2x"></i></a>
                    </li>
                    <li class="flex">
                        <a href="https://www.facebook.com/" target="blank"><i class="fa fa-facebook fa-2x"></i></a>
                    </li>
                    <li class="flex">
                        <a href="https://www.instagram.com/?hl=es" target="blank"> <i class="fa fa-instagram fa-2x"></i></a>
                    </li>
                </ul>
            </div>

            <div>
                <h2>Menú</h2>
                <a href="#header">Inicio</a>
                <a href="#habs">Habitaciones</a>
                <a href="#desayunos">Desayunos</a>
               
            </div>


            <div>
                <h2>Contáctenos</h2>
                <div class="contact-item">
                    <span>
                            <i class = "fas fa-map-marker-alt"></i>
                        </span>
                    <span>
                            001 dirección falsa, Guatemala, Guatemala
                        </span>
                </div>
                <div class="contact-item">
                    <span>
                            <i class = "fas fa-phone-alt"></i>
                        </span>
                    <span>
                            +502 1234 56789
                        </span>
                </div>
                <div class="contact-item">
                    <span>
                            <i class = "fas fa-envelope"></i>
                        </span>
                    <span>
                            info@hotel.noor.gt
                        </span>
                </div>
            </div>
        </div>
    </footer>
    <!-- end of footer -->

    <script src="../JS/admins.js"></script>
</body>

</html>