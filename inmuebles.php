<?php require 'variables/variables.php';
require 'controllers/inmueblesController.php';
$page = "Inmuebles" ?>
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

    <!-- BANNER -->
    <section id="banner" class="margin_top position-relative">

        <div class="imagen imagen_inmuebles d-none d-xl-block"> </div>
        <div class="imagen imagen_inmuebles2 d-xl-none d-sm-block d-md-block d-lg-block"> </div>

        <div id="fondo_negro"></div>

        <div class="contenido_banner d-flex align-items-center justify-content-center flex-column">
            <h1> Inmuebles </h1>
            <p> <a href="index.php">Inicio</a> / Inmuebles </p>
        </div>

    </section>
    <!-- BANNER -->

    <!-- INMUEBLES -->

    <!-- <section id="buscador" class="formularioz">

        <div id="" class="rounded-bottom py-3 d-flex flex-wrap align-items-center justify-content-center col-12 contenido_buscador formulario4">

            <div class="col-12 col-md-6 col-lg-3 col-xl-3 form-group f11">
                <input placeholder="Código" type="number" class="form-control f1 codigo_buscar" id="codigo_buscar" aria-describedby="emailHelp">
            </div>

            <div class="col-12 col-md-6 col-lg-3 col-xl-3 form-group f11">
                <select class="form-control f1 select-min tipo_inmueble_buscar" id="tipo_inmueble_buscar">
                    <option selected default> Tipo de Inmueble </option>
                </select>
            </div>

            <div class="col-12 col-md-6 col-lg-3 col-xl-3 form-group f11">
                <select class="form-control f1 select-min tipo_gestion_buscar" id="tipo_gestion_buscar">
                    <option selected default> Tipo de Gestión </option>
                </select>
            </div>

            <div class="col-12 col-md-6 col-lg-3 col-xl-3 form-group f11">
                <select class="form-control f1 ciudad_buscar" id="ciudad_buscar">
                    <option selected default> Ciudad </option>
                </select>
            </div>

            <div class="col-12 col-md-6 col-lg-3 col-xl-3 form-group f11">
                <select class="form-control f1 barrio_buscar" id="barrio_buscar">
                    <option selected default> Barrio </option>
                </select>
            </div>


            <div class="col-12 col-md-6 col-lg-3 col-xl-3 form-group f11">
                <select id="price" class="form-control f1 price">
                    <option value="0">Precio</option>
                    <option value="1">$ 500.000 a $ 1.000.000</option>
                    <option value="2">$ 1.000.000 a $ 5.000.000</option>
                    <option value="3">$ 5.000.000 a $ 8.000.000</option>
                    <option value="4">$ 8.000.000 a $ 30.000.000</option>
                    <option value="5">$ 30.000.000 a $ 50.000.000</option>
                    <option value="6">$ 50.000.000 a $ 300.000.000</option>
                    <option value="7">$ 300.000.000 a $ 600.000.000</option>
                    <option value="8">$ 600.000.000 a $ 1.000.000.000</option>
                    <option value="9">$1.000.000.000 a $ 2.000.000.000</option>
                    <option value="10">$2.000.000.000 a $ 12.000.000.000</option>
                </select>
            </div>


            <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                <div class="wrapper">
                    <div class="range-slider">
                        <input type="text" class="js-range-slider" value="" />
                    </div>
                    <div class="extra-controls form-inline">
                        <div class="form-group" style="display:none;">
                            <input type="text" class="js-input-from form-control" id="area_minima_buscar" value="0" aria-describedby="emailHelp" />
                            <input type="text" class="js-input-to form-control" id="area_maxima_buscar" value="0" aria-describedby="emailHelp" />
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-12 col-md-6 col-lg-3 col-xl-3 form-group f11">
                <input placeholder="Baños" type="number" class="form-control f1 banios_buscar" id="banios_buscar" aria-describedby="emailHelp">
            </div>

            <div class="col-12 col-md-6 col-lg-3 col-xl-3 form-group f11">
                <input placeholder="Alcobas" type="number" class="form-control f1 alcobas_buscar" id="alcobas_buscar" aria-describedby="emailHelp">
            </div>

            <div class="col-12 col-md-6 col-lg-3 col-xl-3 form-group f11">
                <input placeholder="Garajes " type="number" class="form-control f1 garajes_buscar " id="garajes_buscar" aria-describedby="emailHelp">
            </div>
            <div class="col-12 col-md-6 col-lg-3 col-xl-3 form-group f11">
                <button type="button" id="buscar" class="col-12 btn boton_principal buscar"> Buscar </button>
            </div>


        </div>
    </section> -->

    <section id="inmuebles2" class="container">

        <div class=" d-flex align-items-start justify-content-between flex-wrap">


            <!-- BUSCADOR -->
            <section id="buscador" class="sticky-top col-3 rounded formularioz1 rounded top_buscar">

                <div class="col-12 p-0">
                    <div class="row ">

                        <div class="col-12 form-group pt-3 f11 pl-0">
                            <input placeholder="Código" type="number" class="form-control f1" id="codigo_buscar" aria-describedby="emailHelp">
                        </div>

                        <div class="col-12 form-group f11 pl-0">
                            <select class="form-control f1" id="tipo_inmueble_buscar">
                                <option selected default> Tipo de Inmueble </option>
                            </select>
                        </div>
                        <div class="col-12 form-group f11 pl-0">
                            <select class="form-control f1" id="tipo_gestion_buscar">
                                <option selected default> Tipo de Gestión </option>
                            </select>
                        </div>
                        <div class="col-6 form-group f11 pl-0">
                            <select class="form-control f1" id="ciudad_buscar">
                                <option selected default> Ciudad </option>
                            </select>
                        </div>

                        <div class="col-6 form-group f11 pl-0">
                            <select class="form-control f1" id="barrio_buscar">
                                <option selected default> Barrio </option>
                            </select>
                        </div>
                        <div class="col-12 form-group f11 pl-0">
                            <select id="price" class="form-control f1">
                                <option value="0">Precio</option>
                                <option value="1">$ 500.000 a $ 1.000.000</option>
                                <option value="2">$ 1.000.000 a $ 5.000.000</option>
                                <option value="3">$ 5.000.000 a $ 8.000.000</option>
                                <option value="4">$ 8.000.000 a $ 30.000.000</option>
                                <option value="5">$ 30.000.000 a $ 50.000.000</option>
                                <option value="6">$ 50.000.000 a $ 300.000.000</option>
                                <option value="7">$ 300.000.000 a $ 600.000.000</option>
                                <option value="8">$ 600.000.000 a $ 1.000.000.000</option>
                                <option value="9">$1.000.000.000 a $ 2.000.000.000</option>
                                <option value="10">$2.000.000.000 a $ 12.000.000.000</option>
                            </select>
                        </div>

                        <div class="col-12 pl-0">
                            <div class="wrapper">
                                <div class="range-slider">
                                    <input type="text" class="js-range-slider" value="" />
                                </div>
                                <div class="extra-controls form-inline">
                                    <div class="form-group" style="display:none;">
                                        <input type="text" class="js-input-from form-control" id="area_minima_buscar" value="0" aria-describedby="emailHelp" />
                                        <input type="text" class="js-input-to form-control" id="area_maxima_buscar" value="0" aria-describedby="emailHelp" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 form-group f11 pl-0">
                            <input placeholder="Baños" type="number" class="form-control f1" id="banios_buscar" aria-describedby="emailHelp">
                        </div>

                        <div class="col-6 form-group f11 pl-0">
                            <input placeholder="Alcobas" type="number" class="form-control f1" id="alcobas_buscar" aria-describedby="emailHelp">
                        </div>

                        <div class="col-12 form-group f11 pl-0">
                            <input placeholder="Garajes " type="number" class="form-control f1" id="garajes_buscar" aria-describedby="emailHelp">
                        </div>

                        <div class="col-12 pb-3 d-flex align-items center justify-content-center pl-0">
                            <button type="button" class="col-12 btn boton_principal" id="buscar1"> Buscar </button>
                        </div>

                    </div>
                </div>

            </section>
            <!-- BUSCADOR -->



            <div class="col-12 col-lg-9 col-xl-9 cont_cards">
                <h2 class="text-center mb-5"> Inmuebles Disponibles </h2>
                <!-- propiedades -->
                <?php
                if (is_array($api)) {
                    listar_inmuebles($api['Inmuebles']);
                } else {
                    echo '<div class="col-12">
                        <h2 class="text-center" >No se encontraron inmuebles</h2>
                    </div>';
                }
                ?>
            </div>
        </div>


        <!-- PAGINADOR -->
        <div class="col-12 text-center">
            <?php if (is_array($api)) : ?>
                <ul class="pagination mt-4 align-items-end justify-content-center">
                    <?php if ($paginator->getPrevUrl()) : ?>
                        <li class="page-item"><a href="<?php echo $paginator->getPrevUrl(); ?>" class="page-link">&laquo; Atras</a></li>
                    <?php endif; ?>
                    <?php foreach ($paginator->getPages() as $page) : ?>
                        <?php if ($page['url']) : ?>
                            <li <?php echo $page['isCurrent'] ? 'class="page-item active"' : ''; ?>>
                                <a href="<?php echo $page['url']; ?>" class="page-link"><?php echo $page['num']; ?></a>
                            </li>
                        <?php else : ?>
                            <li class="page-item disabled"><span><?php echo $page['num']; ?></span></li>
                        <?php endif; ?>
                    <?php endforeach; ?>

                    <?php if ($paginator->getNextUrl()) : ?>
                        <li class="page-item"><a href="<?php echo $paginator->getNextUrl(); ?>" class="page-link">Siguiente &raquo;</a></li>
                    <?php endif; ?>
                </ul>
            <?php endif; ?>
        </div>
        <!-- PAGINADOR -->



    </section>
    <!-- INMUEBLES -->




    </div>


    </section>
    <!-- INMUEBLES -->

    <!-- FOOTER -->
    <section>
        <?php include 'layout/5footer.php' ?>
    </section>
    <!-- FOOTER -->

    <?php include 'layout/2archivos_footer.php' ?>
    <!-- buscador -->
    <script src="conexion_api/validadores.js"></script>
    <script src="conexion_api/buscador.js"></script>
    <!-- barra de rangos -->
    <script src="js/rangos.js"></script>
    <script src="js/validacion_buscador.js"></script>

</body>

</html>