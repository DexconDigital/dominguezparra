<?php require 'variables/variables.php';
$page = "Detalle de Inmueble" ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include 'layout/1archivos_header.php' ?>

    <title> <?php echo $page . ' | ' . $nombre_inmobiliaria ?> </title>
</head>

<body>

    <!-- HEADER -->
    <section>
        <?php include 'layout/3header.php' ?>
    </section>
    <!-- HEADER -->

    <!-- BANNER -->
    <section id="banner" class="margin_top position-relative">

        <div class="imagen">
            <img src="images/banner_nosotros.jpg" alt="">
        </div>
        <div id="fondo_negro"></div>

        <div class="contenido_banner d-flex align-items-center justify-content-center flex-column">
            <h1> Detalle Inmueble </h1>
            <p> <a href="index.php">Inicio</a> / <a href="inmuebles.php">Inmuebles</a> / Detalle de Inmueble </p>
        </div>

    </section>
    <!-- BANNER -->


    <section id="imagenes_inmueble" class="container d-flex mt-5">

        <!-- SECCION IZQUIERDA -->
        <div class="col-8">

            <!-- CARRUSEL DE IMAGENES -->
            <div>
                <!-- IMAGENES -->
                <section class="mt-3" id="slide-detalle">
                    <div class="contenedor-img">
                        <img src="images/casa1.jpg" alt="">
                    </div>
                    <div class="contenedor-img">
                        <img src="images/casa2.jpg" alt="">
                    </div>
                </section>
                <!-- IMAGENES -->

                <!-- MINIATURAS -->
                <section class="vertical-center-4 slider" id="miniaturas">
                    <div class="contenedor-img">
                        <img src="images/casa1.jpg" alt="">
                    </div>

                    <div class="contenedor-img">
                        <img src="images/casa2.jpg" alt="">
                    </div>
                </section>
                <!-- MINIATURAS -->
            </div>
            <!-- CARRUSEL DE IMAGENES -->


            <!-- DESCRIPCION -->
            <div class="mt-5">
                <h4> DESCRIPCION </h4>
                <div class="linea"></div>
            </div>
            <p> *DESCRIPCIÓN* Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus autem suscipit culpa natus quia debitis, consectetur ullam expedita laudantium ex, numquam mollitia? Autem veniam dolore quis, soluta hic in architecto. </p>

            <!-- BOTONES CARACTERISTICAS -->
            
            <!-- BOTONES CARACTERISTICAS -->
        </div>


        <!-- DESCRIPCION -->




        </div>
        <!-- SECCION IZQUIERDA -->

        <!-- SECCION DERECHA -->
        <div class="col-4">

            <!-- ASESOR -->
            <div class="asesor">
                <div>
                    <h4 class="text-center mt-3"> Contacto con el Asesor </h4>
                </div>

                <div class="caja_asesor rounded m-auto w-75 pt-3">
                    <img class="rounded w-100 h-100" src="images/no_image.png" alt="">
                </div>

                <div class="d-flex align-items-center mt-4 mb-2">
                    <i class="verde mr-2 fas fa-user"> </i>
                    <p> Nombre de Asesor </p>
                </div>

                <a href="#" class="d-flex align-items-center my-2">
                    <i class="verde mr-2 fas fa-phone"> </i>
                    <p> Telefono Asesor </p>
                </a>

                <a href="#" class="d-flex align-items-center my-2">
                    <i class="verde mr-2 fas fa-envelope"> </i>
                    <p> Correo </p>
                </a>
            </div>
            <!-- ASESOR -->


            <!-- PROPIEDADES SIMILARES -->
            <div>

            </div>
            <!-- PROPIEDADES SIMILARES -->

        </div>
        <!-- SECCION DERECHA -->

    </section>



















    <!-- FOOTER -->
    <section>
        <?php include 'layout/5footer.php' ?>
    </section>
    <!-- FOOTER -->

    <?php include 'layout/2archivos_footer.php' ?>


    <!-- Carrusel -->
    <script>
        $('#slide-detalle').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: true,
            asNavFor: '#miniaturas'
        });
        $('#miniaturas').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            asNavFor: '#slide-detalle',
            dots: false,
            centerMode: true,
            focusOnSelect: true,
            variableWidth: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                }
            ]
        });
    </script>
    <!-- Carrusel -->

</body>

</html>