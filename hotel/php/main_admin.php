<?php 

session_start();

if(!isset($_SESSION['usuario'])){
    echo '
        <script>
        alert ("Debes iniciar sesión para acceder");
        window.location = "login.html";
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
    <link rel="stylesheet" href="main_admin.css" type="text/css">
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    <link rel="icon" href="images/mandala.png" type="image/png">
</head>

<body>

    <!-- header -->
    <header class="header" id="header">
        <div class="head-top">
            <div class="site-name">
                <span><img src="images/logo_hotel.png" alt="logo hotel" height="80px"></span>
            </div>
            <div class="site-nav">
                <span id="nav-btn">MENU <i class = "fas fa-bars"></i></span>
            </div>
        </div>

        <div class="head-bottom flex">
            <h2>PAGINA PRINCIPAL ADMINISTRADORES</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto est quos veniam impedit numquam itaque voluptatum, dicta asperiores accusamus, eligendi neque ut incidunt, modi harum molestiae atque natus officia minima.</p>
            <button type="button" class="head-btn" onclick="location.href='login.html'">INICIO</button>
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
            <li><a href="#services">Servicios</a></li>
            <li><a href="#rooms">Habitaciones</a></li>
            <li><a href="#customers">Usuarios</a></li>
        </ul>

        <button class="btn log-out" onclick="location.href='php/cerrar_sesion.php'" method="post">Cerrar sesión</button>
    </div>
    <!-- end of side navbar -->

    <!-- fullscreen modal -->
    <div id="modal"></div>
    <!-- end of fullscreen modal -->

    <!-- body content  -->
    <section class="services sec-width" id="services">
        <div class="title">
            <h2>Servicios</h2>
        </div>
        <div class="services-container">
            <!-- single service -->
            <article class="service">
                <div class="service-icon">
                    <span>
                            <i class = "fas fa-utensils"></i>
                        </span>
                </div>
                <div class="service-content">
                    <h2>Servicios de desayunos</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias blanditiis tempore officia accusamus asperiores. Illum maxime eligendi necessitatibus laudantium iste nisi pariatur doloremque ut illo similique voluptatum enim distinctio
                        perferendis, ad ipsam aspernatur omnis rem autem ex, reiciendis corporis suscipit!</p>
                    <button type="button" class="btn">Reservar</button>
                </div>
            </article>
            <!-- end of single service -->
            <!-- single service -->
            <article class="service">
                <div class="service-icon">
                    <span>
                            <i class = "fas fa-swimming-pool"></i>
                        </span>
                </div>
                <div class="service-content">
                    <h2>Piscina y áreas recreativas</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias blanditiis tempore officia accusamus asperiores. Illum maxime eligendi necessitatibus laudantium iste nisi pariatur doloremque ut illo similique voluptatum enim distinctio
                        perferendis, ad ipsam aspernatur omnis rem autem ex, reiciendis corporis suscipit!</p>
                </div>
            </article>
            <!-- end of single service -->
            <!-- single service -->
            <article class="service">
                <div class="service-icon">
                    <span>
                            <i class = "fas fa-car"></i>
                        </span>
                </div>
                <div class="service-content">
                    <h2>Alquiler de vehículos</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias blanditiis tempore officia accusamus asperiores. Illum maxime eligendi necessitatibus laudantium iste nisi pariatur doloremque ut illo similique voluptatum enim distinctio
                        perferendis, ad ipsam aspernatur omnis rem autem ex, reiciendis corporis suscipit!</p>
                    <button type="button" class="btn">Reservar</button>
                </div>
            </article>
            <!-- end of single service -->
            <!-- single service -->
            <article class="service">
                <div class="service-icon">
                    <span>
                            <i class = "fas fa-bus"></i>
                        </span>
                </div>
                <div class="service-content">
                    <h2>Traslados</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias blanditiis tempore officia accusamus asperiores. Illum maxime eligendi necessitatibus laudantium iste nisi pariatur doloremque ut illo similique voluptatum enim distinctio
                        perferendis, ad ipsam aspernatur omnis rem autem ex, reiciendis corporis suscipit!</p>
                    <button type="button" class="btn">Reservar</button>
                </div>
            </article>
            <!-- end of single service -->
        </div>
    </section>

    <div class="book">
        <form class="book-form">
            <div class="form-item">
                <label for="checkin-date">Fecha de llegada: </label>
                <input type="date" id="chekin-date">
            </div>
            <div class="form-item">
                <label for="checkout-date">Fecha de salida: </label>
                <input type="date" id="chekout-date">
            </div>
            <div class="form-item">
                <label for="adult">Adultos: </label>
                <input type="number" min="1" value="1" id="adult">
            </div>
            <div class="form-item">
                <label for="children">Niños: </label>
                <input type="number" min="0" value="0" id="children">
            </div>
            <div class="form-item">
                <label for="rooms">Habitaciones: </label>
                <input type="number" min="1" value="1" id="rooms">
            </div>
            <div class="form-item">
                <input type="submit" class="btn" value="Reserva ahora">
            </div>
        </form>
    </div>

    <section class="rooms sec-width" id="rooms">
        <div class="title">
            <h2>rooms</h2>
        </div>
        <div class="rooms-container">
            <!-- single room -->
            <article class="room">
                <div class="room-image">
                    <img src="images/img1.jpg" alt="room image">
                </div>
                <div class="room-text">
                    <h3>Habitación sencilla</h3>
                    <ul>
                        <li>
                            <i class="fas fa-arrow-alt-circle-right"></i> Lorem ipsum dolor sit amet.
                        </li>
                        <li>
                            <i class="fas fa-arrow-alt-circle-right"></i> Lorem ipsum dolor sit amet.
                        </li>
                        <li>
                            <i class="fas fa-arrow-alt-circle-right"></i> Lorem ipsum dolor sit amet.
                        </li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus exercitationem repellendus maxime ullam tempore architecto provident unde expedita quam beatae, dolore eligendi molestias sint tenetur incidunt voluptas. Unde corporis
                        qui iusto vitae. Aut nesciunt id iste, cum esse commodi nemo?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla corporis quasi officiis cumque, fugiat nostrum sunt, tempora animi dicta laborum beatae ratione doloremque. Delectus odio sit eius labore, atque quo?</p>
                    <p class="rate">
                        <span>Q.200.00 /</span> Por noche
                    </p>
                    <button type="button" class="btn">Reservar</button>
                </div>
            </article>
            <!-- end of single room -->
            <!-- single room -->
            <article class="room">
                <div class="room-image">
                    <img src="images/img2.jpg" alt="room image">
                </div>
                <div class="room-text">
                    <h3>Habitación doble</h3>
                    <ul>
                        <li>
                            <i class="fas fa-arrow-alt-circle-right"></i> Lorem ipsum dolor sit amet.
                        </li>
                        <li>
                            <i class="fas fa-arrow-alt-circle-right"></i> Lorem ipsum dolor sit amet.
                        </li>
                        <li>
                            <i class="fas fa-arrow-alt-circle-right"></i> Lorem ipsum dolor sit amet.
                        </li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus exercitationem repellendus maxime ullam tempore architecto provident unde expedita quam beatae, dolore eligendi molestias sint tenetur incidunt voluptas. Unde corporis
                        qui iusto vitae. Aut nesciunt id iste, cum esse commodi nemo?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla corporis quasi officiis cumque, fugiat nostrum sunt, tempora animi dicta laborum beatae ratione doloremque. Delectus odio sit eius labore, atque quo?</p>
                    <p class="rate">
                        <span>Q.300.00 /</span> Por noche
                    </p>
                    <button type="button" class="btn">Reservar</button>
                </div>
            </article>
            <!-- end of single room -->
            <!-- single room -->
            <article class="room">
                <div class="room-image">
                    <img src="images/img3.jpg" alt="room image">
                </div>
                <div class="room-text">
                    <h3>Habitación triple</h3>
                    <ul>
                        <li>
                            <i class="fas fa-arrow-alt-circle-right"></i> Lorem ipsum dolor sit amet.
                        </li>
                        <li>
                            <i class="fas fa-arrow-alt-circle-right"></i> Lorem ipsum dolor sit amet.
                        </li>
                        <li>
                            <i class="fas fa-arrow-alt-circle-right"></i> Lorem ipsum dolor sit amet.
                        </li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus exercitationem repellendus maxime ullam tempore architecto provident unde expedita quam beatae, dolore eligendi molestias sint tenetur incidunt voluptas. Unde corporis
                        qui iusto vitae. Aut nesciunt id iste, cum esse commodi nemo?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla corporis quasi officiis cumque, fugiat nostrum sunt, tempora animi dicta laborum beatae ratione doloremque. Delectus odio sit eius labore, atque quo?</p>
                    <p class="rate">
                        <span>Q.300.00 /</span> Por noche
                    </p>
                    <button type="button" class="btn">Reservar</button>
                </div>
            </article>
            <!-- end of single room -->
            <!-- single room -->
            <article class="room">
                <div class="room-image">
                    <img src="images/img1.jpg" alt="room image">
                </div>
                <div class="room-text">
                    <h3>Habitación cuádruple</h3>
                    <ul>
                        <li>
                            <i class="fas fa-arrow-alt-circle-right"></i> Lorem ipsum dolor sit amet.
                        </li>
                        <li>
                            <i class="fas fa-arrow-alt-circle-right"></i> Lorem ipsum dolor sit amet.
                        </li>
                        <li>
                            <i class="fas fa-arrow-alt-circle-right"></i> Lorem ipsum dolor sit amet.
                        </li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus exercitationem repellendus maxime ullam tempore architecto provident unde expedita quam beatae, dolore eligendi molestias sint tenetur incidunt voluptas. Unde corporis
                        qui iusto vitae. Aut nesciunt id iste, cum esse commodi nemo?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla corporis quasi officiis cumque, fugiat nostrum sunt, tempora animi dicta laborum beatae ratione doloremque. Delectus odio sit eius labore, atque quo?</p>
                    <p class="rate">
                        <span>Q.400.00 /</span> Por noche
                    </p>
                    <button type="button" class="btn">Reservar</button>
                </div>
            </article>
            <!-- end of single room -->
        </div>
    </section>


    <section class="customers" id="customers">
        <div class="sec-width">
            <div class="title">
                <h2>Reseñas</h2>
            </div>
            <div class="customers-container">
                <!-- single customer -->
                <div class="customer">
                    <div class="rating">
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "far fa-star"></i></span>
                    </div>
                    <h3>¡Lo amamos!</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat beatae veritatis provident eveniet praesentium veniam cum iusto distinctio esse, vero est autem, eius optio cupiditate?</p>
                    <img src="images/cus1.jpg" alt="customer image">
                    <span>Jhon & Lindsay, UK</span>
                </div>
                <!-- end of single customer -->
                <!-- single customer -->
                <div class="customer">
                    <div class="rating">
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "far fa-star"></i></span>
                    </div>
                    <h3>Una experiencia relajante</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat beatae veritatis provident eveniet praesentium veniam cum iusto distinctio esse, vero est autem, eius optio cupiditate?</p>
                    <img src="images/cus2.jpg" alt="customer image">
                    <span>María Torres, Guatemala</span>
                </div>
                <!-- end of single customer -->
                <!-- single customer -->
                <div class="customer">
                    <div class="rating">
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "far fa-star"></i></span>
                    </div>
                    <h3>Buen lugar para descansar</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat beatae veritatis provident eveniet praesentium veniam cum iusto distinctio esse, vero est autem, eius optio cupiditate?</p>
                    <img src="images/cus3.jpg" alt="customer image">
                    <span>Lucas & Carlo, Argentina</span>
                </div>
                <!-- end of single customer -->
            </div>
        </div>
    </section>
    <!-- end of body content -->

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
                <a href="#rooms">Habitaciones</a>
                <a href="#customers">Reseñas</a>
                <a href="#services">Servicios</a>
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

    <script src="admins.js"></script>
</body>

</html>