<?php require 'variables/variables.php';
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

            <!-- ASESOR -->
            <div class="col-12 col-md-4 col-lg-3 col-xl-3 mb-5">
                <a href="#">
                    <div class="carta d-flex flex-column">

                        <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->
                        <div clas="text-break">
                            <!-- IMAGEN ASESOR -->
                            <div class="imagen">
                                <img class="w-100 h-100" src="images/NIDIA RUEDA.jpg" class="card-img-top" alt="...">
                            </div>
                            <!-- IMAGEN ASESOR -->

                            <!-- TEXTO ANIMADO -->
                            <!-- <p class="texto-animado px-2 mr-3 mt-4 text-break"> Ejecutivo Comercial - Oficina Principal </p> -->
                            <!-- TEXTO ANIMADO -->
                        </div>
                        <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->


                        <div class="rounded caja_texto flex-column position-relative d-flex align-items-center justify-content-center">
                            <div class="w-auto d-flex align-items-baseline jusutify-content-center">
                                <i class="fas fa-user mx-2 verde"></i>
                                <p id="nombre_asesor" class="pt-4 font-weight-bold"> NIDIA K. RUEDA ROJAS </p>
                            </div>
                            <p class="pb-4 text-center"> Ejecutiva Comercial - Oficina Principal </p>
                        </div>

                    </div>
                </a>

                <div class="position-absolute rounded border caja_verde d-flex align-items-center justify-content-center">

                    <a class="mr-2" href="mailto:ejecutivaprincipal@dominguezparra.com.co"><i class="fas fa-envelope"> </i></a>
                    <a class="mr-2" href="tel:3163033657"> <i class="fas fa-phone"></i> </a>
                    <a target="blank" class="mr-2" href="https://api.whatsapp.com/send?phone=+573163033657"> <i class="fab fa-whatsapp"></i> </a>
                </div>
            </div>
            <!-- ASESOR -->

            <!-- ASESOR -->
            <div class="col-12 col-md-4 col-lg-3 col-xl-3 mb-5">
                <a href="#">
                    <div class="carta d-flex flex-column">

                        <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->
                        <div clas="text-break">
                            <!-- IMAGEN ASESOR -->
                            <div class="imagen">
                                <img class="w-100 h-100" src="images/CARMEN SOTO.jpg" class="card-img-top" alt="...">
                            </div>
                            <!-- IMAGEN ASESOR -->

                            <!-- TEXTO ANIMADO -->
                            <!-- <p class="texto-animado px-2 mr-3 mt-4 text-break"> Ejecutivo Comercial - Oficina Principal </p> -->
                            <!-- TEXTO ANIMADO -->
                        </div>
                        <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->


                        <div class="rounded caja_texto flex-column position-relative d-flex align-items-center justify-content-center">
                            <div class="w-auto d-flex align-items-baseline jusutify-content-center">
                                <i class="fas fa-user mx-2 verde"></i>
                                <p id="nombre_asesor" class="pt-4 font-weight-bold"> CARMEN C. SOTO MARQUEZ </p>
                            </div>
                            <p class="pb-4 text-center"> Ejecutiva Comercial - Oficina Cabecera </p>
                        </div>

                    </div>
                </a>

                <div class="position-absolute rounded border caja_verde d-flex align-items-center justify-content-center">

                    <a class="mr-2" href="mailto:ejecutivacabecera@dominguezparra.com.co"><i class="fas fa-envelope"> </i></a>
                    <a class="mr-2" href="tel:3156700082"> <i class="fas fa-phone"></i> </a>
                    <a target="blank" class="mr-2" href="https://api.whatsapp.com/send?phone=+573156700082"> <i class="fab fa-whatsapp"></i> </a>
                </div>
            </div>
            <!-- ASESOR -->

            <!-- ASESOR -->
            <div class="col-12 col-md-4 col-lg-3 col-xl-3 mb-5">
                <a href="#">
                    <div class="carta d-flex flex-column">

                        <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->
                        <div clas="text-break">
                            <!-- IMAGEN ASESOR -->
                            <div class="imagen">
                                <img class="w-100 h-100" src="images/SANDRA AGUILAR.jpg" class="card-img-top" alt="...">
                            </div>
                            <!-- IMAGEN ASESOR -->

                            <!-- TEXTO ANIMADO -->
                            <!-- <p class="texto-animado px-2 mr-3 mt-4 text-break"> Ejecutivo Comercial - Oficina Principal </p> -->
                            <!-- TEXTO ANIMADO -->
                        </div>
                        <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->


                        <div class="rounded caja_texto flex-column position-relative d-flex align-items-center justify-content-center">
                            <div class="w-auto d-flex align-items-baseline jusutify-content-center">
                                <i class="fas fa-user mx-2 verde"></i>
                                <p id="nombre_asesor" class="pt-4 font-weight-bold"> SANDRA M. AGUILAR RINCON </p>
                            </div>
                            <p class="pb-4 text-center"> Ejecutiva Comercial - Oficina Cañaveral </p>
                        </div>

                    </div>
                </a>

                <div class="position-absolute rounded border caja_verde d-flex align-items-center justify-content-center">

                    <a class="mr-2" href="mailto:ejecutivacanaveral@dominguezparra.com.co"><i class="fas fa-envelope"> </i></a>
                    <a class="mr-2" href="tel:3173674483"> <i class="fas fa-phone"></i> </a>
                    <a target="blank" class="mr-2" href="https://api.whatsapp.com/send?phone=+573173674483"> <i class="fab fa-whatsapp"></i> </a>
                </div>
            </div>
            <!-- ASESOR -->

            <!-- ASESOR -->
            <div class="col-12 col-md-4 col-lg-3 col-xl-3 mb-5">
                <a href="#">
                    <div class="carta d-flex flex-column">

                        <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->
                        <div clas="text-break">
                            <!-- IMAGEN ASESOR -->
                            <div class="imagen">
                                <img class="w-100 h-100" src="images/YOLANY VERGEL.jpg" class="card-img-top" alt="...">
                            </div>
                            <!-- IMAGEN ASESOR -->

                            <!-- TEXTO ANIMADO -->
                            <!-- <p class="texto-animado px-2 mr-3 mt-4 text-break"> Ejecutivo Comercial - Oficina Principal </p> -->
                            <!-- TEXTO ANIMADO -->
                        </div>
                        <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->


                        <div class="rounded caja_texto flex-column position-relative d-flex align-items-center justify-content-center">
                            <div class="w-auto d-flex align-items-baseline jusutify-content-center">
                                <i class="fas fa-user mx-2 verde"></i>
                                <p id="nombre_asesor" class="pt-4 font-weight-bold"> YOLANY VERGEL ORTEGA </p>
                            </div>
                            <p class="pb-4 text-center"> Ejecutiva Comercial Medios Electrónicos </p>
                        </div>

                    </div>
                </a>

                <div class="position-absolute rounded border caja_verde d-flex align-items-center justify-content-center">

                    <a class="mr-2" href="mailto:canalelectrónico@dominguezparra.com.co"><i class="fas fa-envelope"> </i></a>
                    <a class="mr-2" href="tel:3153161507"> <i class="fas fa-phone"></i> </a>
                    <a target="blank" class="mr-2" href="https://api.whatsapp.com/send?phone=+573153161507"> <i class="fab fa-whatsapp"></i> </a>
                </div>
            </div>
            <!-- ASESOR -->

            <!-- ASESOR -->
            <div class="col-12 col-md-4 col-lg-3 col-xl-3 mb-5">
                <a href="#">
                    <div class="carta d-flex flex-column">

                        <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->
                        <div clas="text-break">
                            <!-- IMAGEN ASESOR -->
                            <div class="imagen">
                                <img class="w-100 h-100" src="images/FREDY DIAZ.jpg" class="card-img-top" alt="...">
                            </div>
                            <!-- IMAGEN ASESOR -->

                            <!-- TEXTO ANIMADO -->
                            <!-- <p class="texto-animado px-2 mr-3 mt-4 text-break"> Ejecutivo Comercial - Oficina Principal </p> -->
                            <!-- TEXTO ANIMADO -->
                        </div>
                        <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->


                        <div class="rounded caja_texto flex-column position-relative d-flex align-items-center justify-content-center">
                            <div class="w-auto d-flex align-items-baseline jusutify-content-center">
                                <i class="fas fa-user mx-2 verde"></i>
                                <p id="nombre_asesor" class="pt-4 font-weight-bold"> FREDY OMAR DIAZ SIERRA </p>
                            </div>
                            <p class="pb-4 text-center"> Asesor Comercial - Oficina Principal </p>
                        </div>

                    </div>
                </a>

                <div class="position-absolute rounded border caja_verde d-flex align-items-center justify-content-center">

                    <a class="mr-2" href="mailto:comercialprincipal@dominguezparra.com.co"><i class="fas fa-envelope"> </i></a>
                    <a class="mr-2" href="tel:3133601037"> <i class="fas fa-phone"></i> </a>
                    <a target="blank" class="mr-2" href="https://api.whatsapp.com/send?phone=+573133601037"> <i class="fab fa-whatsapp"></i> </a>
                </div>
            </div>
            <!-- ASESOR -->

            <!-- ASESOR -->
            <div class="col-12 col-md-4 col-lg-3 col-xl-3 mb-5">
                <a href="#">
                    <div class="carta d-flex flex-column">

                        <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->
                        <div clas="text-break">
                            <!-- IMAGEN ASESOR -->
                            <div class="imagen">
                                <img class="w-100 h-100" src="images/MARTHA ACOSTA.jpg" class="card-img-top" alt="...">
                            </div>
                            <!-- IMAGEN ASESOR -->

                            <!-- TEXTO ANIMADO -->
                            <!-- <p class="texto-animado px-2 mr-3 mt-4 text-break"> Ejecutivo Comercial - Oficina Principal </p> -->
                            <!-- TEXTO ANIMADO -->
                        </div>
                        <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->


                        <div class="rounded caja_texto flex-column position-relative d-flex align-items-center justify-content-center">
                            <div class="w-auto d-flex align-items-baseline jusutify-content-center">
                                <i class="fas fa-user mx-2 verde"></i>
                                <p id="nombre_asesor" class="pt-4 font-weight-bold"> MARTHA LUCIA ACOSTA LEON </p>
                            </div>
                            <p class="pb-4 text-center"> Asesora Comercial - Oficina Cabecera </p>
                        </div>

                    </div>
                </a>

                <div class="position-absolute rounded border caja_verde d-flex align-items-center justify-content-center">

                    <a class="mr-2" href="mailto:comercialcabecera@dominguezparra.com.co"><i class="fas fa-envelope"> </i></a>
                    <a class="mr-2" href="tel:3178548222"> <i class="fas fa-phone"></i> </a>
                    <a target="blank" class="mr-2" href="https://api.whatsapp.com/send?phone=+573178548222"> <i class="fab fa-whatsapp"></i> </a>
                </div>
            </div>
            <!-- ASESOR -->

            <!-- ASESOR -->
            <div class="col-12 col-md-4 col-lg-3 col-xl-3 mb-5">
                <a href="#">
                    <div class="carta d-flex flex-column">

                        <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->
                        <div clas="text-break">
                            <!-- IMAGEN ASESOR -->
                            <div class="imagen">
                                <img class="w-100 h-100" src="images/ROBINSON BAEZ.jpg" class="card-img-top" alt="...">
                            </div>
                            <!-- IMAGEN ASESOR -->

                            <!-- TEXTO ANIMADO -->
                            <!-- <p class="texto-animado px-2 mr-3 mt-4 text-break"> Ejecutivo Comercial - Oficina Principal </p> -->
                            <!-- TEXTO ANIMADO -->
                        </div>
                        <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->


                        <div class="rounded caja_texto flex-column position-relative d-flex align-items-center justify-content-center">
                            <div class="w-auto d-flex align-items-baseline jusutify-content-center">
                                <i class="fas fa-user mx-2 verde"></i>
                                <p id="nombre_asesor" class="pt-4 font-weight-bold"> ROBINSON A. BAEZ CARDENAS </p>
                            </div>
                            <p class="pb-4 text-center"> Asesor Comercial - Fidelizacion </p>
                        </div>

                    </div>
                </a>

                <div class="position-absolute rounded border caja_verde d-flex align-items-center justify-content-center">

                    <a class="mr-2" href="mailto:comercialcanaveral@dominguezparra.com.co"><i class="fas fa-envelope"> </i></a>
                    <a class="mr-2" href="tel:3183863467"> <i class="fas fa-phone"></i> </a>
                    <a target="blank" class="mr-2" href="https://api.whatsapp.com/send?phone=+573183863467"> <i class="fab fa-whatsapp"></i> </a>
                </div>
            </div>
            <!-- ASESOR -->

            <!-- ASESOR -->
            <div class="col-12 col-md-4 col-lg-3 col-xl-3 mb-5">
                <a href="#">
                    <div class="carta d-flex flex-column">

                        <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->
                        <div clas="text-break">
                            <!-- IMAGEN ASESOR -->
                            <div class="imagen">
                                <img class="w-100 h-100" src="images/LILIANA ORTIZ.jpg" class="card-img-top" alt="...">
                            </div>
                            <!-- IMAGEN ASESOR -->

                            <!-- TEXTO ANIMADO -->
                            <!-- <p class="texto-animado px-2 mr-3 mt-4 text-break"> Ejecutivo Comercial - Oficina Principal </p> -->
                            <!-- TEXTO ANIMADO -->
                        </div>
                        <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->


                        <div class="rounded caja_texto flex-column position-relative d-flex align-items-center justify-content-center">
                            <div class="w-auto d-flex align-items-baseline jusutify-content-center">
                                <i class="fas fa-user mx-2 verde"></i>
                                <p id="nombre_asesor" class="pt-4 font-weight-bold"> LILIANA ORTIZ NIEVES </p>
                            </div>
                            <p class="pb-4 text-center"> Directora Comercial </p>
                        </div>

                    </div>
                </a>

                <div class="position-absolute rounded border caja_verde d-flex align-items-center justify-content-center">

                    <a class="mr-2" href="mailto:directorcomercial@dominguezparra.com.co"><i class="fas fa-envelope"> </i></a>
                    <a class="mr-2" href="tel:"> <i class="fas fa-phone"></i> </a>
                    <a target="blank" class="mr-2" href="https://api.whatsapp.com/send?phone=+57"> <i class="fab fa-whatsapp"></i> </a>
                </div>
            </div>
            <!-- ASESOR -->

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