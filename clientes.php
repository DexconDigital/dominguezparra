<?php require 'variables/variables.php';
$page = "Clientes" ?>
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

    <!-- HEADER -->
    <section>
        <?php include 'layout/3header.php' ?>
    </section>
    <!-- HEADER -->

    <!-- BANNER -->
    <section id="banner" class="margin_top position-relative">

        <div class="imagen imagen_clientes d-none d-xl-block"> </div>
        <div class="imagen imagen_clientes2 d-xl-none d-sm-block d-md-block d-lg-block"> </div>

        <div id="fondo_negro"></div>

        <div class="contenido_banner d-flex align-items-center justify-content-center flex-column">
            <h1> Clientes </h1>
            <p> <a href="index.php">Inicio</a> / Clientes </p>
        </div>

    </section>
    <!-- BANNER -->


    <section id="seccion_clientes" class="d-flex flex-wrap container my-5">

        <div class="caja mb-3 mb-md-0 mb-lg-0 mb-xl-0 col-12 col-md-4 col-xl-4 col-lg-4 animacion_1" >
            <h4 class="verde text-center font-weight-bold mb-3"> Arrendatarios </h4>
            <div class="position-relative imagen">
                <img class="w-100 rounded position-absolute w-100 h-100" src="images/arrendatarios.jpg" alt="">
            </div>
            <p class="mt-2 text-justify"> Señor arrendatario, aquí podrá descargar sus Recibos de Pago, Facturas y Certificados Tributarios </p>
            <br/>
            <br/>
            <a target="_blank" href="https://www.simiinmobiliarias.com/base/simired/simidocsapi1.0/index.php?inmo=986&amp;tipo=2" class="mt-2 boton_principal btn">  Ingrese </a>
        </div>

        <div class="caja mb-3 mb-md-0 mb-lg-0 mb-xl-0 col-12 col-md-4 col-xl-4 col-lg-4 animacion_2" >
            <h4 class="verde text-center font-weight-bold mb-3"> Propietarios </h4>
            <div class="position-relative imagen">
                <img class="w-100 rounded position-absolute w-100 h-100" src="images/propietarios.jpg" alt="">
            </div>
            <p class="mt-2 text-justify"> Señor propietario, aquí podrá descargar sus Estados de Cuenta, Facturas y Certificados Tributarios </p>
            <br/>
            <br/>
            <a target="_blank" href="https://www.simiinmobiliarias.com/base/simired/simidocsapi1.0/index.php?inmo=986&amp;tipo=1" class="mt-2 boton_principal btn"> Ingrese </a> 
        </div>

        <div class="caja col-12 col-md-4 col-xl-4 col-lg-4 animacion_3" >
            <h4 class="verde text-center font-weight-bold mb-3"> Pagos En línea </h4>
            <div class="position-relative imagen">
                <img class="w-100 rounded position-absolute w-100 h-100" src="images/pagoamigo.jpg" alt="">
            </div>
            <p class="mt-2 text-justify"> Pague seguro en línea con Mi Pago Amigo del Banco Caja Social </p>
            <br/>
            <br/>
            <a target="_blank" href="https://www.mipagoamigo.com/MPA_WebSite/ServicePayments" class="mt-2 boton_principal btn"> Ingrese </a> 
        </div>


    </section>















    <!-- FOOTER -->
    <section>
        <?php include 'layout/5footer.php' ?>
    </section>
    <!-- FOOTER -->

    <?php include 'layout/2archivos_footer.php' ?>


</body>

</html>