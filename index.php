<?php require 'variables/variables.php';
$page = "Inicio" ?>
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
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
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
    <section id="propiedades_destacadas" class="mt-5">

        <h2 class="w-100 d-flex justify-content-center mb-5"> Propiedades Destacadas </h2>

        <div class="container d-flex align-items-center justify-content-between">

            <!-- CARD -->
            <div class="card border">

                <a href="#">
                    <div class="position-relative">
                        <div class="caja_imagen"><img src="images/no_image.png" class="card-img-top" alt="..."></div>
                        <!-- <i class="lupa fas fa-search"></i> -->

                        <div class="tipo_inmueble position-absolute d-flex align-items-center">
                            <p class="ml-2"> Tipo de Inmueble </p>
                        </div>

                        <div class="tipo_gestion position-absolute d-flex align-items-center">
                            <p class="mr-2"> Tipo de Gestión </p>
                        </div>

                        <div class="card-body p-3">

                            <div class="d-flex precio align-items-center position-absolute">
                                <i class="verde fas fa-dollar-sign"></i>
                                <h4 class="my-0 pl-1"> 1.000.000 </h4>
                            </div>

                            <div class="d-flex align-items-center">
                                <i class="verde fas fa-map-marker-alt"></i>
                                <h4 class="my-0 pl-2"> Dirección </h4>
                            </div>

                            <div>
                                <p class="text-muted"> Código: </p>
                            </div>

                        </div>

                        <div class="fondo_caracteristicas d-flex align-items-center justify-content-around">

                            <div class="d-flex py-2 align-items-center">
                                <i class="verde fas fa-chart-area"></i>
                                <p class="blanco pl-2"> 200 Mts<sup>2 </p>
                            </div>

                            <div class="d-flex py-2 align-items-center">
                                <i class="verde fas fa-bath"></i>
                                <p class="blanco pl-2"> 5 </p>
                            </div>

                            <div class="d-flex py-2 align-items-center">
                                <i class="verde fas fa-bed"></i>
                                <p class="blanco pl-2"> 5 </p>
                            </div>

                            <div class="d-flex py-2 align-items-center">
                                <i class="verde fas fa-warehouse"></i>
                                <p class="blanco pl-2"> 5 </p>
                            </div>

                        </div>

                    </div>
                </a>

            </div>
            <!-- CARD -->

            <!-- CARD -->
            <div class="card border">

                <a href="#">
                    <div class="position-relative">
                        <div class="caja_imagen"><img src="images/no_image.png" class="card-img-top" alt="..."></div>
                        <!-- <i class="lupa fas fa-search"></i> -->

                        <div class="tipo_inmueble position-absolute d-flex align-items-center">
                            <p class="ml-2"> Tipo de Inmueble </p>
                        </div>

                        <div class="tipo_gestion position-absolute d-flex align-items-center">
                            <p class="mr-2"> Tipo de Gestión </p>
                        </div>

                        <div class="card-body p-3">

                            <div class="d-flex precio align-items-center position-absolute">
                                <i class="verde fas fa-dollar-sign"></i>
                                <h4 class="my-0 pl-1"> 1.000.000 </h4>
                            </div>

                            <div class="d-flex align-items-center">
                                <i class="verde fas fa-map-marker-alt"></i>
                                <h4 class="my-0 pl-2"> Dirección </h4>
                            </div>

                            <div>
                                <p class="text-muted"> Código: </p>
                            </div>

                        </div>

                        <div class="fondo_caracteristicas d-flex align-items-center justify-content-around">

                            <div class="d-flex py-2 align-items-center">
                                <i class="verde fas fa-chart-area"></i>
                                <p class="blanco pl-2"> 200 Mts<sup>2 </p>
                            </div>

                            <div class="d-flex py-2 align-items-center">
                                <i class="verde fas fa-bath"></i>
                                <p class="blanco pl-2"> 5 </p>
                            </div>

                            <div class="d-flex py-2 align-items-center">
                                <i class="verde fas fa-bed"></i>
                                <p class="blanco pl-2"> 5 </p>
                            </div>

                            <div class="d-flex py-2 align-items-center">
                                <i class="verde fas fa-warehouse"></i>
                                <p class="blanco pl-2"> 5 </p>
                            </div>

                        </div>

                    </div>

                </a>

            </div>
            <!-- CARD -->

            <!-- CARD -->
            <div class="card border">

                <a href="#">
                    <div class="position-relative">
                        <div class="caja_imagen"><img src="images/no_image.png" class="card-img-top" alt="..."></div>
                        <!-- <i class="lupa fas fa-search"></i> -->

                        <div class="tipo_inmueble position-absolute d-flex align-items-center">
                            <p class="ml-2"> Tipo de Inmueble </p>
                        </div>

                        <div class="tipo_gestion position-absolute d-flex align-items-center">
                            <p class="mr-2"> Tipo de Gestión </p>
                        </div>

                        <div class="card-body p-3">

                            <div class="d-flex precio align-items-center position-absolute">
                                <i class="verde fas fa-dollar-sign"></i>
                                <h4 class="my-0 pl-1"> 1.000.000 </h4>
                            </div>

                            <div class="d-flex align-items-center">
                                <i class="verde fas fa-map-marker-alt"></i>
                                <h4 class="my-0 pl-2"> Dirección </h4>
                            </div>

                            <div>
                                <p class="text-muted"> Código: </p>
                            </div>

                        </div>

                        <div class="fondo_caracteristicas d-flex align-items-center justify-content-around">

                            <div class="d-flex py-2 align-items-center">
                                <i class="verde fas fa-chart-area"></i>
                                <p class="blanco pl-2"> 200 Mts<sup>2 </p>
                            </div>

                            <div class="d-flex py-2 align-items-center">
                                <i class="verde fas fa-bath"></i>
                                <p class="blanco pl-2"> 5 </p>
                            </div>

                            <div class="d-flex py-2 align-items-center">
                                <i class="verde fas fa-bed"></i>
                                <p class="blanco pl-2"> 5 </p>
                            </div>

                            <div class="d-flex py-2 align-items-center">
                                <i class="verde fas fa-warehouse"></i>
                                <p class="blanco pl-2"> 5 </p>
                            </div>

                        </div>

                    </div>

                </a>

            </div>
            <!-- CARD -->

        </div>


    </section>
    <!-- PROPIEDADES DESTACADAS -->


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
            <button class="boton_principal btn boton_aseguradoras"> DESCARGAR </button>
        </div>
    </section>
    <!-- FORMULARIO DE ASEGURADORAS -->

    <!-- FOOTER -->
    <footer class="py-3 border-bottom">

        <div class="container">
            <div class="col-12 p-0 d-flex">

                <!--  <div class="col-5">
                    <h2 class="d-flex justify-content-start"> Matriculas Arrendador </h2>
                    <ul class="px-3">
                        <li> MA 023 Oficio 192/2003 - Bucaramanga </li>
                        <li> R.I 009-2009/ Resolución 0073/2009 - Floridablanca </li>
                        <li> M.A 0030/ Resolución 0030/2014 - Piedecuesta </li>
                        <li> M.A 078/ Resolución 078/2014 – Girón </li>
                    </ul>
                </div> -->

                <div class="col-12 ">
                    <h2 class="d-flex justify-content-center"> Contáctenos </h2>
                    <div class="d-flex">

                        <!-- SEDE PRINCIPAL -->
                        <div class="col-4">
                            <p class="text-justify d-flex justify-content-center"> <b class="verde_oscuro"> <?php echo $datos_contacto['principal']['nombre_sede'] ?> </b> </p>

                            <div class="d-flex align-items-baseline">
                                <i class="mr-1 <?php echo $datos_contacto['principal']['direccion']['icono'] ?>"> </i>
                                <p> <?php echo $datos_contacto['principal']['direccion']['direccion'] ?> </p>
                            </div>

                            <div class="hover_iconos">
                                <a class="d-flex align-items-baseline" href="tel:<?php echo  $datos_contacto['principal']['telefono_fijo']['link'] ?>">
                                    <i class="mr-1 <?php echo $datos_contacto['principal']['telefono_fijo']['icono'] ?>"> </i>
                                    <p> <?php echo $datos_contacto['principal']['telefono_fijo']['imprimir'] ?> </p>
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

                            <div class="hover_iconos">
                                <div class="d-flex align-items-baseline">
                                    <i class="mr-1 <?php echo $datos_contacto['principal']['horario']['icono'] ?>"> </i>
                                    <p> <?php echo $datos_contacto['principal']['horario']['horario'] ?> </p>
                                </div>
                            </div>



                        </div>
                        <!-- SEDE PRINCIPAL -->


                        <!-- SEDE CABECERA -->
                        <div class="col-4">
                            <p class="text-justify d-flex justify-content-center"> <b class="verde_oscuro"> <?php echo $datos_contacto['cabecera']['nombre_sede'] ?> </b> </p>

                            <div class="d-flex align-items-baseline">
                                <i class="mr-1 <?php echo $datos_contacto['cabecera']['direccion']['icono'] ?>"> </i>
                                <p> <?php echo $datos_contacto['cabecera']['direccion']['direccion'] ?> </p>
                            </div>

                            <div class="hover_iconos">
                                <a class="d-flex align-items-baseline" href="tel:<?php echo  $datos_contacto['cabecera']['telefono_fijo']['link'] ?>">
                                    <i class="mr-1 <?php echo $datos_contacto['cabecera']['telefono_fijo']['icono'] ?>"> </i>
                                    <p> <?php echo $datos_contacto['cabecera']['telefono_fijo']['imprimir'] ?> </p>
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

                            <div class="hover_iconos">
                                <div class="d-flex align-items-baseline">
                                    <i class="mr-1 <?php echo $datos_contacto['cabecera']['horario']['icono'] ?>"> </i>
                                    <p> <?php echo $datos_contacto['cabecera']['horario']['horario'] ?> </p>
                                </div>
                            </div>

                        </div>
                        <!-- SEDE CABECERA -->

                        <!-- SEDE CAÑAVERAL -->
                        <div class="col-4">
                            <p class="text-justify d-flex justify-content-center"> <b class="verde_oscuro"> <?php echo $datos_contacto['cañaveral']['nombre_sede'] ?> </b> </p>

                            <div class="d-flex align-items-baseline">
                                <i class="mr-1 <?php echo $datos_contacto['cañaveral']['direccion']['icono'] ?>"> </i>
                                <p> <?php echo $datos_contacto['cañaveral']['direccion']['direccion'] ?> </p>
                            </div>

                            <div class="hover_iconos">
                                <a class="d-flex align-items-baseline" href="tel:<?php echo  $datos_contacto['cañaveral']['telefono_fijo']['link'] ?>">
                                    <i class="mr-1 <?php echo $datos_contacto['cañaveral']['telefono_fijo']['icono'] ?>"> </i>
                                    <p> <?php echo $datos_contacto['cañaveral']['telefono_fijo']['imprimir'] ?> </p>
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

                            <div class="hover_iconos">
                                <div class="d-flex align-items-baseline">
                                    <i class="mr-1 <?php echo $datos_contacto['cañaveral']['horario']['icono'] ?>"> </i>
                                    <p> <?php echo $datos_contacto['cañaveral']['horario']['horario'] ?> </p>
                                </div>
                            </div>

                        </div>
                        <!-- SEDE CAÑAVERAL -->

                    </div>
                </div>

            </div>
        </div>

    </footer>
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

</body>

</html>