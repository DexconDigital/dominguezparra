<?php require 'variables/variables.php';
require 'controllers/indexController.php';
$page = "Inicio" ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include 'layout/1archivos_header.php' ?>
    <link rel="stylesheet" href="css/rangos.css">

    <title> <?php echo $page . ' | ' . $nombre_inmobiliaria ?> </title>
</head>

<body>

    <!-- HEADER -->
    <section>
        <?php include 'layout/3header.php' ?>
    </section>
    <!-- HEADER -->

    <!-- CARRUSEL PRINCIPAL -->
    <section id="carrusel_imagenes">
        <div id="carouselExampleControls" class="margin_top carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/slide_1.jpg" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/slide_2.jpg" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/slide_3.jpg" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon1" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon1" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!-- CARRUSEL PRINCIPAL -->

    <!-- BUSCADOR -->
    <section id="buscador">
        <?php include 'layout/4buscador.php' ?>
    </section>
    <!-- BUSCADOR -->

    <!-- PROPIEDADES DESTACADAS -->
    <section id="inmuebles2" style="padding-bottom:100px;" class="my-5 container">

        <h2 class="text-center mb-5"> Inmuebles Destacados </h2>

        <div class=" d-flex align-items-start justify-content-center flex-wrap">

            <?php
            if (is_array($api)) {
                inmuebles_destacados($api);
            } else {
                echo '<h2 class="text-center" >No tiene Inmuebles Destacados</h2>';
            }
            ?>

        </div>

    </section>
    <!-- PROPIEDADES DESTACADAS -->


    <!-- ASESORES -->
    <div id="carrusel2" class="carousel slide" data-ride="carousel">

        <h2 class="text-center mb-5"> Nuestros Asesores </h2>

        <div class="carousel-inner">

            <!-- PRIMER TRIO DE ASESORES -->
            <div class="carousel-item active">
                <section id="asesores">

                    <div class="container d-flex">

                        <!-- ASESOR -->
                        <div class="col-4">
                            <a href="#">
                                <div class="carta d-flex flex-column">

                                    <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->
                                    <div clas="text-break">
                                        <!-- IMAGEN ASESOR -->
                                        <div class="imagen">
                                            <img class="w-100" src="images/asesor1.png" class="card-img-top" alt="...">
                                        </div>
                                        <!-- IMAGEN ASESOR -->

                                        <!-- TEXTO ANIMADO -->
                                        <p class="texto-animado px-2 mr-3 mt-4 text-break"> INFORMACIÓN EXTRA DEL ASESOR Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quasi ipsam eligendi sunt distinctio a voluptatem deleniti quae sed cum. </p>
                                        <!-- TEXTO ANIMADO -->
                                    </div>
                                    <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->


                                    <div class="caja_texto position-relative d-flex align-items-center justify-content-center">
                                        <h4 class="text-center font-weight-bold"> Nombre de Asesor </h4>
                                    </div>

                                </div>
                            </a>

                            <div class="position-absolute rounded border caja_verde d-flex align-items-center justify-content-center">

                                <a class="mr-2" href="mailto:ktlaboral@hotmail.com"><i class="fas fa-envelope"> </i></a>
                                <a class="mr-2" href="tel:311123123"> <i class="fas fa-phone"></i> </a>
                                <a class="mr-2" href="#"> <i class="fab fa-whatsapp"></i> </a>
                            </div>

                        </div>
                        <!-- ASESOR -->

                        <!-- ASESOR -->
                        <div class="col-4">
                            <a href="#">
                                <div class="carta d-flex flex-column">

                                    <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->
                                    <div clas="text-break">
                                        <!-- IMAGEN ASESOR -->
                                        <div class="imagen">
                                            <img class="w-100" src="images/asesor2.png" class="card-img-top" alt="...">
                                        </div>
                                        <!-- IMAGEN ASESOR -->

                                        <!-- TEXTO ANIMADO -->
                                        <p class="texto-animado px-2 mr-3 mt-4 text-break"> INFORMACIÓN EXTRA DEL ASESOR Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quasi ipsam eligendi sunt distinctio a voluptatem deleniti quae sed cum. </p>
                                        <!-- TEXTO ANIMADO -->
                                    </div>
                                    <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->


                                    <div class="caja_texto position-relative d-flex align-items-center justify-content-center">
                                        <h4 class="text-center font-weight-bold"> Nombre de Asesor </h4>
                                    </div>

                                </div>
                            </a>

                            <div class="position-absolute rounded border caja_verde d-flex align-items-center justify-content-center">

                                <a class="mr-2" href="mailto:ktlaboral@hotmail.com"><i class="fas fa-envelope"> </i></a>
                                <a class="mr-2" href="tel:311123123"> <i class="fas fa-phone"></i> </a>
                                <a class="mr-2" href="#"> <i class="fab fa-whatsapp"></i> </a>
                            </div>

                        </div>
                        <!-- ASESOR -->

                        <!-- ASESOR -->
                        <div class="col-4">
                            <a href="#">
                                <div class="carta d-flex flex-column">

                                    <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->
                                    <div clas="text-break">
                                        <!-- IMAGEN ASESOR -->
                                        <div class="imagen">
                                            <img class="w-100" src="images/asesor3.png" class="card-img-top" alt="...">
                                        </div>
                                        <!-- IMAGEN ASESOR -->

                                        <!-- TEXTO ANIMADO -->
                                        <p class="texto-animado px-2 mr-3 mt-4 text-break"> INFORMACIÓN EXTRA DEL ASESOR Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quasi ipsam eligendi sunt distinctio a voluptatem deleniti quae sed cum. </p>
                                        <!-- TEXTO ANIMADO -->
                                    </div>
                                    <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->


                                    <div class="caja_texto position-relative d-flex align-items-center justify-content-center">
                                        <h4 class="text-center font-weight-bold"> Nombre de Asesor </h4>
                                    </div>

                                </div>
                            </a>

                            <div class="position-absolute rounded border caja_verde d-flex align-items-center justify-content-center">

                                <a class="mr-2" href="mailto:ktlaboral@hotmail.com"><i class="fas fa-envelope"> </i></a>
                                <a class="mr-2" href="tel:311123123"> <i class="fas fa-phone"></i> </a>
                                <a class="mr-2" href="#"> <i class="fab fa-whatsapp"></i> </a>
                            </div>

                        </div>
                        <!-- ASESOR -->

                    </div>

                </section>
            </div>
            <!-- PRIMER TRIO DE ASESORES -->

            <!-- SEGUNDO TRIO DE ASESORES -->
            <div class="carousel-item ">
                <section id="asesores">

                    <div class="container d-flex">

                        <!-- ASESOR -->
                        <div class="col-4">
                            <a href="#">
                                <div class="carta d-flex flex-column">

                                    <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->
                                    <div clas="text-break">
                                        <!-- IMAGEN ASESOR -->
                                        <div class="imagen">
                                            <img class="w-100" src="images/asesor1.png" class="card-img-top" alt="...">
                                        </div>
                                        <!-- IMAGEN ASESOR -->

                                        <!-- TEXTO ANIMADO -->
                                        <p class="texto-animado px-2 mr-3 mt-4 text-break"> INFORMACIÓN EXTRA DEL ASESOR Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quasi ipsam eligendi sunt distinctio a voluptatem deleniti quae sed cum. </p>
                                        <!-- TEXTO ANIMADO -->
                                    </div>
                                    <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->


                                    <div class="caja_texto position-relative d-flex align-items-center justify-content-center">
                                        <h4 class="text-center font-weight-bold"> Nombre de Asesor </h4>
                                    </div>

                                </div>
                            </a>

                            <div class="position-absolute rounded border caja_verde d-flex align-items-center justify-content-center">

                                <a class="mr-2" href="mailto:ktlaboral@hotmail.com"><i class="fas fa-envelope"> </i></a>
                                <a class="mr-2" href="tel:311123123"> <i class="fas fa-phone"></i> </a>
                                <a class="mr-2" href="#"> <i class="fab fa-whatsapp"></i> </a>
                            </div>

                        </div>
                        <!-- ASESOR -->

                        <!-- ASESOR -->
                        <div class="col-4">
                            <a href="#">
                                <div class="carta d-flex flex-column">

                                    <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->
                                    <div clas="text-break">
                                        <!-- IMAGEN ASESOR -->
                                        <div class="imagen">
                                            <img class="w-100" src="images/asesor2.png" class="card-img-top" alt="...">
                                        </div>
                                        <!-- IMAGEN ASESOR -->

                                        <!-- TEXTO ANIMADO -->
                                        <p class="texto-animado px-2 mr-3 mt-4 text-break"> INFORMACIÓN EXTRA DEL ASESOR Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quasi ipsam eligendi sunt distinctio a voluptatem deleniti quae sed cum. </p>
                                        <!-- TEXTO ANIMADO -->
                                    </div>
                                    <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->


                                    <div class="caja_texto position-relative d-flex align-items-center justify-content-center">
                                        <h4 class="text-center font-weight-bold"> Nombre de Asesor </h4>
                                    </div>

                                </div>
                            </a>

                            <div class="position-absolute rounded border caja_verde d-flex align-items-center justify-content-center">

                                <a class="mr-2" href="mailto:ktlaboral@hotmail.com"><i class="fas fa-envelope"> </i></a>
                                <a class="mr-2" href="tel:311123123"> <i class="fas fa-phone"></i> </a>
                                <a class="mr-2" href="#"> <i class="fab fa-whatsapp"></i> </a>
                            </div>

                        </div>
                        <!-- ASESOR -->

                        <!-- ASESOR -->
                        <div class="col-4">
                            <a href="#">
                                <div class="carta d-flex flex-column">

                                    <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->
                                    <div clas="text-break">
                                        <!-- IMAGEN ASESOR -->
                                        <div class="imagen">
                                            <img class="w-100" src="images/asesor3.png" class="card-img-top" alt="...">
                                        </div>
                                        <!-- IMAGEN ASESOR -->

                                        <!-- TEXTO ANIMADO -->
                                        <p class="texto-animado px-2 mr-3 mt-4 text-break"> INFORMACIÓN EXTRA DEL ASESOR Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quasi ipsam eligendi sunt distinctio a voluptatem deleniti quae sed cum. </p>
                                        <!-- TEXTO ANIMADO -->
                                    </div>
                                    <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->


                                    <div class="caja_texto position-relative d-flex align-items-center justify-content-center">
                                        <h4 class="text-center font-weight-bold"> Nombre de Asesor </h4>
                                    </div>

                                </div>
                            </a>

                            <div class="position-absolute rounded border caja_verde d-flex align-items-center justify-content-center">

                                <a class="mr-2" href="mailto:ktlaboral@hotmail.com"><i class="fas fa-envelope"> </i></a>
                                <a class="mr-2" href="tel:311123123"> <i class="fas fa-phone"></i> </a>
                                <a class="mr-2" href="#"> <i class="fab fa-whatsapp"></i> </a>
                            </div>

                        </div>
                        <!-- ASESOR -->

                    </div>

                </section>
            </div>
            <!-- SEGUNDO TRIO DE ASESORES -->

            <!-- TERCER TRIO DE ASESORES -->
            <div class="carousel-item ">
                <section id="asesores">

                    <div class="container d-flex">

                        <!-- ASESOR -->
                        <div class="col-4">
                            <a href="#">
                                <div class="carta d-flex flex-column">

                                    <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->
                                    <div clas="text-break">
                                        <!-- IMAGEN ASESOR -->
                                        <div class="imagen">
                                            <img class="w-100" src="images/asesor1.png" class="card-img-top" alt="...">
                                        </div>
                                        <!-- IMAGEN ASESOR -->

                                        <!-- TEXTO ANIMADO -->
                                        <p class="texto-animado px-2 mr-3 mt-4 text-break"> INFORMACIÓN EXTRA DEL ASESOR Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quasi ipsam eligendi sunt distinctio a voluptatem deleniti quae sed cum. </p>
                                        <!-- TEXTO ANIMADO -->
                                    </div>
                                    <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->


                                    <div class="caja_texto position-relative d-flex align-items-center justify-content-center">
                                        <h4 class="text-center font-weight-bold"> Nombre de Asesor </h4>
                                    </div>

                                </div>
                            </a>

                            <div class="position-absolute rounded border caja_verde d-flex align-items-center justify-content-center">

                                <a class="mr-2" href="mailto:ktlaboral@hotmail.com"><i class="fas fa-envelope"> </i></a>
                                <a class="mr-2" href="tel:311123123"> <i class="fas fa-phone"></i> </a>
                                <a class="mr-2" href="#"> <i class="fab fa-whatsapp"></i> </a>
                            </div>

                        </div>
                        <!-- ASESOR -->

                        <!-- ASESOR -->
                        <div class="col-4">
                            <a href="#">
                                <div class="carta d-flex flex-column">

                                    <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->
                                    <div clas="text-break">
                                        <!-- IMAGEN ASESOR -->
                                        <div class="imagen">
                                            <img class="w-100" src="images/asesor2.png" class="card-img-top" alt="...">
                                        </div>
                                        <!-- IMAGEN ASESOR -->

                                        <!-- TEXTO ANIMADO -->
                                        <p class="texto-animado px-2 mr-3 mt-4 text-break"> INFORMACIÓN EXTRA DEL ASESOR Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quasi ipsam eligendi sunt distinctio a voluptatem deleniti quae sed cum. </p>
                                        <!-- TEXTO ANIMADO -->
                                    </div>
                                    <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->


                                    <div class="caja_texto position-relative d-flex align-items-center justify-content-center">
                                        <h4 class="text-center font-weight-bold"> Nombre de Asesor </h4>
                                    </div>

                                </div>
                            </a>

                            <div class="position-absolute rounded border caja_verde d-flex align-items-center justify-content-center">

                                <a class="mr-2" href="mailto:ktlaboral@hotmail.com"><i class="fas fa-envelope"> </i></a>
                                <a class="mr-2" href="tel:311123123"> <i class="fas fa-phone"></i> </a>
                                <a class="mr-2" href="#"> <i class="fab fa-whatsapp"></i> </a>
                            </div>

                        </div>
                        <!-- ASESOR -->

                        <!-- ASESOR -->
                        <div class="col-4">
                            <a href="#">
                                <div class="carta d-flex flex-column">

                                    <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->
                                    <div clas="text-break">
                                        <!-- IMAGEN ASESOR -->
                                        <div class="imagen">
                                            <img class="w-100" src="images/asesor3.png" class="card-img-top" alt="...">
                                        </div>
                                        <!-- IMAGEN ASESOR -->

                                        <!-- TEXTO ANIMADO -->
                                        <p class="texto-animado px-2 mr-3 mt-4 text-break"> INFORMACIÓN EXTRA DEL ASESOR Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quasi ipsam eligendi sunt distinctio a voluptatem deleniti quae sed cum. </p>
                                        <!-- TEXTO ANIMADO -->
                                    </div>
                                    <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->


                                    <div class="caja_texto position-relative d-flex align-items-center justify-content-center">
                                        <h4 class="text-center font-weight-bold"> Nombre de Asesor </h4>
                                    </div>

                                </div>
                            </a>

                            <div class="position-absolute rounded border caja_verde d-flex align-items-center justify-content-center">

                                <a class="mr-2" href="mailto:ktlaboral@hotmail.com"><i class="fas fa-envelope"> </i></a>
                                <a class="mr-2" href="tel:311123123"> <i class="fas fa-phone"></i> </a>
                                <a class="mr-2" href="#"> <i class="fab fa-whatsapp"></i> </a>
                            </div>

                        </div>
                        <!-- ASESOR -->

                    </div>

                </section>
            </div>
            <!-- TERCER TRIO DE ASESORES -->

        </div>

        <a class="carousel-control-prev" href="#carrusel2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon2" aria-hidden="true"> <i class="fas fa-caret-left"></i> </span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carrusel2" role="button" data-slide="next">
            <span class="carousel-control-next-icon2" aria-hidden="true"> <i class="fas fa-caret-right"></i> </span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- ASESORES -->

    <!-- NUESTROS ALIADOS -->
    <section id="nuestros_aliados" class="mt-5">

        <div class="container">
            <h2 class="d-flex justify-content-center mb-5"> Nuestros Aliados </h2>

            <div class="d-flex flex-wrap align-items-center justify-content-center">

                <div class="logos1 col-4">
                    <img src="images/a_Banco-Caja-Social .png" alt="">
                </div>

                <div class="logos1 col-4">
                    <img src="images/a_fianzasantander-logo-1.png" alt="">
                </div>

                <div class="logos1 col-4">
                    <img src="images/a_Libertador.png" alt="">
                </div>

                <div class="mt-5 logos1 col-4">
                    <img src="images/a_logo_lonja_color.png" alt="">
                </div>

                <div class="mt-5 logos2 col-2">
                    <img src="images/a_logo_fenalco_santander.png" alt="">
                </div>


            </div>
        </div>


    </section>
    <!-- NUESTROS ALIADOS -->

    <!-- FORMULARIO DE ASEGURADORAS -->
    <section id="formulario_aseguradoras" class="mt-5">
        <div>
            <h2 class="blanco d-flex justify-content-center pt-5 pb-1"> Descargar Formulario de Aseguradoras </h2>
        </div>

        <div class="d-flex justify-content-center pb-5">
            <button class="boton_principal btn boton_aseguradoras"> Descargar </button>
        </div>
    </section>
    <!-- FORMULARIO DE ASEGURADORAS -->

    <!-- FOOTER -->
    <section>
        <?php include 'layout/5footer.php' ?>
    </section>
    <!-- FOOTER -->

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

    <?php include 'layout/2archivos_footer.php' ?>
    <!-- buscador -->
    <script src="conexion_api/validadores.js"></script>
    <script src="conexion_api/buscador.js"></script>
    <!-- barra de rangos -->
    <script src="js/rangos.js"></script>
</body>

</html>