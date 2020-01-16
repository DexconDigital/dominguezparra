<?php require 'variables/variables.php';
$page = "Inmuebles" ?>
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

        <div class="imagen imagen_inmuebles"> </div>
        
        <div id="fondo_negro"></div>

        <div class="contenido_banner d-flex align-items-center justify-content-center flex-column">
            <h1> Inmuebles </h1>
            <p> <a href="index.php">Inicio</a> / Inmuebles </p>
        </div>

    </section>
    <!-- BANNER -->

    <!-- BUSCADOR -->
    <section id="buscador">
        <?php include 'layout/4buscador.php' ?>
    </section>
    <!-- BUSCADOR -->

    <!-- INMUEBLES -->
    <section id="propiedades_destacadas" class="mt-5 mb-5">

        <h2 class="w-100 d-flex justify-content-center mb-5"> Inmuebles Disponibles </h2>

        <div class="container d-flex align-items-center justify-content-between flex-wrap">

            <!-- CARD -->
            <div class="card p-0 col-4 mb-5">

                <a class="border rounded mx-2" href="#">
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
                                <i class="blanco fas fa-dollar-sign"></i>
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
            <div class="card p-0 col-4 mb-5">

                <a class="border rounded mx-2" href="#">
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
                                <i class="blanco fas fa-dollar-sign"></i>
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
            <div class="card p-0 col-4 mb-5">

                <a class="border rounded mx-2" href="#">
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
                                <i class="blanco fas fa-dollar-sign"></i>
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
            <div class="card p-0 col-4 mb-5">

                <a class="border rounded mx-2" href="#">
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
                                <i class="blanco fas fa-dollar-sign"></i>
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
            <div class="card p-0 col-4 mb-5">

                <a class="border rounded mx-2" href="#">
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
                                <i class="blanco fas fa-dollar-sign"></i>
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
            <div class="card p-0 col-4 mb-5">

                <a class="border rounded mx-2" href="#">
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
                                <i class="blanco fas fa-dollar-sign"></i>
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
    <!-- INMUEBLES -->













    <!-- FOOTER -->
    <section>
        <?php include 'layout/5footer.php' ?>
    </section>
    <!-- FOOTER -->

    <?php include 'layout/2archivos_footer.php' ?>

</body>

</html>