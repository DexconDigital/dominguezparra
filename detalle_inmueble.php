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
        <div id="seccion_izquierda" class="col-8">

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

                    <div class="contenedor-img">
                        <img src="images/casa1.jpg" alt="">
                    </div>

                    <div class="contenedor-img">
                        <img src="images/casa2.jpg" alt="">
                    </div>

                    <div class="contenedor-img">
                        <img src="images/casa1.jpg" alt="">
                    </div>

                    <div class="contenedor-img">
                        <img src="images/casa2.jpg" alt="">
                    </div>

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

                    <div class="contenedor-img">
                        <img src="images/casa1.jpg" alt="">
                    </div>

                    <div class="contenedor-img">
                        <img src="images/casa2.jpg" alt="">
                    </div>

                    <div class="contenedor-img">
                        <img src="images/casa1.jpg" alt="">
                    </div>

                    <div class="contenedor-img">
                        <img src="images/casa2.jpg" alt="">
                    </div>

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

            <!-- PRECIO Y DIRECCIÓN -->
            <div class=" d-flex flex-column justify-content-center blanco precio_codigo col-12">

                <div class="d-flex align-items-center justify-content-between">

                    <div class="d-flex align-items-center">
                        <h5 class="m-0"> Tipo de Inmueble/Tipo de Gestion </h5>
                    </div>

                    <div class="d-flex align-items-center">
                        <i class="verde mr-2 fas fa-map-marker-alt"></i>
                        <h5 class="m-0"> Dirección </h5>
                    </div>

                </div>

                <h5 class="mt-2 m-0"> $ 1.000.000.000.000 </h5>
            </div>
            <!-- PRECIO Y DIRECCIÓN -->

            <!-- CARACTERISTICAS Y CÓDIGO -->
            <div class="caracteristicas d-flex align-items-center justify-content-between col-12">

                <!-- CARACTERISTICAS -->
                <div class="d-flex">

                    <!-- AREA -->
                    <div class="d-flex mr-3 align-items-center">
                        <i class="verde mr-1 fas fa-chart-area"> </i>
                        <p> 5 </p>
                    </div>
                    <!-- AREA -->

                    <!-- BAÑOS -->
                    <div class="d-flex mr-3 align-items-center">
                        <i class="verde mr-1 fas fa-bath"> </i>
                        <p> 5 </p>
                    </div>
                    <!-- BAÑOS -->

                    <!-- ALCOBAS -->
                    <div class="d-flex mr-3 align-items-center">
                        <i class="verde mr-1 fas fa-bed"> </i>
                        <p> 5 </p>
                    </div>
                    <!-- ALCOBAS -->

                    <!-- GARAJES -->
                    <div class="d-flex mr-3 align-items-center">
                        <i class="verde mr-1 fas fa-warehouse"> </i>
                        <p> 5 </p>
                    </div>
                    <!-- GARAJES -->

                </div>
                <!-- CARACTERISTICAS -->

                <div>
                    <p class="text-muted"> Código: 12345 </p>
                </div>

            </div>
            <!-- CARACTERISTICAS Y CÓDIGO -->

            <!-- DESCRIPCION -->
            <div class="mt-5">
                <h5 class="d-inline-block m-0 position-relative linea font-weight-bold"> Descripción </h5>
                <p class="my-3"> *DESCRIPCIÓN* Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus autem suscipit culpa natus quia debitis, consectetur ullam expedita laudantium ex, numquam mollitia? Autem veniam dolore quis, soluta hic in architecto. </p>
            </div>
            <!-- DESCRIPCION -->

            <!-- BOTONES CARACTERISTICAS -->
            <div id="accordion">
                <div class="container p-0">
                    <div class="col-12 p-0">

                        <!----------BOTONES---------->

                        <div class="d-flex flex-wrap">

                            <div id="boton1" class="activo d-flex justify-content-center align-items-center boton_caracteristicas p-0 col-3" type="button" data-toggle="collapse" data-target="#uno" aria-expanded="true" aria-controls="collapseExample">
                                Características Internas
                            </div>

                            <div id="boton2" class="d-flex justify-content-center align-items-center boton_caracteristicas p-0 col-3" type="button" data-toggle="collapse" data-target="#dos" aria-expanded="false" aria-controls="collapseExample">
                                Características Externas
                            </div>

                            <div id="boton3" class="d-flex justify-content-center align-items-center boton_caracteristicas p-0 col-4" type="button" data-toggle="collapse" data-target="#tres" aria-expanded="false" aria-controls="collapseExample">
                                Características Alrededores
                            </div>

                            <div id="boton4" class="d-flex justify-content-center align-items-center boton_caracteristicas p-0 col-2" type="button" data-toggle="collapse" data-target="#cuatro" aria-expanded="false" aria-controls="collapseExample">
                                Video
                            </div>

                        </div>

                        <!----------BOTONES---------->

                        <!----------INFORMACION BOTONES---------->

                        <!-- DESCRIPCIÓN CARACTERISTICAS INTERNAS -->
                        <div class="col-12 p-0">

                            <div id="uno" class="collapse show" aria-labelledby="uno" data-parent="#accordion">

                                <h5 class="font-weight-bold mt-3 d-inline-block linea position-relative">Características Internas </h5>

                                <p class="mb-5"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora placeat odio aliquid iusto? Assumenda nesciunt corrupti incidunt ratione facere excepturi dignissimos quasi voluptatum in laborum soluta, vitae obcaecati temporibus! Ipsa consequuntur, laudantium sed blanditiis labore quasi, quaerat ratione accusantium iusto quod iure veniam debitis, repellendus cupiditate nostrum veritatis quibusdam ut. </p>

                            </div>
                        </div>
                        <!-- DESCRIPCIÓN CARACTERISTICAS INTERNAS -->

                        <!-- DESCRIPCIÓN CATACTERISTICAS EXTERNAS -->
                        <div class="col-12 p-0">
                            <div id="dos" class="collapse" aria-labelledby="dos" data-parent="#accordion">
                                <h5 class="font-weight-bold mt-3 d-inline-block linea position-relative">Características Externas </h5>
                                <p class="mb-5"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora placeat odio aliquid iusto? Assumenda nesciunt corrupti incidunt ratione facere excepturi dignissimos quasi voluptatum in laborum soluta, vitae obcaecati temporibus! Ipsa consequuntur, laudantium sed blanditiis labore quasi, quaerat ratione accusantium iusto quod iure veniam debitis, repellendus cupiditate nostrum veritatis quibusdam ut. </p>
                            </div>
                        </div>
                        <!-- DESCRIPCIÓN CATACTERISTICAS EXTERNAS -->

                        <!-- DESCRIPCIÓN CARACTERISTICAS ALREDEDORES -->
                        <div class="col-12 p-0 ">
                            <div id="tres" class="collapse" aria-labelledby="dos" data-parent="#accordion">
                                <h5 class="font-weight-bold mt-3 d-inline-block linea position-relative">Características Alrededores </h5>
                                <p class="mb-5"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora placeat odio aliquid iusto? Assumenda nesciunt corrupti incidunt ratione facere excepturi dignissimos quasi voluptatum in laborum soluta, vitae obcaecati temporibus! Ipsa consequuntur, laudantium sed blanditiis labore quasi, quaerat ratione accusantium iusto quod iure veniam debitis, repellendus cupiditate nostrum veritatis quibusdam ut. </p>
                            </div>
                        </div>
                        <!-- DESCRIPCIÓN CARACTERISTICAS ALREDEDORES -->

                        <!-- VIDEO -->
                        <div class="col-12 p-0">
                            <div id="cuatro" class="collapse" aria-labelledby="dos" data-parent="#accordion">
                                <h5 class="font-weight-bold mt-3 d-inline-block linea position-relative"> Video </h5>
                                <iframe class="w-100" height="409" src="https://www.youtube.com/embed/tHt0UvoPrJI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <!-- VIDEO -->

                    </div>
                    <!----------INFORMACION BOTONES---------->
                </div>
            </div>
            <!-- BOTONES CARACTERISTICAS -->

            <!-- MAPA -->
            <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d254508.51641084516!2d-74.24789504734623!3d4.6482837170972555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9bfd2da6cb29%3A0x239d635520a33914!2zQm9nb3TDoQ!5e0!3m2!1ses!2sco!4v1580749761083!5m2!1ses!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            <!-- MAPA -->


        </div>
        <!-- SECCION IZQUIERDA -->

        <!-- SECCION DERECHA -->
        <div id="seccion_derecha" class="col-4">

            <!-- ASESOR -->
            <div class="asesor">
                <div>
                    <h4 class="text-center mt-3 font-weight-bold"> Contacto con el Asesor </h4>
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
            <div class="propiedades_similares mt-5 d-flex align-items-center justify-content-center flex-column">

                <h5 class="font-weight-bold"> Propiedades similares </h5>

                <section id="inmuebles2" class="position-relative container">

                    <div class="d-flex align-items-start justify-content-between flex-wrap">

                        <div class="col-12 py-3">

                            <div class="d-flex align-items-center caja_direccion">
                                <i class="mx-2 fas fa-map-marker-alt"></i>
                                <p> Dirección </p>
                            </div>
                            <div style="height:200px;" class="carta mb-5 ">
                                <a href="#" class="d-flex flex-wrap" id="inmuebles2">

                                    <!-- IMAGEN, GESTION Y TIPO DE INMUEBLE -->
                                    <div class="card2 col-12 p-0 position-relative">

                                        <div class="imagen w-100 h-100">
                                            <img src="images/casa2.jpg" class="card-img-top" alt="...">
                                        </div>

                                        <div class="caja_negra"> </div>

                                        <div class="tipo_inmueble d-flex align-items-center">
                                            <p class="ml-2"> tipo de inmueble </p>
                                        </div>

                                        <div class="tipo_gestion d-flex align-items-center">
                                            <p class="mr-2"> tipo de gestion </p>
                                        </div>

                                    </div>
                                    <!-- IMAGEN, GESTION Y TIPO DE INMUEBLE -->

                                    <!-- DESCRIPCIÓN DE INMUEBLE -->
                                    <div style="height:40px" class="contenido col-12 d-flex flex-column">


                                        <!-- ICONOS -->
                                        <div class="fondo_caracteristicas1 d-flex align-items-center justify-content-around">

                                            <div class="d-flex py-2 align-items-center">
                                                <i class="blanco fas fa-chart-area"></i>
                                                <p class="blanco pl-2">100m<sup>2</sup> </p>
                                            </div>

                                            <div class="d-flex py-2 align-items-center">
                                                <i class="blanco fas fa-bath"></i>
                                                <p class="blanco pl-2"> 5</p>
                                            </div>

                                            <div class="d-flex py-2 align-items-center">
                                                <i class="blanco fas fa-bed"></i>
                                                <p class="blanco pl-2"> 5 </p>
                                            </div>

                                            <div class="d-flex py-2 align-items-center">
                                                <i class="blanco fas fa-warehouse"></i>
                                                <p class="blanco pl-2"> 5 </p>
                                            </div>

                                        </div>
                                        <div class="fondo_caracteristicas2"></div>
                                        <div class="fondo_caracteristicas3"></div>



                                    </div>


                                </a>
                            </div>


                        </div>

                        <div class="col-12 py-3">

                            <div class="d-flex align-items-center caja_direccion">
                                <i class="mx-2 fas fa-map-marker-alt"></i>
                                <p> Dirección </p>
                            </div>

                            <div style="height:200px;" class="carta mb-5 ">
                                <a href="#" class="d-flex flex-wrap" id="inmuebles2">

                                    <!-- IMAGEN, GESTION Y TIPO DE INMUEBLE -->
                                    <div class="card2 col-12 p-0 position-relative">

                                        <div class="imagen w-100 h-100">
                                            <img src="images/casa1.jpg" class="card-img-top" alt="...">
                                        </div>

                                        <div class="caja_negra"> </div>

                                        <div class="tipo_inmueble d-flex align-items-center">
                                            <p class="ml-2"> tipo de inmueble </p>
                                        </div>

                                        <div class="tipo_gestion d-flex align-items-center">
                                            <p class="mr-2"> tipo de gestion </p>
                                        </div>

                                    </div>
                                    <!-- IMAGEN, GESTION Y TIPO DE INMUEBLE -->

                                    <!-- DESCRIPCIÓN DE INMUEBLE -->
                                    <div style="height:40px" class="contenido col-12 d-flex flex-column">


                                        <!-- ICONOS -->
                                        <div class="fondo_caracteristicas1 d-flex align-items-center justify-content-around">

                                            <div class="d-flex py-2 align-items-center">
                                                <i class="blanco fas fa-chart-area"></i>
                                                <p class="blanco pl-2">100m<sup>2</sup> </p>
                                            </div>

                                            <div class="d-flex py-2 align-items-center">
                                                <i class="blanco fas fa-bath"></i>
                                                <p class="blanco pl-2"> 5</p>
                                            </div>

                                            <div class="d-flex py-2 align-items-center">
                                                <i class="blanco fas fa-bed"></i>
                                                <p class="blanco pl-2"> 5 </p>
                                            </div>

                                            <div class="d-flex py-2 align-items-center">
                                                <i class="blanco fas fa-warehouse"></i>
                                                <p class="blanco pl-2"> 5 </p>
                                            </div>

                                        </div>
                                        <div class="fondo_caracteristicas2"></div>
                                        <div class="fondo_caracteristicas3"></div>



                                    </div>


                                </a>
                            </div>


                        </div>

                    </div>

                </section>
                <!-- PROPIEDADES DESTACADAS -->


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

    <script src="js/botones.js"></script>

</body>

</html>