<?php require 'variables/variables.php';
require 'controllers/detalleInmuebleController.php';
$page = "Detalle de Inmueble" ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include 'layout/1archivos_header.php' ?>
    <link rel="stylesheet" href="css/carousel.inmuebles.css">
    <link rel="stylesheet" href="mapas/leaflet.css" crossorigin="" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo 'http://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" />
    <meta property="og:title" content="<?php echo $r['Tipo_Inmueble'] . ' en ' . $r['Gestion']; ?>" />
    <meta property="og:description" content="Inmueble ubicado en: <?php echo $r['barrio'] . ', ' . $r['ciudad'] . ', ' . $r['depto']; ?> " />
    <meta property="og:image" itemprop="image" content="<?php echo $r['fotos'][0]['foto']; ?>" />
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <style>
        #map {
            height: 300px;
            z-index: 20;
        }

        .leaflet-control {
            z-index: 200;
        }

        .leaflet-control {
            z-index: 20;
        }
    </style>
    <title> <?php echo $page . ' | ' . $nombre_inmobiliaria ?> </title>

</head>

<body>
    <link itemprop="thumbnailUrl" href="<?php echo $r['fotos'][0]['foto']; ?>">
    <span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject">
        <link itemprop="url" href="<?php echo $r['fotos'][0]['foto']; ?>">
    </span>
    <!-- HEADER -->
    <section>
        <?php include 'layout/3header.php' ?>
    </section>
    <!-- HEADER -->

    <!-- BANNER -->
    <section id="banner" class="margin_top position-relative">

        <div class="imagen imagen_d_inmueble d-none d-xl-block"></div>
        <div class="imagen imagen_d_inmueble2 d-xl-none d-sm-block d-md-block d-lg-block"></div>

        <div id="fondo_negro"></div>

        <div class="contenido_banner d-flex align-items-center justify-content-center flex-column">
            <h1> Detalle Inmueble </h1>
            <p> <a href="index.php">Inicio</a> / <a href="inmuebles.php">Inmuebles</a> / Detalle de Inmueble </p>
        </div>

    </section>
    <!-- BANNER -->


    <section id="imagenes_inmueble" class="container d-flex flex-wrap mt-5">

        <!-- SECCION IZQUIERDA -->
        <div id="seccion_izquierda" class="col-12 col-lg-8 col-xl-8">

            <!-- CARRUSEL DE IMAGENES -->
            <div>
                <!-- IMAGENES -->
                <section class="mt-3" id="slide-detalle">
                    <?php
                    if (isset($r['fotos'])) {
                        for ($i = 0; $i < count($r['fotos']); $i++) {
                            echo '<div class="contenedor-img">
                                        <img src="' . $r['fotos'][$i]['foto'] . '" alt="">
                                    </div>';
                        }
                    } else {
                        echo  '<div class="contenedor-img">
                                        <img src="images/no_image.png" alt="">
                                    </div>';
                    }
                    ?>

                </section>
                <!-- IMAGENES -->

                <!-- MINIATURAS -->
                <section class="vertical-center-4 slider" id="miniaturas">

                    <?php
                    if (isset($r['fotos'])) {
                        for ($i = 0; $i < count($r['fotos']); $i++) {
                            echo '<div class="contenedor-img">
                                        <img src="' . $r['fotos'][$i]['foto'] . '" alt="">
                                    </div>';
                        }
                    } else {
                        echo  '<div class="contenedor-img">
                                        <img src="images/no_image.png" alt="">
                                    </div>';
                    }
                    ?>

                </section>
                <!-- MINIATURAS -->
            </div>
            <!-- CARRUSEL DE IMAGENES -->

            <!-- PRECIO Y DIRECCIÓN -->
            <div class=" d-flex flex-column justify-content-center blanco precio_codigo py-2 col-12">

                <div class="d-flex align-items-center justify-content-between flex-wrap">

                    <div class="p-0 d-flex col-12 col-lg-6 col-xl-6 d-block align-items-center">
                        <h5 class="m-0"> <?php echo $r['Tipo_Inmueble'] . ' /' . $r['Gestion']; ?> </h5>
                    </div>

                    <div class="d-flex align-items-baseline">
                        <i class="verde mr-2 fas fa-map-marker-alt"></i>
                        <h5 class="m-0"> <?php echo $r['barrio'] . ', ' . $r['ciudad']; ?> </h5>
                    </div>

                </div>
                <div class="d-flex align-items-center justify-content-between flex-wrap">
                    <div class="p-0 d-flex col-12 col-lg-6 col-xl-6 d-block align-items-center">
                        <h5 class="mt-2 m-0">
                            <?php if ($r['Gestion'] == 'Arriendo') {
                                echo '<span class="precio">$ ' . $r['ValorCanon'] . '</span>';
                            } else if ($r['Gestion'] == 'Venta') {
                                echo '<span class="precio">$ ' . $r['ValorVenta'] . '</span>';
                            } else {
                                echo '<span class="precio">$ ' . $r['ValorCanon'] . ' /$' . $r['ValorVenta'] . '</span>';
                            }
                            ?>
                        </h5>
                    </div>
                    <div class="d-flex align-items-baseline">
                        <h5>Administración $<?php echo $r['Administracion'] ?></h5>
                    </div>
                </div>


            </div>
            <!-- PRECIO Y DIRECCIÓN -->

            <!-- CARACTERISTICAS Y CÓDIGO -->
            <div class="py-2 caracteristicas d-flex align-items-center justify-content-between col-12 flex-wrap">

                <!-- CARACTERISTICAS -->
                <div class="d-flex flex-wrap col-12 col-md-9 col-lg-9 col-xl-9">

                    <!-- AREA -->
                    <div class="justify-content-center d-flex col-6 col-md-2 col-lg-2 col-xl-2 mr-0 mr-lg-2 mr-xl-3 align-items-center">
                        <i class="verde mr-1 fas fa-chart-area"> </i>
                        <p> <?php echo $r['AreaConstruida'] . 'm<sup>2'; ?> </p>
                    </div>
                    <!-- AREA -->

                    <!-- BAÑOS -->
                    <div class="justify-content-center d-flex col-6 col-md-2 col-lg-2 col-xl-2 mr-0 mr-lg-3 mr-xl-3 align-items-center">
                        <i class="verde mr-1 fas fa-bath"> </i>
                        <p> <?php echo $r['banos']; ?></php>
                        </p>
                    </div>
                    <!-- BAÑOS -->

                    <!-- ALCOBAS -->
                    <div class="justify-content-center d-flex col-6 col-md-2 col-lg-2 col-xl-2 mr-0 mr-lg-3 mr-xl-3 align-items-center">
                        <i class="verde mr-1 fas fa-bed"> </i>
                        <p> <?php echo  $r['alcobas']; ?> </p>
                    </div>
                    <!-- ALCOBAS -->

                    <!-- GARAJES -->
                    <div class="justify-content-center d-flex col-6 col-md-2 col-lg-2 col-xl-2 mr-0 mr-lg-3 mr-xl-3 align-items-center">
                        <i class="verde mr-1 fas fa-warehouse"> </i>
                        <p> <?php echo $r['garaje']; ?> </p>
                    </div>
                    <!-- GARAJES -->

                </div>
                <!-- CARACTERISTICAS -->

                <!-- CODIGO -->
                <div class="text-center text-lg-left text-xl-left col-12 col-md-3 col-lg-3 col-xl-3">
                    <p class="text-muted"> Código: <?php echo $co; ?> </p>
                </div>
                <!-- CODIGO -->

                <div class="my-2 col-12 p-0 d-flex align-items-center justify-content-around w-100">

                    <a href="https://simicrm.app/mcomercialweb/fichas_tecnicas/fichatec3.php?reg=986-<?php echo $co ?>" target="_blank" class="btn boton_principal"> Descargar ficha </a>

                    <div class="d-flex align-items-center flex-column">
                        <p>Compartir en: </p>
                        <div>
                            <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.dominguezparra.com%2Fdetalle_inmueble.php%3Fco%3D986-<?php echo $co; ?>" target="_blank"><i class="mx-1 fab fa-facebook-f"> </i></a>
                            <a href="<?php echo 'https://wa.me/?text=' . $r['Tipo_Inmueble'] . '%20en%20' . $r['Gestion'] . '%20en%20' . $r['ciudad'] . '-' . $r['depto'] . '%20http://www.dominguezparra.com/detalleInmueble.php?codigo%3d' . $co ?>" target="_blank"><i class="mx-1 fab fa-whatsapp"> </i></a>
                            <a href="<?php echo 'https://twitter.com/intent/tweet?url=http%3A%2F%2Fwww.dominguezparra.com%2Fdetalle_inmueble.php%3Fco%3D' . $co . '&text=' . $r['Tipo_Inmueble'] . '%20en%20' . $r['Gestion'] . '%20en%20' . $r['ciudad'] . '-' . $r['depto'] ?>" target="_blank"><i class="mx-1 fab fa-twitter"> </i></a>
                        </div>
                    </div>
                </div>


            </div>
            <!-- CARACTERISTICAS Y CÓDIGO -->

            <!-- DESCRIPCION -->
            <div class="mt-5">
                <h5 class="d-inline-block m-0 position-relative linea font-weight-bold"> Descripción </h5>
                <p class="my-3"> <?php echo  $r['descripcionlarga']; ?> </p>
            </div>
            <!-- DESCRIPCION -->

            <!-- BOTONES CARACTERISTICAS -->
            <div id="accordion">
                <div class="container p-0">
                    <div class="col-12 p-0">

                        <!----------BOTONES---------->

                        <div class="d-flex flex-wrap mb-3">

                            <div id="boton1" class="activo d-flex justify-content-center align-items-center boton_caracteristicas p-0 col-12 col-md-3 col-lg-3 col-xl-3" type="button" data-toggle="collapse" data-target="#uno" aria-expanded="true" aria-controls="collapseExample">
                                Características Internas
                            </div>

                            <div id="boton2" class="d-flex justify-content-center align-items-center boton_caracteristicas p-0 col-12 col-md-3 col-lg-3 col-xl-3" type="button" data-toggle="collapse" data-target="#dos" aria-expanded="false" aria-controls="collapseExample">
                                Características Externas
                            </div>

                            <div id="boton3" class="d-flex justify-content-center align-items-center boton_caracteristicas p-0 col-12 col-md-4 col-lg-4 col-xl-4" type="button" data-toggle="collapse" data-target="#tres" aria-expanded="false" aria-controls="collapseExample">
                                Características Alrededores
                            </div>

                            <div id="boton4" class="d-flex justify-content-center align-items-center boton_caracteristicas p-0 col-12 col-md-2 col-lg-2 col-xl-2" type="button" data-toggle="collapse" data-target="#cuatro" aria-expanded="false" aria-controls="collapseExample">
                                Video
                            </div>

                        </div>

                        <!----------BOTONES---------->

                        <!----------INFORMACION BOTONES---------->

                        <!-- DESCRIPCIÓN CARACTERISTICAS INTERNAS -->
                        <div class="col-12 p-0">

                            <div id="uno" class="collapse show" aria-labelledby="uno" data-parent="#accordion">

                                <?php
                                if (count($r['caracteristicasInternas']) > 0) {
                                    echo
                                        '<div class="col-md-12" style="margin-bottom: 12px;">
                                        <h5 class="font-weight-bold mt-3 d-inline-block linea position-relative">Características Internas </h5>
                                        <ul>';
                                    for ($i = 0; $i < count($r['caracteristicasInternas']); $i++) {
                                        $caracteristicas = ltrim($r['caracteristicasInternas'][$i]['Descripcion']);
                                        echo '<li>' . $caracteristicas . '</li>';
                                    }
                                    echo  '</ul>
                                </div>
                            ';
                                }
                                ?>
                            </div>
                        </div>
                        <!-- DESCRIPCIÓN CARACTERISTICAS INTERNAS -->

                        <!-- DESCRIPCIÓN CATACTERISTICAS EXTERNAS -->
                        <div class="col-12 p-0">
                            <div id="dos" class="collapse" aria-labelledby="dos" data-parent="#accordion">
                                <?php
                                if (count($r['caracteristicasExternas']) > 0) {
                                    echo
                                        '<div class="col-md-12" style="margin-bottom: 12px;">
                                        <h5 class="font-weight-bold mt-3 d-inline-block linea position-relative">Características Externas </h5>
                                        <ul>';
                                    for ($i = 0; $i < count($r['caracteristicasExternas']); $i++) {
                                        $caracteristicas = ltrim($r['caracteristicasExternas'][$i]['Descripcion']);
                                        echo '<li>' . $caracteristicas . '</li>';
                                    }
                                    echo  '</ul>
                                </div>
                            ';
                                }
                                ?>
                            </div>
                        </div>
                        <!-- DESCRIPCIÓN CATACTERISTICAS EXTERNAS -->

                        <!-- DESCRIPCIÓN CARACTERISTICAS ALREDEDORES -->
                        <div class="col-12 p-0 ">
                            <div id="tres" class="collapse" aria-labelledby="dos" data-parent="#accordion">
                                <?php
                                if (count($r['caracteristicasAlrededores']) > 0) {
                                    echo
                                        '<div class="col-md-12" style="margin-bottom: 12px;">
                                        <h5 class="font-weight-bold mt-3 d-inline-block linea position-relative">Características Alrededores </h5>
                                        <ul>';
                                    for ($i = 0; $i < count($r['caracteristicasAlrededores']); $i++) {
                                        $caracteristicas = ltrim($r['caracteristicasAlrededores'][$i]['Descripcion']);
                                        echo '<li>' . $caracteristicas . '</li>';
                                    }
                                    echo  '</ul>
                                </div>
                            ';
                                }
                                ?>
                            </div>
                        </div>
                        <!-- DESCRIPCIÓN CARACTERISTICAS ALREDEDORES -->

                        <!-- VIDEO -->
                        <div class="col-12 p-0">
                            <div id="cuatro" class="collapse" aria-labelledby="dos" data-parent="#accordion">
                                <div id="referencia_inmueble" class="col-md-12 mt-3  ">
                                    <?php if ($r['video'] != "") {
                                        echo
                                            ' <h5 class="font-weight-bold mt-3 d-inline-block linea position-relative"> Video </h5>
                                    <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Video</h5>
                                    <div class="row">
                                        <div class="col-12 col-md-4">
                                        <iframe class="w-100" height="409" src="' . $r['video'] . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                ';
                                    } ?>

                                </div>
                            </div>
                        </div>
                        <!-- VIDEO -->

                    </div>
                    <!----------INFORMACION BOTONES---------->
                </div>
            </div>
            <!-- BOTONES CARACTERISTICAS -->

            <!-- MAPA -->
            <div class="col-md-12 mb-3">
                <h4 class="property-single-detail-title"><strong>Mapa de Ubicación</strong></h4>
                <div class="card mapa_tamaño">
                    <div class="">
                        <div id="map" class="w-100"></div>
                    </div>
                </div>
            </div>
            <!-- MAPA -->


        </div>
        <!-- SECCION IZQUIERDA -->

        <!-- SECCION DERECHA -->
        <div id="seccion_derecha" class="col-12 col-lg-4 col-xl-4">

            <!-- ASESOR -->
            <div class="asesor">
                <div>
                    <h4 class="text-center my-3 font-weight-bold"> Contacto con Nuestros Asesores </h4>
                </div>

                <a href="tel:<?php echo $datos_contacto['principal']['telefono_fijo']['link'] ?>" class="d-flex align-items-center  my-2">
                    <i class="verde mr-2 fas fa-phone"> </i>
                    <p> Oficina principal: <?php echo $datos_contacto['principal']['telefono_fijo']['imprimir'] ?> </p>
                </a>

             <!--   <a href="tel:<?php echo $datos_contacto['cabecera']['telefono_fijo']['link'] ?>" class="d-flex align-items-center  my-2">
                    <i class="verde mr-2 fas fa-phone"> </i>
                    <p> Oficina Cabecera: <?php echo $datos_contacto['cabecera']['telefono_fijo']['imprimir'] ?> </p>
                </a>

                <a href="tel:<?php echo $datos_contacto['cañaveral']['telefono_fijo']['link'] ?>" class="d-flex align-items-center  my-2">
                    <i class="verde mr-2 fas fa-phone"> </i>
                    <p> Oficina Cañaveral: <?php echo $datos_contacto['cañaveral']['telefono_fijo']['imprimir'] ?> </p>
                </a> -->

                <a href="tel:<?php echo $datos_contacto['principal']['celular']['link'] ?>" class="d-flex align-items-center  my-2">
                    <i class="verde mr-2 fas fa-mobile-alt"> </i>
                    <p> Celular: <?php echo $datos_contacto['principal']['celular']['imprimir'] ?> </p>
                </a> 

            </div>
            <!-- ASESOR -->

            <!-- PROPIEDADES SIMILARES -->
            <div class="propiedades_similares mt-5 d-flex align-items-center justify-content-center flex-column">

                <h5 class="font-weight-bold"> Propiedades similares </h5>

                <section id="inmuebles2" class="mb-5 position-relative container">

                    <div class="d-flex align-items-center justify-content-center flex-wrap">
                        <?php similares($r['IdCiudad'], $r['IdTpInm']); ?>
                    </div>

                </section>
                <!-- PROPIEDADES DESTACADAS -->


                <!-- PROPIEDADES SIMILARES -->

            </div>
            <!-- SECCION DERECHA -->

        </div>


    </section>


    <!-- FOOTER -->
    <section>
        <?php include 'layout/5footer.php' ?>
    </section>
    <!-- FOOTER -->

    <?php include 'layout/2archivos_footer.php' ?>
    <script src="js/slick.min.js"></script>
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
    <!-- mapa del inmueble -->
    <script src="mapas/leaflet.js" crossorigin=""></script>
    <script>
        var map = L.map('map').setView([<?php echo $r['latitud']; ?>, <?php echo $r['longitud'] ?>], 14);

        L.tileLayer('https://api.maptiler.com/maps/streets/256/{z}/{x}/{y}.png?key=1rAGHv3KcO1nrS6S9cgI', {
            attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">© MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">© OpenStreetMap contributors</a>'
        }).addTo(map);

        L.marker([<?php echo $r['latitud']; ?>, <?php echo $r['longitud'] ?>]).addTo(map)
            .bindPopup('<img src="<?php echo $r['fotos'][0]['foto'] ?>"])" alt="" width="55px" height="auto"><br>Ubicación')
            .openPopup();
    </script>


</body>

</html>