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

    <style>

    </style>

</head>

<body>


    <section id="inmuebles2" style="padding-bottom:100px;" class="my-5 container">

        <div class=" d-flex align-items-start justify-content-center flex-wrap">

            <div class="col-4">
                <div style="height:200px;" class="carta mb-5 ">
                    <a href="./detalle_inmueble.php?co=' . $codigo . '" class="d-flex flex-wrap" id="inmuebles2">

                        <!-- IMAGEN, GESTION Y TIPO DE INMUEBLE -->
                        <div class="card2 col-12 p-0 position-relative">

                            <div class="imagen w-100 h-100">
                                <img src="images/no_image.png" class="card-img-top" alt="...">
                            </div>

                            <div class="caja_negra"> </div>

                            <div class="tipo_inmueble d-flex align-items-center">
                                <p class="ml-2"> Apartamento </p>
                            </div>

                            <div class="tipo_gestion d-flex align-items-center">
                                <p class="mr-2"> Arriendo </p>
                            </div>

                        </div>
                        <!-- IMAGEN, GESTION Y TIPO DE INMUEBLE -->

                        <!-- DESCRIPCIÓN DE INMUEBLE -->
                        <div style="height:120px" class="contenido col-12 d-flex flex-column">

                            <div>
                                <div class="d-flex pl-3 mt-3 align-items-baseline">
                                    <i class="mr-1 fas fa-map-marker-alt"></i>
                                    <h4> Bogota, Usme </h4>
                                </div>

                                <div class="ml-3 d-flex">
                                    <p class="mr-5"> $1.000.000.000 </p>
                                    <p class="text-muted"> Código: 12345 </p>
                                </div>

                            </div>

                            <!-- ICONOS -->
                            <div class="fondo_caracteristicas1 d-flex align-items-center justify-content-around">

                                <div class="d-flex py-2 align-items-center">
                                    <i class="blanco fas fa-chart-area"></i>
                                    <p class="blanco pl-2">  200m<sup>2</sup> </p>
                                </div>

                                <div class="d-flex py-2 align-items-center">
                                    <i class="blanco fas fa-bath"></i>
                                    <p class="blanco pl-2"> 5 </p>
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











    <?php include 'layout/2archivos_footer.php' ?>

    <script src="js/servicios.js"></script>


</body>

</html>