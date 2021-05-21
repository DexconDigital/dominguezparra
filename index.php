<?php require 'variables/variables.php';
require 'variables/metaEtiquetas.php';
require 'controllers/indexController.php';
$page = "Inicio" ?>

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
<script src="js/1jquery.min.js"></script>
<script>
    $(document).ready(function() {
        setTimeout(function() {
            $('#myModal').modal('show')
        }, 5000)
    });

</script>
<style>
    .boton_footer {
        color: white;
        background-color: #3BA52B;
    }

    .boton_footer:hover {
        color: #3BA52B;
        background-color: white;
        border: 1px solid #3BA52B;
    }

    .color_enalce {
        color: #3BA52B;
    }

    .color_icono {
        font-size: 22px;
        color: #3BA52B;
    }

</style>

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
                    <img src="images/Cabezote-1.jpg" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/Cabezote-2.jpg" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/Cabezote-3.jpg" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon1" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon1" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!-- CARRUSEL PRINCIPAL -->

    <!-- CARRUSEL PRINCIPAL (RESPONSIVE1)-->
    <section id="carrusel_imagenes_responsive">
        <div id="carouselExampleControls" class="margin_top carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/Cabezote-1_responsive.jpg" alt="...">
                </div>
                <div class="carousel-item">
                    <!--<img src="images/Cabezote-2_responsive.jpg" alt="...">-->
                    <img src="images/Cabezote-2_responsive.jpg" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/Cabezote-3_responsive.jpg" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon1" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon1" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!-- CARRUSEL PRINCIPAL (RESPONSIVE1)-->

    <!-- BUSCADOR -->
    <section id="buscador">
        <?php include 'layout/4buscador.php' ?>
    </section>
    <!-- BUSCADOR -->

    <!-- PROPIEDADES DESTACADAS -->
    <section id="inmuebles2" class="mt-5 container">

        <h2 class="text-center mb-5"> Inmuebles Destacados </h2>

        <div class=" d-flex align-items-start justify-content-center flex-wrap">

            <?php
            if (is_array($api)) {
                inmuebles_destacados($api);
            } else {
                echo '<h2 class="text-center" >No tiene Inmuebles Destacados</h2>';
            }
            ?>

        </div>

    </section>
    <!-- PROPIEDADES DESTACADAS -->

    <!-- FORMULARIO DE ASEGURADORAS -->
    <section id="formulario_aseguradoras" class="mt-5">
        <div>
            <h2 class="blanco d-flex justify-content-center pt-5 pb-1 px-2 text-center"> Descargar Formulario de Aseguradoras </h2>
        </div>

        <div class="d-flex justify-content-center pb-5">
            <button data-toggle="modal" data-target="#formulario3" class="boton_principal btn boton_aseguradoras"> Descargar </button>
        </div>

    </section>
    <!-- FORMULARIO DE ASEGURADORAS -->

    <!-- FOOTER -->
    <section class="">
        <?php include 'layout/5footer.php' ?>
    </section>
    <!-- FOOTER -->

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle text-center">90 Años Generando Confianza</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <iframe class="w-100" src="https://www.youtube.com/embed/lmv23Sq0t3E" width="700" height="460" style="border: none;" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn boton_footer" data-dismiss="modal">Cerrar</button>

                </div>
            </div>
        </div>
    </div>

    <?php include 'layout/2archivos_footer.php' ?>
    <!-- buscador -->
    <script src="conexion_api/buscador.js"></script>
    <!-- barra de rangos -->
    <script src="js/rangos.js"></script>

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


</body>

</html>
