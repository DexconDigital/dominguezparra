<?php require 'variables/variables.php';
$page = "Inicio" ?>
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

    <header>

        <section class="container h-100 d-flex align-items-center justify-content-end">

            <section id="seccion_redes">

                <div class="contenedor_iconos d-flex justify-content-around">
                    <div>
                        <a href="#"><i class="color_iconos <?php echo $redes_sociales['facebook']['icono'] ?>"></i></a>
                    </div>

                    <div>
                        <a href="#"><i class="color_iconos <?php echo $redes_sociales['twitter']['icono'] ?>"></i></a>
                    </div>

                    <div>
                        <a href="#"><i class="color_iconos <?php echo $datos_contacto['principal']['whatsapp']['icono'] ?>"></i></a>
                    </div>
                </div>

            </section>

            <section id="menu">

            </section>

        </section>





    </header>

</body>

</html>