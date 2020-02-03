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

<style>



</style>

<body>



    <p id="parrafo" class=""> PRUUEBA Lorem ipsum dolor sit.    </p>

    <button id="botonnn">
        enviar
    </button>


    <?php include 'layout/2archivos_footer.php' ?>

    <script>

        parrafo = document.getElementById('parrafo');
       


        document.getElementById('botonnn').addEventListener('click', function(){
            parrafo.classList.add('font-weight-bold');
        });
    </script>



</body>

</html>