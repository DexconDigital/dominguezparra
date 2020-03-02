<?php require 'variables/variables.php';
$page = "Contáctenos" ?>
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

        <div class="imagen imagen_contactanos d-none d-xl-block"> </div>
        <div class="imagen imagen_contactanos2 d-xl-none d-sm-block d-md-block d-lg-block"> </div>

        <div id="fondo_negro"></div>

        <div class="contenido_banner d-flex align-items-center justify-content-center flex-column">
            <h1> Contáctenos </h1>
            <p> <a href="index.php">Inicio</a> / Contáctenos </p>
        </div>

    </section>
    <!-- BANNER -->

    <!-- BOTONES DE SUCURSALES -->
    <section id="sucursales" class="my-5">

        <div id="accordion">
            <div class="container">
                <div class="col-12">

                    <!----------BOTONES---------->

                    <div class="row list-group" id="list-tab" role="tablist">

                        <h2 class="text-center m-0 mb-5"> Oficinas </h2>

                        <div class="d-flex flex-wrap">
                            <div class="pt-2 pt-md-0 pt-lg-0 pt-xl-0 col-12 col-md-3 col-lg-3 col-xl-3 m-auto">
                                <button id="active_boton" class="btn boton_contactenos col-12 collapsed" type="button" data-toggle="collapse" data-target="#uno" aria-expanded="false" aria-controls="collapseExample">
                                    Principal
                                </button>
                            </div>

                            <div class="pt-2 pt-md-0 pt-lg-0 pt-xl-0 col-12 col-md-3 col-lg-3 col-xl-3 m-auto">
                                <button class="boton_contactenos btn col-12 collapsed" type="button" data-toggle="collapse" data-target="#dos" aria-expanded="true" aria-controls="dos">
                                    Cabecera
                                </button>
                            </div>

                            <div class="pt-2 pt-md-0 pt-lg-0 pt-xl-0 col-12 col-md-3 col-lg-3 col-xl-3 m-auto">
                                <button class="boton_contactenos btn col-12 collapsed" type="button" data-toggle="collapse" data-target="#tres" aria-expanded="true" aria-controls="dos">
                                    Cañaveral
                                </button>
                            </div>
                        </div>

                    </div>

                    <!----------BOTONES---------->


                    <!----------INFORMACION BOTONES---------->

                    <!-- SEDE PRINCIPAL -->
                    <div class="col-12 p-0 mt-3">

                        <div class="">
                            <div id="uno" class="collapse show" aria-labelledby="uno" data-parent="#accordion">

                                <div class="informacion_botones col-12 d-flex flex-wrap align-items-center justify-content-center">

                                    <div class="p-0 col-12 col-xl-6 col-lg-6 d-flex align-items-baseline justify-content-center">
                                        <i class="mr-1 verde <?php echo $datos_contacto['principal']['direccion']['icono'] ?>"> </i>
                                        <p class="mt-2"> <?php echo $datos_contacto['principal']['direccion']['direccion'] ?> </p>
                                    </div>

                                    <div class="p-0 col-12 col-xl-6 col-lg-6  d-flex align-items-baseline justify-content-center hover_iconos">
                                        <a class="d-flex align-items-baseline justify-content-baseline" href="mailto:<?php echo  $datos_contacto['principal']['correo'] ?>">
                                            <i class="mr-1 verde fas fa-envelope"></i>
                                            <p class="mt-2"> <?php echo $datos_contacto['principal']['correo'] ?> </p>
                                        </a>
                                    </div>

                                    <div class="p-0 col-12 col-xl-2 col-lg-2 d-flex align-items-baseline justify-content-center hover_iconos">
                                        <a class="d-flex align-items-baseline justify-content-baseline" href="tel:<?php echo  $datos_contacto['principal']['celular']['link'] ?>">
                                            <i class="mr-1 verde fas fa-mobile-alt"></i>
                                            <p class="mt-2"> <?php echo $datos_contacto['principal']['celular']['imprimir'] ?> </p>
                                        </a>
                                    </div>

                                    <div class="p-0 col-12 col-xl-2 col-lg-2 d-flex align-items-baseline justify-content-center hover_iconos">
                                        <a class="d-flex align-items-baseline justify-content-baseline" href="tel:<?php echo  $datos_contacto['principal']['telefono_fijo']['link'] ?>">
                                            <i class="mr-1 verde <?php echo $datos_contacto['principal']['telefono_fijo']['icono'] ?>"> </i>
                                            <p class="mt-2"> <?php echo $datos_contacto['principal']['telefono_fijo']['imprimir'] ?> </p>
                                        </a>
                                    </div>



                                    <div class="p-0 col-12 col-xl-2 col-lg-2 d-flex align-items-baseline justify-content-center hover_iconos">
                                        <a class="d-flex align-items-baseline justify-content-baseline" target="blank" href="<?php echo  $datos_contacto['principal']['whatsapp']['link'] ?>">
                                            <i class="mr-1 verde <?php echo $datos_contacto['principal']['whatsapp']['icono'] ?>"> </i>
                                            <p class="mt-2"> <?php echo $datos_contacto['principal']['whatsapp']['imprimir'] ?> </p>
                                        </a>
                                    </div>

                                    <div class="col-12 d-flex align-items-center justify-content-center hover_iconos">
                                        <div class="d-flex align-items-baseline justify-content-baseline">
                                            <i class="mr-1 verde <?php echo $datos_contacto['principal']['horario']['icono'] ?>"> </i>
                                            <p class="mt-3 w-100"> Lunes a Viernes de 8:00 a.m. 12:00 am – 2:00 p.m. 6:00 p.m. Sábados de 8:30 a.m. 12:30 p.m.</p>
                                        </div>
                                    </div>



                                </div>

                                <div class="mapa mt-3">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d155069.6549961206!2d-73.13700164375189!3d7.135561603611755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e683fd780aefda9%3A0x27061de190d4d4bb!2sC%C3%A1mara%20de%20Comercio%20de%20Bucaramanga!5e0!3m2!1ses!2sco!4v1579124524074!5m2!1ses!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- SEDE PRINCIPAL -->


                    <!-- SEDE CABECERA -->
                    <div class="col-12 p-0 mt-3">

                        <div class="">
                            <div id="dos" class="collapse" aria-labelledby="uno" data-parent="#accordion">

                                <div class="informacion_botones col-12 d-flex flex-wrap align-items-center justify-content-center">

                                    <div class="p-0 col-12 col-lg-6 col-xl-6 d-flex align-items-baseline justify-content-center">
                                        <i class="mr-1 verde <?php echo $datos_contacto['cabecera']['direccion']['icono'] ?>"> </i>
                                        <p class="mt-2"> <?php echo $datos_contacto['cabecera']['direccion']['direccion'] ?> </p>
                                    </div>

                                    <div class="p-0 col-12 col-lg-6 col-xl-6 d-flex align-items-baseline justify-content-center hover_iconos">
                                        <a class="d-flex align-items-baseline justify-content-baseline" href="mailto:<?php echo  $datos_contacto['cabecera']['correo'] ?>">
                                            <i class="mr-1 verde fas fa-envelope"></i>
                                            <p class="mt-2"> <?php echo $datos_contacto['cabecera']['correo'] ?> </p>
                                        </a>
                                    </div>

                                    <div class="p-0 col-12 col-xl-2 col-lg-2 d-flex align-items-baseline justify-content-center hover_iconos">
                                        <a class="d-flex align-items-baseline justify-content-baseline" href="tel:<?php echo  $datos_contacto['principal']['celular']['link'] ?>">
                                            <i class="mr-1 verde fas fa-mobile-alt"></i>
                                            <p class="mt-2"> <?php echo $datos_contacto['principal']['celular']['imprimir'] ?> </p>
                                        </a>
                                    </div>

                                    <div class="p-0 col-12 col-lg-2 col-xl-2  d-flex align-items-baseline justify-content-center hover_iconos">
                                        <a class="d-flex align-items-baseline justify-content-baseline" href="tel:<?php echo  $datos_contacto['cabecera']['telefono_fijo']['link'] ?>">
                                            <i class="mr-1 verde <?php echo $datos_contacto['cabecera']['telefono_fijo']['icono'] ?>"> </i>
                                            <p class="mt-2"> <?php echo $datos_contacto['cabecera']['telefono_fijo']['imprimir'] ?> </p>
                                        </a>
                                    </div>



                                    <div class="p-0 col-12 col-lg-2 col-xl-2 d-flex align-items-baseline justify-content-center hover_iconos">
                                        <a class="d-flex align-items-baseline justify-content-baseline" target="blank" href="<?php echo  $datos_contacto['principal']['whatsapp']['link'] ?>">
                                            <i class="mr-1 verde <?php echo $datos_contacto['principal']['whatsapp']['icono'] ?>"> </i>
                                            <p class="mt-2"> <?php echo $datos_contacto['principal']['whatsapp']['imprimir'] ?> </p>
                                        </a>
                                    </div>

                                    <div class="col-12  d-flex align-items-center justify-content-center hover_iconos">
                                        <div class="d-flex align-items-baseline justify-content-baseline">
                                            <i class="mr-1 verde <?php echo $datos_contacto['principal']['horario']['icono'] ?>"> </i>
                                            <p class="mt-3 w-100"> Lunes a Viernes de 8:30 a.m. 12:30 a.m. – 2:30 p.m. 6:30 p.m. Sábados de 8:30 a.m. 12:30 p.m. </p>
                                        </div>
                                    </div>



                                </div>

                                <div class="mapa mt-3">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3329.148226430188!2d-73.11443396155704!3d7.120579936578651!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e683fdff4b75757%3A0x56899c85e32e676e!2sCl.%2042%20%2329-82%2C%20Bucaramanga%2C%20Santander!5e0!3m2!1ses!2sco!4v1579124630902!5m2!1ses!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- SEDE CABECERA -->


                    <!-- SEDE CAÑAVERAL -->
                    <div class="col-12 p-0 mt-3">

                        <div class="">
                            <div id="tres" class="collapse" aria-labelledby="uno" data-parent="#accordion">

                                <div class="informacion_botones col-12 d-flex flex-wrap align-items-center justify-content-center">

                                    <div class="p-0 col-12 col-lg-6 col-xl-6 d-flex align-items-baseline justify-content-center">
                                        <i class="mr-1 verde <?php echo $datos_contacto['cañaveral']['direccion']['icono'] ?>"> </i>
                                        <p class="mt-2"> <?php echo $datos_contacto['cañaveral']['direccion']['direccion'] ?> </p>
                                    </div>

                                    <div class="p-0 col-12 col-lg-6 col-xl-6 d-flex align-items-baseline justify-content-center hover_iconos">
                                        <a class="d-flex align-items-baseline justify-content-baseline" href="mailto:<?php echo  $datos_contacto['cañaveral']['correo'] ?>">
                                            <i class="mr-1 verde fas fa-envelope"></i>
                                            <p class="mt-2"> <?php echo $datos_contacto['cañaveral']['correo'] ?> </p>
                                        </a>
                                    </div>

                                    <div class="p-0 col-12 col-xl-2 col-lg-2 d-flex align-items-baseline justify-content-center hover_iconos">
                                        <a class="d-flex align-items-baseline justify-content-baseline" href="tel:<?php echo  $datos_contacto['principal']['celular']['link'] ?>">
                                            <i class="mr-1 verde fas fa-mobile-alt"></i>
                                            <p class="mt-2"> <?php echo $datos_contacto['principal']['celular']['imprimir'] ?> </p>
                                        </a>
                                    </div>

                                    <div class="p-0 col-12 col-lg-2 col-xl-2  d-flex align-items-baseline justify-content-center hover_iconos">
                                        <a class="d-flex align-items-baseline justify-content-baseline" href="tel:<?php echo  $datos_contacto['cañaveral']['telefono_fijo']['link'] ?>">
                                            <i class="mr-1 verde <?php echo $datos_contacto['cañaveral']['telefono_fijo']['icono'] ?>"> </i>
                                            <p class="mt-2"> <?php echo $datos_contacto['cañaveral']['telefono_fijo']['imprimir'] ?> </p>
                                        </a>
                                    </div>



                                    <div class="p-0 col-12 col-lg-2 col-xl-2  d-flex align-items-baseline justify-content-center hover_iconos">
                                        <a class="d-flex align-items-baseline justify-content-baseline" target="blank" href="<?php echo  $datos_contacto['cañaveral']['whatsapp']['link'] ?>">
                                            <i class="mr-1 verde <?php echo $datos_contacto['cañaveral']['whatsapp']['icono'] ?>"> </i>
                                            <p class="mt-2"> <?php echo $datos_contacto['cañaveral']['whatsapp']['imprimir'] ?> </p>
                                        </a>
                                    </div>

                                    <div class="col-12  d-flex align-items-center justify-content-center hover_iconos">
                                        <div class="d-flex align-items-baseline justify-content-baseline">
                                            <i class="mr-1 verde <?php echo $datos_contacto['cañaveral']['horario']['icono'] ?>"> </i>
                                            <p class="mt-3 w-100"> Lunes a Viernes de 8:30 a.m. 12:30 a.m. – 2:30 p.m. 6:30 p.m. Sábados de 8:30 a.m. 12:30 p.m. </p>
                                        </div>
                                    </div>

                                </div>

                                <div class="mapa mt-3">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.4741727341575!2d-73.10892298590406!3d7.070891518520871!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e683f723638109b%3A0x660df5efd17b9a67!2sCentro%20Comercial%20Ca%C3%B1averal!5e0!3m2!1ses!2sco!4v1579124740435!5m2!1ses!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                                </div>

                            </div>
                        </div>



                    </div>
                    <!-- SEDE CAÑAVERAL -->

                </div>


                <!-- FORMULARIO -->
                <div class="container">
                    <form action="email/enviarContacto.php" method="POST" class="margen_contenedores_index">

                        <div class="text-center row">

                            <div class="my-3 col-12 col-md-6 col-lg-6 col-xl-6">
                                <select class="border form-control" name="solicitud" required>
                                    <option selected disabled> Tipo de Solicitud </option>
                                    <option value="Información de Arriendos" > Información de Arriendos </option>
                                    <option value="Peticion Queja o Reclamo" > Petición, Queja o Reclamo </option>
                                    <option value="Reporte de Mantenimiento" > Reporte de Mantenimiento </option>
                                </select>
                            </div>

                            <div class="my-3 col-12 col-md-6 col-lg-6 col-xl-6">
                                <input type="text" class="border form-control" id="" name="nombre" aria-describedby="emailHelp" placeholder="Nombre(s)" required>
                            </div>

                            <div class="my-3 col-12 col-md-6 col-lg-6 col-xl-6">
                                <input type="text" class="border form-control" id="" name="apellido" aria-describedby="emailHelp" placeholder="Apellido(s)" required>
                            </div>

                            <div class="mb-3 mb-md-0 mb-lg-0 mb-xl-0 align-items-center d-flex col-12 col-md-6 col-lg-6 col-xl-6">
                                <input type="number" class="border form-control" name="celular" aria-describedby="emailHelp" placeholder="Celular" required>
                            </div>

                            <div class="mb-3 col-12 col-md-6 col-lg-6 col-xl-6">
                                <input type="number" class="border form-control" name="telefono" aria-describedby="emailHelp" placeholder="Telefono Fijo" required>
                            </div>

                            <div class="mb-3 align-items-center d-flex col-12 col-md-6 col-lg-6 col-xl-6">
                                <input type="text" class="border form-control" name="correo" aria-describedby="emailHelp" placeholder="Correo electrónico" required>
                            </div>

                            <div class="mb-3 col-12 col-md-6 col-lg-6 col-xl-6">
                                <input type="text" class="border form-control" name="asunto" aria-describedby="emailHelp" placeholder="Asunto del mensaje" required>
                            </div>

                            <div class="mb-3 col-12 form-group d-flex align-items-start">
                                <label for="exampleFormControlTextarea1"></label>
                                <textarea class="form-control" name="mensaje" placeholder="Ingresa tu mensaje" rows="3"></textarea>
                            </div>

                            <div class="ml-3 form-group form-check">
                                <input type="checkbox" class="form-check-input" required>
                                <label class="form-check-label" for="exampleCheck1"> Confirmo que he leído, entendido, <a target="_blank" class="tratamiento" href="archivos/autorizacion_datos.pdf">autorizo</a> y acepto la <a class="tratamiento" href="archivos/tratamiento_datos.pdf" target="_blank" >política de tratamiento de datos personales.</a> </label>
                            </div>


                            <div class="m-0 justify-content-center justify-content-lg-start justify-content-xl-start col-12 mb-3 row">
                                <button class="col-3 boton_contactenos btn" type="submit" value="Enviar"> Enviar
                            </div>

                        </div>
                    </form>
                </div>
                <!-- FORMULARIO -->


                <!----------INFORMACION BOTONES---------->

            </div>


        </div>

    </section>
    <!-- BOTONES DE SUCURSALES -->




    <!-- FOOTER -->
    <section>
        <?php include 'layout/5footer.php' ?>
    </section>
    <!-- FOOTER -->

    <?php include 'layout/2archivos_footer.php' ?>

</body>

</html>