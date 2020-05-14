<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/estilos-inicio.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,400;1,300;1,700&display=swap"
        rel="stylesheet">

        <title>IMIndustriales</title>

</head>

<body background="../img/fondoabstracto.jpg">
    <!--whatsapp-->
    <a class="appwhatsapp"
        href="https://api.whatsapp.com/send?phone=573152845209&text=hola%20estoy%20interesado%20en%20realizar%20una%20cotizaci%C3%B3n&app_absent=">
        <img src="../img/whatsapp.png" alt="whatsapp">
    </a>

    <!--whatsapp-->
    <header>
        <nav>
            <section class="contenedor nav">
                <div class="logo">
                    <a href="../index.php"><img src="../img/imper.jpg" alt=""></a>
                </div>
                <div class="enlaces-header">
                    <a href="../index.php">Inicio</a>
                    <a href="../vistas/servicios.php">Servicios</a>
                    <a href="../vistas/proyectos.php">Proyectos</a>
                    <a href="../vistas/nosotros.php">¿Quienes Somos?</a>
                    <a href="../vistas/contacto.php">Contactenos</a>
                </div>
                <div class="hamburger">
                    <i class="fas fa-bars"></i>
                </div>
            </section>
        </nav>
        <div class="contenedor-nosotros">
            <section class="contenido-nosotros">
                <section class="textos-nosotros">
                    <b>
                        <strong>
                            <P>IMPERMANTENIMIENTOS INDUSTRIALES S.A.S <br>
                                
                                 <br>
                             <br>
                                 Contamos con mas de 20 años de experiencia en la <br>
                                Fabricacion e instalación de pisos industriales, recubrimientos <br>
                                e impermeabilizaciones, asesorías técnicas, consultoria y diseño, <br>
                                construcción de pisos, recubrimientos especiales, <br>
                                pisos arquitectónicos mantenimientos entre otros, que se adaptan <br>
                                perfectamente a las necesidades de los clientes permitiéndonos <br>
                                ofrecer un servicio completo, dando como resultado soluciones <br> personalizadas
                                para cada tipo de cliente.
                        </strong>
                    </b>
                    <br>
                </section>
            </section>
        </div>
    </header>

    <section class="cmision">

        <div class="con-mision">
            <i class="fas fa-award" data-aos="fade-right" data-aos-duration="3000"></i>
            <h2 class="tittle"><strong> Misión</strong></h2>
            <div class="textos-mision">
                <p>
                    Nuestra misión es presentar proyectos de obra civil, Fabricacion e instalación de pisos
                    industriales,
                    recubrimientos e impermeabilizaciones, asesorías técnicas, consultoria y diseño y construcción
                    de pisos,
                    recubrimientos especiales, pisos arquitectónicos mantenimientos, en el ámbito publico y privado,
                    cuya misión
                    es satisfacer las necesidades de nuestros clientes antes, durante y después de finalizado el
                    proyecto, generando
                    relaciones de confianza con los mismos y aportando al desarrollo de nuestro país y de nuestra
                    comunidad.
                </p>

            </div>
        </div>
    </section>

    <section class="cvision">
        <section class="con-vision">
            <i class="far fa-compass" data-aos="fade-right" data-aos-duration="3000"></i>
            <h2 class="tittlev"><strong> Visión</strong></h2>
            <section class="textos-vision">

                <P>Nuestra visión para el año 2022 ser una empresa reconocida a nivel Departamental y Nacional,
                    evolucionando
                    constantemente nuestros servicios basándonos en la capacitación y especialización de nuestro
                    personal,
                    atendiendo las nuevas necesidades de construcción en la sociedad y ofreciendo la mejor calidad y
                    servicio a nuestros clientes.
                </P>
            </section>

        </section>
    </section>

    <!--espacio-->
    <?php include "plantillas/espacio.php" ?>


    <!--contactenos,footer-->

    <div class="contac">

        <h1 class="logo_contac">Contactenos</h1>
        <div class="contac-wrapper">

            <div class="contac-form">


                <form action="../correo.php" method="post">

                    <p>
                        <label for="nombre">Nombre Completo</label>
                        <input type="text" name="nombre" id="nombre" required>
                    </p>

                    <p>
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" required>
                    </p>

                    <p>
                        <label for="phone">Telefono De Contacto</label>

                        <input type="tel" id="phone" name="phone" required>
                    </p>

                    <p>
                        <label for="asunto">Asunto</label>
                        <input type="text" name="asunto" required>
                    </p>

                    <p class="block">
                        <label for="mensaje">Mensaje</label>
                        <textarea name="mensaje" id="" rows="3" required></textarea>

                    </p>

                    <p class="block">
                        <button type="submit">
                            Contactanos
                        </button>
                    </p>
                </form>

            </div>
            <div class="contac-info">

                <h4>Mas Infromacion</h4>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> Cra. 69 #2b-44</li>
                    <li><i class="fas fa-phone"></i> 321-603-3260</li>
                    <li><i class="fas fa-envelope-open-text"></i> ghimpermantenimientosind@gmail.com</li>

                </ul>

                <p>Estamos ubicados en la ciudad de Bogotá pero ofrecemos nuestros servicios a todo el país.</p>


                <p>Impermantenimientos Industriales S.A.S</p>

            </div>

        </div>

    </div>

    <!--espacio-->
    <aside>
        <section>

        </section>
        <section>

        </section>
    </aside>

    <footer>

        <div class="ParFooter">
            <img id="logo" src="../img/imper.jpg" width="90%" alt="">
        </div>
        <div class="ParFooter">
        <h4>Servicios</h4>
        <a href="#">Aplicacion De Pisos Industriales</a>
        <a href="#">Instalacion de membrana pvc</a>
        <a href="#">Venta de productos de limpieza</a>
        </div>
        <div class="ParFooter">
            <h4>Encuentranos En</h4>
            <a href="#">Bogotá</a>
            <a href="#">Ibagué</a>
            <a href="#">Cartagena</a>
            <a href="#">Neiva</a>
        </div>
        <div class="ParFooter">
            <h4>Redes sociales</h4>
            <div class="social-media">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-youtube"></i>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://kit.fontawesome.com/2b7372c116.js" crossorigin="anonymous"></script>
    <script src="../js/main.js"></script>
</body>

</html>