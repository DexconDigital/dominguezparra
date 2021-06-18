<?php

require_once("conexion.php");

$con = Conect();
$array = array();

$sql1 = "SELECT * FROM asesores  where id_inmobiliaria = 15 order by id desc";
$result = $con->prepare( $sql1 );
$result->execute();

$resultado = $result->fetchAll();

foreach ( $resultado as $key => $field ) {
    $nombre = $field['nombre'];
    $id = $field['id'];
    $telefono = $field['telefono'];
    $celular = $field['celular'];
    $correo = $field['correo'];
    $imagen = $field['imagen'];
    $fecha = $field['fecha'];
    $cargo = $field['cargo'];

    $asesor_array[] = array(
        'nombre' => $nombre, 
        'id' => $id,
        'telefono' => $telefono,
        'correo' => $correo,
        'imagen' => $imagen,
        'fecha' => $fecha,
        'cargo' => $cargo,
        'celular' => $celular,
    );
}

function modelo_asesor($r)
{
     for ($i = 0; $i < count($r); $i++) {
        $ruta_imagen = "./dominguez-admin/admin/" . $r[$i]['imagen'];
        echo '
        <div class="col-12 col-md-4 col-lg-3 col-xl-3 mb-5">
        <a href="#">
            <div class="carta d-flex flex-column">

                <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->
                <div clas="text-break">
                    <!-- IMAGEN ASESOR -->
                    <div class="imagen">
                        <img class="w-100 h-100" src="'.$ruta_imagen.'" class="card-img-top" alt="...">
                    </div>
                    <!-- IMAGEN ASESOR -->

                    <!-- TEXTO ANIMADO -->
                    <!-- <p class="texto-animado px-2 mr-3 mt-4 text-break"> ' . $r[$i]['cargo'] . ' </p> -->
                    <!-- TEXTO ANIMADO -->
                </div>
                <!-- IMAGEN ASESOR Y TEXTO ANIMADO -->


                <div class="rounded caja_texto flex-column position-relative d-flex align-items-center justify-content-center">
                    <div class="w-auto d-flex align-items-baseline jusutify-content-center">
                        <i class="fas fa-user mx-2 verde"></i>
                        <p id="nombre_asesor" class="pt-4 font-weight-bold"> ' . $r[$i]['nombre'] . ' </p>
                    </div>
                    <p class="pb-4 text-center"> ' . $r[$i]['cargo'] . ' </p>
                </div>

            </div>
        </a>

        <div class="position-absolute rounded border caja_verde d-flex align-items-center justify-content-center">

            <a class="mr-2" href="mailto:' . $r[$i]['correo'] . '"><i class="fas fa-envelope"> </i></a>
            <a class="mr-2" href="tel:' . $r[$i]['telefono'] . '"> <i class="fas fa-mobile-alt"></i> </a>
            <a target="blank" class="mr-2" href="https://api.whatsapp.com/send?phone=+57' . $r[$i]['celular'] . '"> <i class="fab fa-whatsapp"></i> </a>
        </div>
    </div>
    
    ';
    }
}
