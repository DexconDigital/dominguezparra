<?php require 'variables/variables.php';
$page = "Asesores" ?>
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

        <div class="imagen">
            <img src="images/banner_nosotros.jpg" alt="">
        </div>
        <div id="fondo_negro"></div>

        <div class="contenido_banner d-flex align-items-center justify-content-center flex-column">
            <h1> Asesores </h1>
            <p> <a href="index.php">Inicio</a> / Asesores </p>
        </div>

    </section>
    <!-- BANNER -->







    <!-- ASESORES -->
    <div id="carrusel2" class="carousel slide" data-ride="carousel">

        <div class="d-flex align-items-center justify-content-center my-5">
            <h2 class="mb-3 d-inline-block m-0 position-relative linea font-weight-bold"> Nuestros Asesores </h2>
        </div>


        <div class="carousel-inner">

            <!-- PRIMER TRIO DE ASESORES -->
            <div class="carousel-item active">
                <section id="asesores">

                    <div class="container d-flex">

                        <!-- ASESOR -->
                        <div class="col-4">
                            <a href="#">
                                <div class="carta d-flex flex-column">

                                    <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->
                                    <div clas="text-break">
                                        <!-- IMAGEN ASESOR -->
                                        <div class="imagen">
                                            <img class="w-100" src="images/asesor1.png" class="card-img-top" alt="...">
                                        </div>
                                        <!-- IMAGEN ASESOR -->

                                        <!-- TEXTO ANIMADO -->
                                        <p class="texto-animado px-2 mr-3 mt-4 text-break"> INFORMACIÓN EXTRA DEL ASESOR Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quasi ipsam eligendi sunt distinctio a voluptatem deleniti quae sed cum. </p>
                                        <!-- TEXTO ANIMADO -->
                                    </div>
                                    <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->


                                    <div class="caja_texto position-relative d-flex align-items-center justify-content-center">
                                        <h4 class="text-center font-weight-bold"> Nombre de Asesor </h4>
                                    </div>

                                </div>
                            </a>

                            <div class="position-absolute rounded border caja_verde d-flex align-items-center justify-content-center">

                                <a class="mr-2" href="mailto:ktlaboral@hotmail.com"><i class="fas fa-envelope"> </i></a>
                                <a class="mr-2" href="tel:311123123"> <i class="fas fa-phone"></i> </a>
                                <a class="mr-2" href="#"> <i class="fab fa-whatsapp"></i> </a>
                            </div>

                        </div>
                        <!-- ASESOR -->

                        <!-- ASESOR -->
                        <div class="col-4">
                            <a href="#">
                                <div class="carta d-flex flex-column">

                                    <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->
                                    <div clas="text-break">
                                        <!-- IMAGEN ASESOR -->
                                        <div class="imagen">
                                            <img class="w-100" src="images/asesor2.png" class="card-img-top" alt="...">
                                        </div>
                                        <!-- IMAGEN ASESOR -->

                                        <!-- TEXTO ANIMADO -->
                                        <p class="texto-animado px-2 mr-3 mt-4 text-break"> INFORMACIÓN EXTRA DEL ASESOR Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quasi ipsam eligendi sunt distinctio a voluptatem deleniti quae sed cum. </p>
                                        <!-- TEXTO ANIMADO -->
                                    </div>
                                    <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->


                                    <div class="caja_texto position-relative d-flex align-items-center justify-content-center">
                                        <h4 class="text-center font-weight-bold"> Nombre de Asesor </h4>
                                    </div>

                                </div>
                            </a>

                            <div class="position-absolute rounded border caja_verde d-flex align-items-center justify-content-center">

                                <a class="mr-2" href="mailto:ktlaboral@hotmail.com"><i class="fas fa-envelope"> </i></a>
                                <a class="mr-2" href="tel:311123123"> <i class="fas fa-phone"></i> </a>
                                <a class="mr-2" href="#"> <i class="fab fa-whatsapp"></i> </a>
                            </div>

                        </div>
                        <!-- ASESOR -->

                        <!-- ASESOR -->
                        <div class="col-4">
                            <a href="#">
                                <div class="carta d-flex flex-column">

                                    <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->
                                    <div clas="text-break">
                                        <!-- IMAGEN ASESOR -->
                                        <div class="imagen">
                                            <img class="w-100" src="images/asesor3.png" class="card-img-top" alt="...">
                                        </div>
                                        <!-- IMAGEN ASESOR -->

                                        <!-- TEXTO ANIMADO -->
                                        <p class="texto-animado px-2 mr-3 mt-4 text-break"> INFORMACIÓN EXTRA DEL ASESOR Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quasi ipsam eligendi sunt distinctio a voluptatem deleniti quae sed cum. </p>
                                        <!-- TEXTO ANIMADO -->
                                    </div>
                                    <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->


                                    <div class="caja_texto position-relative d-flex align-items-center justify-content-center">
                                        <h4 class="text-center font-weight-bold"> Nombre de Asesor </h4>
                                    </div>

                                </div>
                            </a>

                            <div class="position-absolute rounded border caja_verde d-flex align-items-center justify-content-center">

                                <a class="mr-2" href="mailto:ktlaboral@hotmail.com"><i class="fas fa-envelope"> </i></a>
                                <a class="mr-2" href="tel:311123123"> <i class="fas fa-phone"></i> </a>
                                <a class="mr-2" href="#"> <i class="fab fa-whatsapp"></i> </a>
                            </div>

                        </div>
                        <!-- ASESOR -->

                    </div>

                </section>
            </div>
            <!-- PRIMER TRIO DE ASESORES -->

            <!-- SEGUNDO TRIO DE ASESORES -->
            <div class="carousel-item ">
                <section id="asesores">

                    <div class="container d-flex">

                        <!-- ASESOR -->
                        <div class="col-4">
                            <a href="#">
                                <div class="carta d-flex flex-column">

                                    <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->
                                    <div clas="text-break">
                                        <!-- IMAGEN ASESOR -->
                                        <div class="imagen">
                                            <img class="w-100" src="images/asesor1.png" class="card-img-top" alt="...">
                                        </div>
                                        <!-- IMAGEN ASESOR -->

                                        <!-- TEXTO ANIMADO -->
                                        <p class="texto-animado px-2 mr-3 mt-4 text-break"> INFORMACIÓN EXTRA DEL ASESOR Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quasi ipsam eligendi sunt distinctio a voluptatem deleniti quae sed cum. </p>
                                        <!-- TEXTO ANIMADO -->
                                    </div>
                                    <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->


                                    <div class="caja_texto position-relative d-flex align-items-center justify-content-center">
                                        <h4 class="text-center font-weight-bold"> Nombre de Asesor </h4>
                                    </div>

                                </div>
                            </a>

                            <div class="position-absolute rounded border caja_verde d-flex align-items-center justify-content-center">

                                <a class="mr-2" href="mailto:ktlaboral@hotmail.com"><i class="fas fa-envelope"> </i></a>
                                <a class="mr-2" href="tel:311123123"> <i class="fas fa-phone"></i> </a>
                                <a class="mr-2" href="#"> <i class="fab fa-whatsapp"></i> </a>
                            </div>

                        </div>
                        <!-- ASESOR -->

                        <!-- ASESOR -->
                        <div class="col-4">
                            <a href="#">
                                <div class="carta d-flex flex-column">

                                    <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->
                                    <div clas="text-break">
                                        <!-- IMAGEN ASESOR -->
                                        <div class="imagen">
                                            <img class="w-100" src="images/asesor2.png" class="card-img-top" alt="...">
                                        </div>
                                        <!-- IMAGEN ASESOR -->

                                        <!-- TEXTO ANIMADO -->
                                        <p class="texto-animado px-2 mr-3 mt-4 text-break"> INFORMACIÓN EXTRA DEL ASESOR Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quasi ipsam eligendi sunt distinctio a voluptatem deleniti quae sed cum. </p>
                                        <!-- TEXTO ANIMADO -->
                                    </div>
                                    <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->


                                    <div class="caja_texto position-relative d-flex align-items-center justify-content-center">
                                        <h4 class="text-center font-weight-bold"> Nombre de Asesor </h4>
                                    </div>

                                </div>
                            </a>

                            <div class="position-absolute rounded border caja_verde d-flex align-items-center justify-content-center">

                                <a class="mr-2" href="mailto:ktlaboral@hotmail.com"><i class="fas fa-envelope"> </i></a>
                                <a class="mr-2" href="tel:311123123"> <i class="fas fa-phone"></i> </a>
                                <a class="mr-2" href="#"> <i class="fab fa-whatsapp"></i> </a>
                            </div>

                        </div>
                        <!-- ASESOR -->

                        <!-- ASESOR -->
                        <div class="col-4">
                            <a href="#">
                                <div class="carta d-flex flex-column">

                                    <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->
                                    <div clas="text-break">
                                        <!-- IMAGEN ASESOR -->
                                        <div class="imagen">
                                            <img class="w-100" src="images/asesor3.png" class="card-img-top" alt="...">
                                        </div>
                                        <!-- IMAGEN ASESOR -->

                                        <!-- TEXTO ANIMADO -->
                                        <p class="texto-animado px-2 mr-3 mt-4 text-break"> INFORMACIÓN EXTRA DEL ASESOR Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quasi ipsam eligendi sunt distinctio a voluptatem deleniti quae sed cum. </p>
                                        <!-- TEXTO ANIMADO -->
                                    </div>
                                    <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->


                                    <div class="caja_texto position-relative d-flex align-items-center justify-content-center">
                                        <h4 class="text-center font-weight-bold"> Nombre de Asesor </h4>
                                    </div>

                                </div>
                            </a>

                            <div class="position-absolute rounded border caja_verde d-flex align-items-center justify-content-center">

                                <a class="mr-2" href="mailto:ktlaboral@hotmail.com"><i class="fas fa-envelope"> </i></a>
                                <a class="mr-2" href="tel:311123123"> <i class="fas fa-phone"></i> </a>
                                <a class="mr-2" href="#"> <i class="fab fa-whatsapp"></i> </a>
                            </div>

                        </div>
                        <!-- ASESOR -->

                    </div>

                </section>
            </div>
            <!-- SEGUNDO TRIO DE ASESORES -->

            <!-- TERCER TRIO DE ASESORES -->
            <div class="carousel-item ">
                <section id="asesores">

                    <div class="container d-flex">

                        <!-- ASESOR -->
                        <div class="col-4">
                            <a href="#">
                                <div class="carta d-flex flex-column">

                                    <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->
                                    <div clas="text-break">
                                        <!-- IMAGEN ASESOR -->
                                        <div class="imagen">
                                            <img class="w-100" src="images/asesor1.png" class="card-img-top" alt="...">
                                        </div>
                                        <!-- IMAGEN ASESOR -->

                                        <!-- TEXTO ANIMADO -->
                                        <p class="texto-animado px-2 mr-3 mt-4 text-break"> INFORMACIÓN EXTRA DEL ASESOR Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quasi ipsam eligendi sunt distinctio a voluptatem deleniti quae sed cum. </p>
                                        <!-- TEXTO ANIMADO -->
                                    </div>
                                    <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->


                                    <div class="caja_texto position-relative d-flex align-items-center justify-content-center">
                                        <h4 class="text-center font-weight-bold"> Nombre de Asesor </h4>
                                    </div>

                                </div>
                            </a>

                            <div class="position-absolute rounded border caja_verde d-flex align-items-center justify-content-center">

                                <a class="mr-2" href="mailto:ktlaboral@hotmail.com"><i class="fas fa-envelope"> </i></a>
                                <a class="mr-2" href="tel:311123123"> <i class="fas fa-phone"></i> </a>
                                <a class="mr-2" href="#"> <i class="fab fa-whatsapp"></i> </a>
                            </div>

                        </div>
                        <!-- ASESOR -->

                        <!-- ASESOR -->
                        <div class="col-4">
                            <a href="#">
                                <div class="carta d-flex flex-column">

                                    <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->
                                    <div clas="text-break">
                                        <!-- IMAGEN ASESOR -->
                                        <div class="imagen">
                                            <img class="w-100" src="images/asesor2.png" class="card-img-top" alt="...">
                                        </div>
                                        <!-- IMAGEN ASESOR -->

                                        <!-- TEXTO ANIMADO -->
                                        <p class="texto-animado px-2 mr-3 mt-4 text-break"> INFORMACIÓN EXTRA DEL ASESOR Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quasi ipsam eligendi sunt distinctio a voluptatem deleniti quae sed cum. </p>
                                        <!-- TEXTO ANIMADO -->
                                    </div>
                                    <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->


                                    <div class="caja_texto position-relative d-flex align-items-center justify-content-center">
                                        <h4 class="text-center font-weight-bold"> Nombre de Asesor </h4>
                                    </div>

                                </div>
                            </a>

                            <div class="position-absolute rounded border caja_verde d-flex align-items-center justify-content-center">

                                <a class="mr-2" href="mailto:ktlaboral@hotmail.com"><i class="fas fa-envelope"> </i></a>
                                <a class="mr-2" href="tel:311123123"> <i class="fas fa-phone"></i> </a>
                                <a class="mr-2" href="#"> <i class="fab fa-whatsapp"></i> </a>
                            </div>

                        </div>
                        <!-- ASESOR -->

                        <!-- ASESOR -->
                        <div class="col-4">
                            <a href="#">
                                <div class="carta d-flex flex-column">

                                    <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->
                                    <div clas="text-break">
                                        <!-- IMAGEN ASESOR -->
                                        <div class="imagen">
                                            <img class="w-100" src="images/asesor3.png" class="card-img-top" alt="...">
                                        </div>
                                        <!-- IMAGEN ASESOR -->

                                        <!-- TEXTO ANIMADO -->
                                        <p class="texto-animado px-2 mr-3 mt-4 text-break"> INFORMACIÓN EXTRA DEL ASESOR Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quasi ipsam eligendi sunt distinctio a voluptatem deleniti quae sed cum. </p>
                                        <!-- TEXTO ANIMADO -->
                                    </div>
                                    <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->


                                    <div class="caja_texto position-relative d-flex align-items-center justify-content-center">
                                        <h4 class="text-center font-weight-bold"> Nombre de Asesor </h4>
                                    </div>

                                </div>
                            </a>

                            <div class="position-absolute rounded border caja_verde d-flex align-items-center justify-content-center">

                                <a class="mr-2" href="mailto:ktlaboral@hotmail.com"><i class="fas fa-envelope"> </i></a>
                                <a class="mr-2" href="tel:311123123"> <i class="fas fa-phone"></i> </a>
                                <a class="mr-2" href="#"> <i class="fab fa-whatsapp"></i> </a>
                            </div>

                        </div>
                        <!-- ASESOR -->

                    </div>

                </section>
            </div>
            <!-- TERCER TRIO DE ASESORES -->

        </div>

        <a class="carousel-control-prev" href="#carrusel2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon2" aria-hidden="true"> <i class="fas fa-caret-left"></i> </span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carrusel2" role="button" data-slide="next">
            <span class="carousel-control-next-icon2" aria-hidden="true"> <i class="fas fa-caret-right"></i> </span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- ASESORES -->











    <!-- FOOTER -->
    <section>
        <?php include 'layout/5footer.php' ?>
    </section>
    <!-- FOOTER -->

    <?php include 'layout/2archivos_footer.php' ?>

</body>

</html>