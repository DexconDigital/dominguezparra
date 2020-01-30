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
    <section id="banner" style="height:250px" class="margin_top position-relative">

        <div class="imagen imagen_inmuebles"> </div>

        <div id="fondo_negro"></div>

        <div class="contenido_banner d-flex align-items-center justify-content-center flex-column">
            <h1> Inmuebles </h1>
            <p> <a href="index.php">Inicio</a> / Inmuebles </p>
        </div>

    </section>
    <!-- BANNER -->

    <!-- INMUEBLES -->
    <section id="inmuebles2" class="my-5 container">

        <div class=" d-flex align-items-start justify-content-between flex-wrap">


            <!-- BUSCADOR -->
            <section id="formulario2" class="col-3
             rounded">

                <div class="col-12 p-0">
                    <div class="row ">

                        <div class="col-12 form-group pt-3 f11">
                            <input placeholder="Código" type="number" class="form-control f1" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="col-12 form-group f11">
                            <select class="form-control f1" id="exampleFormControlSelect1">
                                <option selected default> Tipo de Inmueble </option>
                            </select>
                        </div>

                        <div class="col-6 form-group f11">
                            <select class="form-control f1" id="exampleFormControlSelect1">
                                <option selected default> Ciudad </option>
                            </select>
                        </div>

                        <div class="col-6 form-group f11">
                            <select class="form-control f1" id="exampleFormControlSelect1">
                                <option selected default> Barrio </option>
                            </select>
                        </div>

                        <div class="col-12 form-group f11">
                            <input placeholder="Precio Mínimo" type="number" class="form-control f1" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="col-12 form-group f11">
                            <input placeholder="Precio Máximo" type="number" class="form-control f1" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="col-12 form-group f11">
                            <input placeholder="Área Mínima" type="number" class="form-control f1" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="col-12 form-group f11">
                            <input placeholder="Área Máxima" type="number" class="form-control f1" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="col-12 form-group f11">
                            <input placeholder="Baños" type="number" class="form-control f1" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="col-12 form-group f11">
                            <input placeholder="Alcobas" type="number" class="form-control f1" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="col-12 form-group f11">
                            <input placeholder="Garajes " type="number" class="form-control f1" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="col-12 pb-3 d-flex align-items center justify-content-center">
                            <button type="submit" class="col-12 btn boton_principal"> Buscar </button>
                        </div>

                    </div>
                </div>

            </section>
            <!-- BUSCADOR -->

            <div class="col-9">
                <h2 class="text-center mb-5"> Inmuebles Disponibles </h2>

                <!-- CARD -->
                <div style="height:200px;" class="carta my-5 ">
                    <a href="#" class="d-flex" id="inmuebles2">

                        <!-- IMAGEN, GESTION Y TIPO DE INMUEBLE -->
                        <div class="card2 col-6 p-0 position-relative">

                            <div class="imagen w-100 h-100">
                                <img src="images/casa1.jpg" class="card-img-top" alt="...">
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
                        <div class="contenido col-6">

                            <div class="d-flex pl-3 align-items-baseline">
                                <i class="mr-1 fas fa-map-marker-alt"></i>
                                <h4> Dirección </h4>
                            </div>

                            <div class="ml-3 d-flex">
                                <p class="mr-5"> $1.234.567.890 </p>
                                <p class="text-muted"> Código: 000 </p>
                            </div>

                            <div>
                                <p> *Descripción* Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo, deleniti tempore! Cupiditate sed nemo aliquid distinctio corporis soluta reprehenderit commodi! </p>
                            </div>

                            <div class="fondo_caracteristicas1 d-flex align-items-center justify-content-around">

                                <div class="d-flex py-2 align-items-center">
                                    <i class="blanco fas fa-chart-area"></i>
                                    <p class="blanco pl-2"> 200 Mts<sup>2 </p>
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

                            <!-- FONDO NEGRO -->
                            <div class="fondo_caracteristicas2"></div>
                            <!-- FONDO NEGRO -->

                            <!-- FONDO VERDE -->
                            <div class="fondo_caracteristicas3"></div>
                            <!-- FONDO VERDE -->


                        </div>
                        <!-- DESCRIPCIÓN DE INMUEBLE -->

                    </a>
                </div>
                <!-- CARD -->

                <!-- CARD -->
                <div style="height:200px;" class="carta my-5 ">
                    <a href="#" class="d-flex" id="inmuebles2">

                        <!-- IMAGEN, GESTION Y TIPO DE INMUEBLE -->
                        <div class="card2 col-6 p-0 position-relative">

                            <div class="imagen w-100 h-100">
                                <img src="images/casa1.jpg" class="card-img-top" alt="...">
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
                        <div class="contenido col-6">

                            <div class="d-flex pl-3 align-items-baseline">
                                <i class="mr-1 fas fa-map-marker-alt"></i>
                                <h4> Dirección </h4>
                            </div>

                            <div class="ml-3 d-flex">
                                <p class="mr-5"> $1.234.567.890 </p>
                                <p class="text-muted"> Código: 000 </p>
                            </div>

                            <div>
                                <p> *Descripción* Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo, deleniti tempore! Cupiditate sed nemo aliquid distinctio corporis soluta reprehenderit commodi! </p>
                            </div>

                            <div class="fondo_caracteristicas1 d-flex align-items-center justify-content-around">

                                <div class="d-flex py-2 align-items-center">
                                    <i class="blanco fas fa-chart-area"></i>
                                    <p class="blanco pl-2"> 200 Mts<sup>2 </p>
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

                            <!-- FONDO NEGRO -->
                            <div class="fondo_caracteristicas2"></div>
                            <!-- FONDO NEGRO -->

                            <!-- FONDO VERDE -->
                            <div class="fondo_caracteristicas3"></div>
                            <!-- FONDO VERDE -->


                        </div>
                        <!-- DESCRIPCIÓN DE INMUEBLE -->

                    </a>
                </div>
                <!-- CARD -->

                <!-- CARD -->
                <div style="height:200px;" class="carta my-5 ">
                    <a href="#" class="d-flex" id="inmuebles2">

                        <!-- IMAGEN, GESTION Y TIPO DE INMUEBLE -->
                        <div class="card2 col-6 p-0 position-relative">

                            <div class="imagen w-100 h-100">
                                <img src="images/casa1.jpg" class="card-img-top" alt="...">
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
                        <div class="contenido col-6">

                            <div class="d-flex pl-3 align-items-baseline">
                                <i class="mr-1 fas fa-map-marker-alt"></i>
                                <h4> Dirección </h4>
                            </div>

                            <div class="ml-3 d-flex">
                                <p class="mr-5"> $1.234.567.890 </p>
                                <p class="text-muted"> Código: 000 </p>
                            </div>

                            <div>
                                <p> *Descripción* Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo, deleniti tempore! Cupiditate sed nemo aliquid distinctio corporis soluta reprehenderit commodi! </p>
                            </div>

                            <div class="fondo_caracteristicas1 d-flex align-items-center justify-content-around">

                                <div class="d-flex py-2 align-items-center">
                                    <i class="blanco fas fa-chart-area"></i>
                                    <p class="blanco pl-2"> 200 Mts<sup>2 </p>
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

                            <!-- FONDO NEGRO -->
                            <div class="fondo_caracteristicas2"></div>
                            <!-- FONDO NEGRO -->

                            <!-- FONDO VERDE -->
                            <div class="fondo_caracteristicas3"></div>
                            <!-- FONDO VERDE -->


                        </div>
                        <!-- DESCRIPCIÓN DE INMUEBLE -->

                    </a>
                </div>
                <!-- CARD -->

            </div>


        </div>

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

</body>

</html>