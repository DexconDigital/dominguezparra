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

        <div class="imagen imagen_nosotros"> </div>

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
            <div class="col-12 p-0 d-flex align-items-center">

                <div class="col-6 pl-0">

                    <div class="text-justify">
                        <h2 class="text-center text-strong"> Sobre Nosotros </h2>
                        <p> <?php echo $texto_quienes_somos['nosotros']['parrafos']['0'] ?> </p>
                        <p class="mt-4"> <?php echo $texto_quienes_somos['nosotros']['parrafos']['1'] ?> </p>
                        <p class="mt-4"> <?php echo $texto_quienes_somos['nosotros']['parrafos']['2'] ?> </p>
                    </div>

                    <div class="col-12 mt-4 d-flex justify-content-center align-items-center flex-column">
                    <h2 class="d-flex justify-content-center"> Matriculas Arrendador </h2>
                    <ul class="px-3">
                        <li> MA 023 Oficio 192/2003 - Bucaramanga </li>
                        <li> R.I 009-2009/ Resolución 0073/2009 - Floridablanca </li>
                        <li> M.A 0030/ Resolución 0030/2014 - Piedecuesta </li>
                        <li> M.A 078/ Resolución 078/2014 – Girón </li>
                    </ul>
                </div>

                </div>

                <div class="col-6 pr-0">
                    <div class="d-flex align-items-center justify-content-center imagen"> <img class="rounded" src="images/imagen_nosotros.jpg" alt=""></div>
                </div>

            </div>
        </div>
        <!-- NOSOTROS -->

        <!-- MISION Y VISION -->
        <div class="container">

            <div class="d-flex col-12 p-0">

                <div class="col-6 pl-0 text-justify mt-4">
                    <h2 class="text-center text-strong"> <?php echo $texto_quienes_somos['mision']['titulo'] ?> </h2>
                    <p> <?php echo $texto_quienes_somos['mision']['parrafo'] ?> </p>
                </div>

                <div class="col-6 pr-0 text-justify mt-4">
                    <h2 class="text-center text-strong"> <?php echo $texto_quienes_somos['vision']['titulo'] ?> </h2>
                    <p> <?php echo $texto_quienes_somos['vision']['parrafo'] ?> </p>
                </div>

            </div>

        </div>

        <!-- MISION Y VISION -->

    </section>
    <!-- TEXTOS NOSOTROS -->

    <!-- BANNER ESTADISTICAS -->
    <section id="banner_estadisticas" class="mt-5">

        <div id="fondo_negro"></div>

        <div class="contenido_estadisticas d-flex container">

            <div class="blanco col-12 p-0 d-flex">

                <div class="col-3 d-flex flex-column justify-content-center align-items-center">
                    <h4 class="text-center"> Total Inmuebles </h4>
                    <p class="text-center"> 100 </p>
                </div>

                <div class="col-3 d-flex flex-column justify-content-center align-items-center">
                    <h4 class="text-center"> Total Arriendo </h4>
                    <p class="text-center"> 100 </p>
                </div>

                <div class="col-3 d-flex flex-column justify-content-center align-items-center">
                    <h4 class="text-center"> Total Venta </h4>
                    <p class="text-center"> 100 </p>
                </div>

                <div class="col-3 d-flex flex-column justify-content-center align-items-center">
                    <h4 class="text-center"> Total Arriendo/Venta </h4>
                    <p class="text-center"> 100 </p>
                </div>

            </div>

        </div>

    </section>
    <!-- BANNER ESTADISTICAS -->

    <!-- RENOCOCIMIENTOS -->
    <section id="reconocimientos" class="my-5">

        <div class="container">

            <div class="col-12 p-0 d-flex">

                <div class="col-4 pl-0 d-flex">
                    <img class="rounded w-100 m-auto" style="height:60%" src="images/imagen_reconocimientos.jpg" alt="">
                </div>

                <div class="col-8 pr-0 d-flex flex-column">

                    <h2 class="text-strong text-center"> <?php echo  $texto_quienes_somos['reconocimientos']['titulo'] ?> </h2>
                    <p> <?php echo  $texto_quienes_somos['reconocimientos']['parrafos']['0'] ?> </p>
                    <p class="mt-2"> <?php echo  $texto_quienes_somos['reconocimientos']['parrafos']['1'] ?> </p>
                    <p> <?php echo  $texto_quienes_somos['reconocimientos']['parrafos']['2'] ?> </p>
                    <p> <?php echo  $texto_quienes_somos['reconocimientos']['parrafos']['3'] ?> </p>
                    <p> <?php echo  $texto_quienes_somos['reconocimientos']['parrafos']['4'] ?> </p>
                    <p> <?php echo  $texto_quienes_somos['reconocimientos']['parrafos']['5'] ?> </p>
                    <p> <?php echo  $texto_quienes_somos['reconocimientos']['parrafos']['6'] ?> </p>
                    <p> <?php echo  $texto_quienes_somos['reconocimientos']['parrafos']['7'] ?> </p>
                    <p> <?php echo  $texto_quienes_somos['reconocimientos']['parrafos']['8'] ?> </p>

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

</body>

</html>