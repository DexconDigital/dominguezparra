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
    <section id="inmuebles2" class="mt-5 container">

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


    <!-- NUESTROS ALIADOS -->
    <section id="nuestros_aliados" class="d-none d-lg-block d-xl-block mt-5">   

        <div class="container">
            <h2 class="d-flex justify-content-center mb-5"> Nuestros Aliados </h2>

            <div class="d-flex flex-wrap align-items-center justify-content-center">

                <div class="d-flex align-items-center justify-content-center logos1 col-12 col-md-6 col-lg-4 col-xl-4">
                    <img src="images/a_banco_caja_social.png" alt="">
                </div>

                <div style="height:auto;" class="d-flex align-items-center justify-content-center logos1 col-12 col-md-6 col-lg-4 col-xl-4">
                    <img src="images/fianzasantander.png" alt="">
                </div>

                <div class="d-flex align-items-center justify-content-center logos1 col-12 col-md-6 col-lg-4 col-xl-4">
                    <img src="images/a_libertador.png" alt="">
                </div>

                <div class="d-flex align-items-center justify-content-center mt-0 mt-lg-5 mt-xl-5 logos1 col-12 col-md-6 col-lg-4 col-xl-4">
                    <img src="images/a_logo_lonja_color.png" alt="">
                </div>

                <div class="d-flex align-items-center justify-content-center mt-0 mt-lg-5 mt-xl-5 logos2 col-6 col-md-3 col-lg-2 col-xl-2">
                    <img src="images/a_logo_fenalco_santander.png" alt="">
                </div>

                <div class="d-flex align-items-center justify-content-center mt-0 mt-lg-5 mt-xl-5 logos2 col-6 col-md-3 col-lg-4 col-xl-4">
                    <img src="images/ccbucaramanga.png" alt="">
                </div>


            </div>
        </div>


    </section>
    <!-- NUESTROS ALIADOS -->

    <!-- FORMULARIO DE ASEGURADORAS -->
    <section id="formulario_aseguradoras" class="mt-5">
        <div>
            <h2 class="blanco d-flex justify-content-center pt-5 pb-1 px-2 text-center"> Descargar Formulario de Aseguradoras </h2>
        </div>

        <div class="d-flex justify-content-center pb-5">
            <button data-toggle="modal" data-target="#formulario3" class="boton_principal btn boton_aseguradoras"> Descargar </button>
        </div>

    </section>
    <!-- FORMULARIO DE ASEGURADORAS -->

    <!-- FOOTER -->
    <section class="d-none d-lg-block d-xl-block">
        <?php include 'layout/5footer.php' ?>
    </section>
    <!-- FOOTER -->

    <!-- FOOTER (VERSIONES MOBILES) -->
    <footer class="pt-3 d-block d-lg-none d-xl-none">

        <div class="container py-2">
            <div class="col-12 p-0 d-flex flex-column">

                <div class="col-12">
                    <h2 class="d-flex justify-content-center"> Contáctenos </h2>
                    <div class="d-flex flex-wrap align-items-center justify-content-center">

                        <!-- SEDE PRINCIPAL -->
                        <div class="align-items-center justify-content-center d-flex flex-column col-6 col-md-4 col-lg-4 col-xl-4 mt-2">
                            <h3 class="m-0 titulos text-justify d-flex justify-content-center"> <b class=" text-center verde_oscuro"> Oficina Principal </b> </h3>

                            <!-- MODAL -->
                            <div class="d-flex justify-content-center mt-3">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn boton_principal" data-toggle="modal" data-target="#m1">
                                    Ver información
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="m1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"> Principal </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div class="modal-body">

                                                <div class="hover_iconos2 d-flex align-items-baseline">
                                                    <div class="d-flex align-items-baseline">

                                                        <i class="mr-1 <?php echo $datos_contacto['principal']['direccion']['icono'] ?>"> </i>
                                                        <p> <?php echo $datos_contacto['principal']['direccion']['direccion'] ?> </p>
                                                    </div>
                                                </div>

                                                <div class="hover_iconos">
                                                    <a class="d-flex align-items-baseline" href="tel:<?php echo  $datos_contacto['principal']['telefono_fijo']['link'] ?>">
                                                        <i class="mr-1 <?php echo $datos_contacto['principal']['telefono_fijo']['icono'] ?>"> </i>
                                                        <p> <?php echo $datos_contacto['principal']['telefono_fijo']['imprimir'] ?> </p>
                                                    </a>
                                                </div>

                                                <div class="hover_iconos">
                                                    <a class="d-flex align-items-baseline" href="tel:<?php echo  $datos_contacto['principal']['celular']['link'] ?>">
                                                        <i class="mr-1 <?php echo $datos_contacto['principal']['celular']['icono'] ?>"> </i>
                                                        <p> <?php echo $datos_contacto['principal']['celular']['imprimir'] ?> </p>
                                                    </a>
                                                </div>

                                                <div class="hover_iconos">
                                                    <a class="d-flex align-items-baseline" target="blank" href="<?php echo  $datos_contacto['principal']['whatsapp']['link'] ?>">
                                                        <i class="mr-1 <?php echo $datos_contacto['principal']['whatsapp']['icono'] ?>"> </i>
                                                        <p> <?php echo $datos_contacto['principal']['whatsapp']['imprimir'] ?> </p>
                                                    </a>
                                                </div>

                                                <div class="hover_iconos">
                                                    <a class="d-flex align-items-baseline" href="mailto:<?php echo  $datos_contacto['principal']['correo'] ?>">
                                                        <i class="mr-1 fas fa-envelope"></i>
                                                        <p> <?php echo $datos_contacto['principal']['correo'] ?> </p>
                                                    </a>
                                                </div>

                                                <div class="hover_iconos2">
                                                    <div class="d-flex align-items-baseline">
                                                        <i class="mr-1 <?php echo $datos_contacto['principal']['horario']['icono'] ?>"> </i>
                                                        <p> <?php echo $datos_contacto['principal']['horario']['horario'] ?> </p>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn boton_footer" data-dismiss="modal"> Cerrar </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- MODAL -->

                        </div>
                        <!-- SEDE PRINCIPAL -->


                        <!-- SEDE CABECERA -->
                        <div class="align-items-center justify-content-center d-flex flex-column col-6 col-md-4 col-lg-4 col-xl-4 mt-2">
                            <h3 class="m-0 titulos text-justify d-flex justify-content-center"> <b class=" text-center verde_oscuro"> Oficina Cabecera </b> </h3>

                            <!-- MODAL -->
                            <div class="d-flex justify-content-center mt-3">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn boton_principal" data-toggle="modal" data-target="#m2">
                                    Ver información
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="m2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"> Cabecera </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div class="modal-body">

                                                <div class="hover_iconos2">
                                                    <div class="d-flex align-items-baseline">
                                                        <i class="mr-1 <?php echo $datos_contacto['cabecera']['direccion']['icono'] ?>"> </i>
                                                        <p> <?php echo $datos_contacto['cabecera']['direccion']['direccion'] ?> </p>
                                                    </div>
                                                </div>


                                                <div class="hover_iconos">
                                                    <a class="d-flex align-items-baseline" href="tel:<?php echo  $datos_contacto['cabecera']['telefono_fijo']['link'] ?>">
                                                        <i class="mr-1 <?php echo $datos_contacto['cabecera']['telefono_fijo']['icono'] ?>"> </i>
                                                        <p> <?php echo $datos_contacto['cabecera']['telefono_fijo']['imprimir'] ?> </p>
                                                    </a>
                                                </div>

                                                <div class="hover_iconos">
                                                    <a class="d-flex align-items-baseline" href="tel:<?php echo  $datos_contacto['principal']['celular']['link'] ?>">
                                                        <i class="mr-1 <?php echo $datos_contacto['principal']['celular']['icono'] ?>"> </i>
                                                        <p> <?php echo $datos_contacto['principal']['celular']['imprimir'] ?> </p>
                                                    </a>
                                                </div>

                                                <div class="hover_iconos">
                                                    <a class="d-flex align-items-baseline" target="blank" href="<?php echo  $datos_contacto['cabecera']['whatsapp']['link'] ?>">
                                                        <i class="mr-1 <?php echo $datos_contacto['cabecera']['whatsapp']['icono'] ?>"> </i>
                                                        <p> <?php echo $datos_contacto['cabecera']['whatsapp']['imprimir'] ?> </p>
                                                    </a>
                                                </div>

                                                <div class="hover_iconos">
                                                    <a class="d-flex align-items-baseline" href="mailto:<?php echo  $datos_contacto['cabecera']['correo'] ?>">
                                                        <i class="mr-1 fas fa-envelope"></i>
                                                        <p> <?php echo $datos_contacto['cabecera']['correo'] ?> </p>
                                                    </a>
                                                </div>

                                                <div class="hover_iconos2">
                                                    <div class="d-flex align-items-baseline">
                                                        <i class="mr-1 <?php echo $datos_contacto['cabecera']['horario']['icono'] ?>"> </i>
                                                        <p> <?php echo $datos_contacto['cabecera']['horario']['horario'] ?> </p>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn boton_footer" data-dismiss="modal"> Cerrar </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- MODAL -->

                        </div>
                        <!-- SEDE CABECERA -->


                        <!-- SEDE CAÑAVERAL -->
                        <div class="align-items-center justify-content-center d-flex flex-column col-6 col-md-4 col-lg-4 col-xl-4 mt-2">
                            <h3 class="m-0 titulos text-justify d-flex justify-content-center"> <b class=" text-center verde_oscuro"> Oficina Cañaveral </b> </h3>

                            <!-- MODAL -->
                            <div class="d-flex justify-content-center mt-3">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn boton_principal" data-toggle="modal" data-target="#m3">
                                    Ver información
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="m3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"> Cañaveral </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div class="modal-body">

                                                <div class="hover_iconos2">
                                                    <div class="d-flex align-items-baseline">
                                                        <i class="mr-1 <?php echo $datos_contacto['cañaveral']['direccion']['icono'] ?>"> </i>
                                                        <p> <?php echo $datos_contacto['cañaveral']['direccion']['direccion'] ?> </p>
                                                    </div>
                                                </div>

                                                <div class="hover_iconos">
                                                    <a class="d-flex align-items-baseline" href="tel:<?php echo  $datos_contacto['cañaveral']['telefono_fijo']['link'] ?>">
                                                        <i class="mr-1 <?php echo $datos_contacto['cañaveral']['telefono_fijo']['icono'] ?>"> </i>
                                                        <p> <?php echo $datos_contacto['cañaveral']['telefono_fijo']['imprimir'] ?> </p>
                                                    </a>
                                                </div>

                                                <div class="hover_iconos">
                                                    <a class="d-flex align-items-baseline" href="tel:<?php echo  $datos_contacto['principal']['celular']['link'] ?>">
                                                        <i class="mr-1 <?php echo $datos_contacto['principal']['celular']['icono'] ?>"> </i>
                                                        <p> <?php echo $datos_contacto['principal']['celular']['imprimir'] ?> </p>
                                                    </a>
                                                </div>


                                                <div class="hover_iconos">
                                                    <a class="d-flex align-items-baseline" target="blank" href="<?php echo  $datos_contacto['cañaveral']['whatsapp']['link'] ?>">
                                                        <i class="mr-1 <?php echo $datos_contacto['cañaveral']['whatsapp']['icono'] ?>"> </i>
                                                        <p> <?php echo $datos_contacto['cañaveral']['whatsapp']['imprimir'] ?> </p>
                                                    </a>
                                                </div>

                                                <div class="hover_iconos">
                                                    <a class="d-flex align-items-baseline" href="mailto:<?php echo  $datos_contacto['cañaveral']['correo'] ?>">
                                                        <i class="mr-1 fas fa-envelope"></i>
                                                        <p> <?php echo $datos_contacto['cañaveral']['correo'] ?> </p>
                                                    </a>
                                                </div>

                                                <div class="hover_iconos2">
                                                    <div class="d-flex align-items-baseline">
                                                        <i class="mr-1 <?php echo $datos_contacto['cañaveral']['horario']['icono'] ?>"> </i>
                                                        <p> <?php echo $datos_contacto['cañaveral']['horario']['horario'] ?> </p>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn boton_footer" data-dismiss="modal"> Cerrar </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- MODAL -->



                        </div>
                        <!-- SEDE CAÑAVERAL -->

                    </div>
                </div>

            </div>
        </div>

        <!-- NUESTROS ALIADOS -->
        <section id="nuestros_aliados" class="mt-5">

            <div class="container">
                <h2 class="d-flex justify-content-center mb-5"> Nuestros Aliados </h2>

                <div class="d-flex flex-wrap align-items-center justify-content-center">

                    <div class="d-flex align-items-center justify-content-center logos1 col-12 col-md-6 col-lg-4 col-xl-4">
                        <img src="images/banco-caja-social_blanco.png" alt="">
                    </div>

                    <div style="height:auto;" class="d-flex align-items-center justify-content-center logos1 col-12 col-md-6 col-lg-4 col-xl-4">
                        <img src="images/fianzasantander_blanco.png" alt="">
                    </div>

                    <div class="d-flex align-items-center justify-content-center logos1 col-12 col-md-6 col-lg-4 col-xl-4">
                        <img src="images/libertador_blanco.png" alt="">
                    </div>

                    <div class="d-flex align-items-center justify-content-center mt-0 mt-lg-5 mt-xl-5 logos1 col-12 col-md-6 col-lg-4 col-xl-4">
                        <img src="images/logo_lonja_2_lineas_blanco.png" alt="">
                    </div>

                    <div class="d-flex align-items-center justify-content-center mt-0 mt-lg-5 mt-xl-5 logos2 col-12 col-md-3 col-lg-4 col-xl-4">
                        <img src="images/ccbucaramanga_blanco.png" alt="">
                    </div>

                    <div class="d-flex align-items-center justify-content-center mt-0 mt-lg-5 mt-xl-5 logos2 col-6 col-md-3 col-lg-2 col-xl-2">
                        <img src="images/fenalco_blanco.png" alt="">
                    </div>


                </div>
            </div>


        </section>
        <!-- NUESTROS ALIADOS -->

        <div class="copyright border-top p-2 mt-3">
            <p class="text-center px-2 text-justify"> Diseñado y Desarrollado por <a class="mx-1" target="blank" href="https://www.dexcondigital.com"> Dexcon Digital </a> ©Copyright 2020 para Inmobiliaria
                Alejandro Dominguez Parra. Todos los derechos reservados. </p>
        </div>

    </footer>
    <!-- FOOTER (VERSIONES MOBILES) -->


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

    <!-- Modal -->


    <?php include 'layout/2archivos_footer.php' ?>
    <!-- buscador -->
    <script src="conexion_api/validadores.js"></script>
    <script src="conexion_api/buscador.js"></script>
    <!-- barra de rangos -->
    <script src="js/rangos.js"></script>


</body>

</html>