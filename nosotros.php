<?php require 'variables/variables.php';
$page = "Nosotros" ?>
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

        <div class="imagen imagen_nosotros d-none d-xl-block"> </div>
        <div class="imagen imagen_nosotros2 d-xl-none d-sm-block d-md-block d-lg-block"> </div>

        <div id="fondo_negro"></div>

        <div class="contenido_banner d-flex align-items-center justify-content-center flex-column">
            <h1> Nosotros </h1>
            <p> <a href="index.php">Inicio</a> / Nosotros </p>
        </div>

    </section>
    <!-- BANNER -->

    <!-- TEXTOS NOSOTROS -->
    <section id="textos">

        <!-- NOSOTROS -->
        <div class="container mt-5">

            <!-- QUIENES SOMOS -->
            <div class="col-12 p-0 d-flex align-items-center flex-wrap">

                <!-- TEXTO -->
                <div class="order-2 order-lg-1 order-xl-1 col-12 col-lg-6 col-xl-6 p-0 pl-lg-0 pl-xl-0">

                    <div class="col-12 px-3 pl-lg-0 pl-xl-0 text-justify texto mt-4 mt-lg-0 mt-xl-0">
                        <h5 class="mb-3 d-inline-block m-0 position-relative linea font-weight-bold"> Sobre Nosotros </h5>

                        <p> <?php echo $texto_quienes_somos['nosotros']['parrafos']['0'] ?> </p>
                        <p class="mt-2"> <?php echo $texto_quienes_somos['nosotros']['parrafos']['1'] ?> </p>
                        <p class="mt-2"> <?php echo $texto_quienes_somos['nosotros']['parrafos']['2'] ?> </p>
                    </div>


                    <div class="col-12 px-3 pl-lg-0 pl-xl-0 mt-4 texto">
                        <h5 class="mb-3 d-inline-block m-0 position-relative linea font-weight-bold"> Matriculas Arrendador </h5>

                        <p> <span class='viñetas mr-2'>»</span>MA 023 Oficio 192/2003 - Bucaramanga </p>
                        <p> <span class='viñetas mr-2'>»</span>R.I 009-2009/ Resolución 0073/2009 - Floridablanca </p>
                        <p> <span class='viñetas mr-2'>»</span>M.A 0030/ Resolución 0030/2014 - Piedecuesta </p>
                        <p> <span class='viñetas mr-2'>»</span>M.A 078/ Resolución 078/2014 – Girón </p>

                    </div>

                </div>
                <!-- TEXTO -->

                <!-- IMAGEN -->
                <div id="quienes_somos_imagen" class="order-1 order-lg-2 order-xl-2 col-12 col-lg-6 col-xl-6 p-0 pr-lg-0 pr-xl-0">
                    <div class="d-flex align-items-center justify-content-center imagen"> <img class="rounded" src="images/imagen_nosotros5.png" alt=""></div>
                </div>
                <!-- IMAGEN -->

                <!-- IMAGEN (RESPONSIVE1)-->
                <div id="quienes_somos_imagen_responsive" class="order-1 order-lg-2 order-xl-2 col-12 col-lg-6 col-xl-6 p-0 pr-lg-0 pr-xl-0">
                    <div class="d-flex align-items-center justify-content-center imagen"> <img class="w-100 h-100 rounded" src="images/quienes_somos_responsive.jpg" alt=""></div>
                </div>
                <!-- IMAGEN (RESPONSIVE1)-->


            </div>
            <!-- QUIENES SOMOS -->


            <!-- MISION/VISION -->
            <div class="col-12 p-0 d-flex mt-5 flex-wrap">

                <!-- IMAGEN -->
                <div id="mision_vision_imagen" class="col-12 col-xl-6 col-lg-6 p-0 pl-lg-0 pl-xl-0 pr-0 pr-lg-3 pr-xl-3">
                    <div class="d-flex align-items-center justify-content-center w-100 h-100"> <img class="w-100 h-100 rounded" src="images/misionyvision.jpg" alt=""></div>
                </div>
                <!-- IMAGEN -->

                <!-- IMAGEN (RESPONSIVE2)-->
                <div id="mision_vision_imagen_responsive" class="col-12 col-xl-6 col-lg-6 p-0 pl-lg-0 pl-xl-0 pr-0 pr-lg-3 pr-xl-3">
                    <div class="d-flex align-items-center justify-content-center w-100 h-100"> <img class="w-100 h-100 rounded" src="images/mision_responsive.jpg" alt=""></div>
                </div>
                <!-- IMAGEN (RESPONSIVE2)-->



                <!-- TEXTO -->
                <div class="col-12 col-xl-6 col-lg-6 p-0 pr-lg-0 pr-xl-0">

                    <div class="col-12 text-justify px-3 pl-lg-0 pl-xl-0 mt-4 mt-lg-0 mt-xl-0 texto">
                        <h5 class="mb-3 d-inline-block m-0 position-relative linea font-weight-bold"> <?php echo $texto_quienes_somos['mision']['titulo'] ?> </h5>
                        <p> <?php echo $texto_quienes_somos['mision']['parrafo'] ?> </p>
                    </div>

                    <div class="col-12 text-justify mt-4 px-3 pl-lg-0 pl-xl-0 texto ">
                        <h5 class="mb-3 d-inline-block m-0 position-relative linea font-weight-bold"> <?php echo $texto_quienes_somos['vision']['titulo'] ?> </h5>
                        <p> <?php echo $texto_quienes_somos['vision']['parrafo'] ?> </p>
                    </div>
                </div>
                <!-- TEXTO -->






            </div>
            <!-- MISION/VISION -->


        </div>
        <!-- NOSOTROS -->


    </section>
    <!-- TEXTOS NOSOTROS -->

    <!-- BANNER ESTADISTICAS -->

    <!-- BANNER ESTADISTICAS -->

    <!-- RENOCOCIMIENTOS -->

    <section id="reconocimientos" class="mt-5 py-5 rounded">


        <div class="d-flex flex-wrap justify-content-between container">

            <h5 class="pl-3 d-inline-block m-0 position-relative linea font-weight-bold"> <?php echo  $texto_quienes_somos['reconocimientos']['titulo'] ?> </h5>

            <p class="p-3"> <?php echo  $texto_quienes_somos['reconocimientos']['parrafos']['0'] ?> </p>

            <div class=" col-12 col-md-6 col-lg-3 col-xl-3 my-2 text-center rounded">
                <div class="card cajas p-2">
                    <p class="m-auto px-2"> <?php echo  $texto_quienes_somos['reconocimientos']['parrafos']['1'] ?> </p>
                </div>
            </div>

            <div class=" col-12 col-md-6 col-lg-3 col-xl-3 my-2 text-center rounded">
                <div class="card cajas">
                    <p class="m-auto px-2"> <?php echo  $texto_quienes_somos['reconocimientos']['parrafos']['2'] ?> </p>
                </div>
            </div>

            <div class=" col-12 col-md-6 col-lg-3 col-xl-3 my-2 text-center rounded">
                <div class="card cajas">
                    <p class="m-auto px-2"> <?php echo  $texto_quienes_somos['reconocimientos']['parrafos']['3'] ?> </p>
                </div>
            </div>

            <div class=" col-12 col-md-6 col-lg-3 col-xl-3 my-2 text-center rounded">
                <div class="card cajas">
                    <p class="m-auto px-2"> <?php echo  $texto_quienes_somos['reconocimientos']['parrafos']['4'] ?> </p>
                </div>
            </div>

            <div class=" col-12 col-md-6 col-lg-3 col-xl-3 my-2 text-center rounded">
                <div class="card cajas">
                    <p class="m-auto px-2"> <?php echo  $texto_quienes_somos['reconocimientos']['parrafos']['5'] ?> </p>
                </div>
            </div>

            <div class=" col-12 col-md-6 col-lg-3 col-xl-3 my-2 text-center rounded">
                <div class="card cajas">
                    <p class="m-auto px-2"> <?php echo  $texto_quienes_somos['reconocimientos']['parrafos']['6'] ?> </p>
                </div>
            </div>

            <div class=" col-12 col-md-6 col-lg-3 col-xl-3 my-2 text-center rounded">
                <div class="card cajas">
                    <p class="m-auto px-2"> <?php echo  $texto_quienes_somos['reconocimientos']['parrafos']['7'] ?> </p>
                </div>
            </div>

            <div class=" col-12 col-md-6 col-lg-3 col-xl-3 my-2 text-center rounded">
                <div class="card cajas">
                    <p class="m-auto px-2"> <?php echo  $texto_quienes_somos['reconocimientos']['parrafos']['8'] ?> </p>
                </div>
            </div>

        </div>
    </section>

    <!-- RENOCOCIMIENTOS -->





    <!-- FOOTER -->
    <section>
        <?php include 'layout/5footer.php' ?>
    </section>
    <!-- FOOTER -->

    <?php include 'layout/2archivos_footer.php' ?>

    <script src="js/animacion_nosotros.js"></script>

</body>

</html>