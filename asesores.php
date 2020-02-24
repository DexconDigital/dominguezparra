<?php require 'variables/variables.php';
require 'controllers/asesor_detalle.php';
$page = "Asesores" ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include 'layout/1archivos_header.php' ?>
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
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

        <div class="imagen imagen_asesores d-none d-xl-block"></div>
        <div class="imagen imagen_asesores2 d-xl-none d-sm-block d-md-block d-lg-block"></div>

        <div id="fondo_negro"></div>

        <div class="contenido_banner d-flex align-items-center justify-content-center flex-column">
            <h1> Asesores </h1>
            <p> <a href="index.php">Inicio</a> / Asesores </p>
        </div>

    </section>
    <!-- BANNER -->


    <div id="asesores" class="pb-4 col-12">

        <div class="d-flex align-items-center justify-content-center my-5">
            <h2 class="mb-3 d-inline-block m-0 position-relative linea font-weight-bold"> Nuestros Asesores </h2>
        </div>


        <div class="d-flex flex-wrap container">

            <?php if (isset($asesor_array)) {
                modelo_asesor($asesor_array);
            } else {
                echo '<div class="col 12">
                        <h3 class="text-center">No hay asesores para mostrar<h3>
                        </div>';
            }
            ?>
        </div>


    </div>











    <!-- FOOTER -->
    <section>
        <?php include 'layout/5footer.php' ?>
    </section>
    <!-- FOOTER -->

    <?php include 'layout/2archivos_footer.php' ?>

    <!-- <script>
        $('#aliados_slide').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            pagination: false,
            autoplay: 2000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });
    </script> -->

</body>

</html>