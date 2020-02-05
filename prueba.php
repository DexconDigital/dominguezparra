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
        .caja {
            background: url(images/imagen_nosotros.jpg) center / cover , linear-gradient(95deg, white, blue);
            background-blend-mode: screen;
            width: 300px;
            height: 300px;


        }

        .caja img {
            width: 100%;
            height: 100%;
        }
    </style>

</head>

<body>

    <div class="caja"></div>











    <?php include 'layout/2archivos_footer.php' ?>

    <script src="js/servicios.js"></script>


</body>

</html>