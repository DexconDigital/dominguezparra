<?php require 'variables/variables.php';
$page = "Servicios" ?>
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
            <img src="images/banner_servicio.jpg" alt="">
        </div>
        <div id="fondo_negro"></div>

        <div class="contenido_banner d-flex align-items-center justify-content-center flex-column">
            <h1> Servicios </h1>
            <p> <a href="index.php">Inicio</a> / Servicios </p>
        </div>

    </section>
    <!-- BANNER -->

    <!-- SERVICIOS -->
    <section id="servicios">

    
        <div class="accordion" id="accordionExample">

            <div class="card">
                <div class="card-header" id="headingOne">
                    <div class="container">
                        <h2 class="mb-0">
                            <button class="p-0 col-12 btn btn-link" type="button" data-toggle="collapse" data-target="#uno" aria-expanded="true" aria-controls="collapseOne">
                                <div class="d-flex align-items-center justify-content-between">

                                    <div class="d-flex">
                                        <i class="iconos mr-2 <?php echo $iconos_servicios['arrendamientos'] ?>"></i>
                                        <h2 class="text-center m-0"> <?php echo $texto_servicios['arrendamientos']['titulo'] ?> </h2>
                                    </div>
                                    <div>
                                        <p> Ver Más. . . </p>
                                    </div>

                                </div>
                            </button>
                        </h2>
                    </div>
                </div>

                <div id="uno" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="container">
                            <p> <?php echo $texto_servicios['arrendamientos']['parrafos']['0'] ?> </p>
                            <p> <?php echo $texto_servicios['arrendamientos']['parrafos']['1'] ?> </p>
                            <p> <?php echo $texto_servicios['arrendamientos']['parrafos']['2'] ?> </p>
                            <p> <?php echo $texto_servicios['arrendamientos']['parrafos']['3'] ?> </p>
                            <p> <?php echo $texto_servicios['arrendamientos']['parrafos']['4'] ?> </p>
                            <p> <?php echo $texto_servicios['arrendamientos']['parrafos']['5'] ?> </p>
                            <p> <?php echo $texto_servicios['arrendamientos']['parrafos']['6'] ?> </p>
                            <p> <?php echo $texto_servicios['arrendamientos']['parrafos']['7'] ?> </p>
                            <p> <?php echo $texto_servicios['arrendamientos']['parrafos']['8'] ?> </p>
                            <p> <?php echo $texto_servicios['arrendamientos']['parrafos']['9'] ?> </p>
                            <p> <?php echo $texto_servicios['arrendamientos']['parrafos']['10'] ?> </p>
                            <p> <?php echo $texto_servicios['arrendamientos']['parrafos']['11'] ?> </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingOne">
                    <div class="container">
                        <h2 class="mb-0">
                            <button class="p-0 col-12 btn btn-link" type="button" data-toggle="collapse" data-target="#dos" aria-expanded="true" aria-controls="collapseOne">
                                <div class="d-flex align-items-center justify-content-between">

                                    <div class="d-flex">
                                        <i class="iconos mr-2 <?php echo $iconos_servicios['ventas'] ?>"></i>
                                        <h2 class="text-center m-0"> <?php echo $texto_servicios['ventas']['titulo'] ?> </h2>
                                    </div>
                                    <div>
                                        <p> Ver Más. . . </p>
                                    </div>

                                </div>
                            </button>
                        </h2>
                    </div>
                </div>

                <div id="dos" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="container">
                            <p> <?php echo $texto_servicios['ventas']['parrafos']['0'] ?> </p>
                            <p> <?php echo $texto_servicios['ventas']['parrafos']['1'] ?> </p>
                            <p> <?php echo $texto_servicios['ventas']['parrafos']['2'] ?> </p>
                            <p> <?php echo $texto_servicios['ventas']['parrafos']['3'] ?> </p>
                            <p> <?php echo $texto_servicios['ventas']['parrafos']['4'] ?> </p>
                            <p> <?php echo $texto_servicios['ventas']['parrafos']['5'] ?> </p>
                            <p> <?php echo $texto_servicios['ventas']['parrafos']['6'] ?> </p>
                            <p> <?php echo $texto_servicios['ventas']['parrafos']['7'] ?> </p>
                            <p> <?php echo $texto_servicios['ventas']['parrafos']['8'] ?> </p>
                            <p> <?php echo $texto_servicios['ventas']['parrafos']['9'] ?> </p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingOne">
                    <div class="container">
                        <h2 class="mb-0">
                            <button class="p-0 col-12 btn btn-link" type="button" data-toggle="collapse" data-target="#tres" aria-expanded="true" aria-controls="collapseOne">
                                <div class="d-flex align-items-center justify-content-between">

                                    <div class="d-flex">
                                        <i class="iconos mr-2 <?php echo $iconos_servicios['propiedad'] ?>"></i>
                                        <h2 class="text-center m-0"> <?php echo $texto_servicios['propiedad']['titulo'] ?> </h2>
                                    </div>
                                    <div>
                                        <p> Ver Más. . . </p>
                                    </div>

                                </div>
                            </button>
                        </h2>
                    </div>
                </div>

                <div id="tres" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="container">
                            <p> <?php echo $texto_servicios['propiedad']['parrafos'] ?> </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingOne">
                    <div class="container">
                        <h2 class="mb-0">
                            <button class="p-0 col-12 btn btn-link" type="button" data-toggle="collapse" data-target="#cuatro" aria-expanded="true" aria-controls="collapseOne">
                                <div class="d-flex align-items-center justify-content-between">

                                    <div class="d-flex">
                                        <i class="iconos mr-2 <?php echo $iconos_servicios['avaluos'] ?>"></i>
                                        <h2 class="text-center m-0"> <?php echo $texto_servicios['avaluos']['titulo'] ?> </h2>
                                    </div>
                                    <div>
                                        <p> Ver Más. . . </p>
                                    </div>

                                </div>
                            </button>
                        </h2>
                    </div>
                </div>

                <div id="cuatro" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="container">
                            <p> <?php echo $texto_servicios['avaluos']['parrafos']['0'] ?> </p>
                            <p> <?php echo $texto_servicios['avaluos']['parrafos']['1'] ?> </p>
                            <p> <?php echo $texto_servicios['avaluos']['parrafos']['2'] ?> </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingOne">
                    <div class="container">
                        <h2 class="mb-0">
                            <button class="p-0 col-12 btn btn-link" type="button" data-toggle="collapse" data-target="#cinco" aria-expanded="true" aria-controls="collapseOne">
                                <div class="d-flex align-items-center justify-content-between">

                                    <div class="d-flex">
                                        <i class="iconos mr-2 <?php echo $iconos_servicios['asesoria'] ?>"></i>
                                        <h2 class="text-center m-0"> <?php echo $texto_servicios['asesoria']['titulo'] ?> </h2>
                                    </div>
                                    <div>
                                        <p> Ver Más. . . </p>
                                    </div>

                                </div>
                            </button>
                        </h2>
                    </div>
                </div>

                <div id="cinco" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="container">
                            <p> <?php echo $texto_servicios['asesoria']['parrafo'] ?> </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- SERVICIOS -->



    <!-- FOOTER -->
    <section>
        <?php include 'layout/5footer.php' ?>
    </section>
    <!-- FOOTER -->

    <?php include 'layout/2archivos_footer.php' ?>


</body>

</html>