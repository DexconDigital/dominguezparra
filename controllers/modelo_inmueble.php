<?php

// modelo inmueble propiedades destacadas
function modelo_inmueble($r, $cantidad_inmuebles)
{
    for ($i = 0; $i < $cantidad_inmuebles; $i++) {
        $imagen = existeImagen(($r[$i]['foto1']));
        $codigo = str_ireplace("986-", "", $r[$i]['Codigo_Inmueble']);
        $api = $r[$i];

        echo '
        <div class="col-4">
        <div style="height:200px;" class="carta mb-5 ">
            <a href="./detalle_inmueble.php?co=' . $codigo . '" class="d-flex flex-wrap" id="inmuebles2">

                <!-- IMAGEN, GESTION Y TIPO DE INMUEBLE -->
                <div class="card2 col-12 p-0 position-relative">

                    <div class="imagen w-100 h-100">
                        <img src="' . $imagen . '" class="card-img-top" alt="...">
                    </div>

                    <div class="caja_negra"> </div>

                    <div class="tipo_inmueble d-flex align-items-center">
                        <p class="ml-2"> ' . $api['Tipo_Inmueble'] . ' </p>
                    </div>

                    <div class="tipo_gestion d-flex align-items-center">
                        <p class="mr-2"> ' . $api['Gestion'] . ' </p>
                    </div>

                </div>
                <!-- IMAGEN, GESTION Y TIPO DE INMUEBLE -->

                <!-- DESCRIPCIÓN DE INMUEBLE -->
                <div style="height:120px" class="contenido col-12 d-flex flex-column">

                    <div>
                        <div class="d-flex pl-3 mt-3 align-items-baseline">
                            <i class="mr-1 fas fa-map-marker-alt"></i>
                            <h4> ' . $api['Barrio'] . ', ' . $api['Ciudad'] . ' </h4>
                        </div>

                        <div class="ml-3 d-flex">
                            <p class="mr-5">';
                            if ($api['Gestion'] == 'Arriendo/venta') {
                                echo '$' . $api['Canon'] . ' <br>$' . $api['Venta'];
                            } else if ($api['Gestion'] == 'Arriendo') {
                                echo '$' . $api['Canon'];
                            } else {
                                echo '$' . $api['Venta'];
                            }
                            echo '</p>
                            <p class="text-muted"> Código: ' . $codigo . ' </p>
                        </div>

                    </div>

                    <!-- ICONOS -->
                    <div class="fondo_caracteristicas1 d-flex align-items-center justify-content-around">

                        <div class="d-flex py-2 align-items-center">
                            <i class="blanco fas fa-chart-area"></i>
                            <p class="blanco pl-2"> ' . $api['AreaConstruida'] . 'm<sup>2</sup> </p>
                        </div>

                        <div class="d-flex py-2 align-items-center">
                            <i class="blanco fas fa-bath"></i>
                            <p class="blanco pl-2"> ' . $api['banios'] . ' </p>
                        </div>

                        <div class="d-flex py-2 align-items-center">
                            <i class="blanco fas fa-bed"></i>
                            <p class="blanco pl-2"> ' . $api['Alcobas'] . ' </p>
                        </div>

                        <div class="d-flex py-2 align-items-center">
                            <i class="blanco fas fa-warehouse"></i>
                            <p class="blanco pl-2"> ' . $api['garaje'] . ' </p>
                        </div>

                    </div>
                    <div class="fondo_caracteristicas2"></div>
                    <div class="fondo_caracteristicas3"></div>
                    


                </div>
                

            </a>
        </div>
    </div>

        ';
    }
}
//modelo inmueble de la pagina de inmuebles.php
function modelo_inmueble2($r)
{
    for ($i = 0; $i < count($r); $i++) {
        $imagen = existeImagen(($r[$i]['foto1']));
        $codigo = str_ireplace("986-", "", $r[$i]['Codigo_Inmueble']);
        $api = $r[$i];
        $descripcion = $api['descripcionlarga'];
        $limite_de_cadena = 105;
        // recortar cadena
        if (strlen($descripcion) >= $limite_de_cadena) {
            $descripcion = substr($descripcion, 0, $limite_de_cadena) . '...';
        } else {
            $descripcion = $descripcion . '...';
        }
        echo '
        <div style="height:200px;" class="carta my-5 ">
        <a href="#" class="d-flex" id="inmuebles2">

            
            <div class="card2 col-6 p-0 position-relative">

                <div class="imagen w-100 h-100">
                    <img src="' . $imagen . '" class="card-img-top" alt="...">
                </div>

                <div class="caja_negra"> </div>

                <div class="tipo_inmueble d-flex align-items-center">
                    <p class="ml-2"> '. $api['Tipo_Inmueble'] .' </p>
                </div>

                <div class="tipo_gestion d-flex align-items-center">
                    <p class="mr-2"> ' . $api['Gestion'] . ' </p>
                </div>

            </div>
            
            <div class="contenido col-6">

                <div class="d-flex pl-3 align-items-baseline">
                    <i class="mr-1 fas fa-map-marker-alt"></i>
                    <h4> ' . $api['Barrio'] . ', ' . $api['Ciudad'] . ' </h4>
                </div>

                <div class="ml-3 d-flex">
                    <p class="mr-5"> $';
                    if ($api['Gestion'] == 'Arriendo') {
                        echo $api['Canon'];
                    } else if ($api['Gestion'] == 'Venta') {
                        echo $api['Venta'];
                    } else {
                        echo $api['Canon'] . '/ $' . $api['Venta'];
                    }
                    echo ' </p>
                    <p class="text-muted"> Código: '. $codigo .' </p>
                </div>

                <div>
                    <p> '.$descripcion.' </p>
                </div>

                <div class="fondo_caracteristicas1 d-flex align-items-center justify-content-around">

                    <div class="d-flex py-2 align-items-center">
                        <i class="blanco fas fa-chart-area"></i>
                        <p class="blanco pl-2"> ' . $api['AreaConstruida'] . 'm<sup>2 </p>
                    </div>

                    <div class="d-flex py-2 align-items-center">
                        <i class="blanco fas fa-bath"></i>
                        <p class="blanco pl-2"> ' . $api['banios'] . ' </p>
                    </div>

                    <div class="d-flex py-2 align-items-center">
                        <i class="blanco fas fa-bed"></i>
                        <p class="blanco pl-2"> ' . $api['Alcobas'] . ' </p>
                    </div>

                    <div class="d-flex py-2 align-items-center">
                        <i class="blanco fas fa-warehouse"></i>
                        <p class="blanco pl-2"> ' . $api['garaje'] . ' </p>
                    </div>

                </div>

                
                <div class="fondo_caracteristicas2"></div>
                

                
                <div class="fondo_caracteristicas3"></div>
                


            </div>
            

        </a>
    </div>
 ';
    }
}

//similares
function modelo_inmueble_similare($r)
{

    for ($i = 0; $i < count($r); $i++) {
        $imagen = existeImagen(($r[$i]['foto1']));
        $codigo = str_ireplace("987-", "", $r[$i]['Codigo_Inmueble']);
        $api = $r[$i];

        echo '
    <div class="col-lg-12 col-md-6 col-12">
    <div class="item mb-4">
    <div class="card" style="">
        <div class="property">
            <a href="./detalle_inmueble.php?co=' . $codigo . '">
                <div class="property-image">
                    <img class="alto_img" alt="" src="' . $imagen . '"></div>
                <div class="overlay">

                </div>
            </a>
        </div>
        <div class=" row col-12 margen_card">
            <div class="col-12">
                <p class="mb-1"><b>' . $api['Tipo_Inmueble'] . ' en ' . $api['Gestion'] . ' </b></p>
            </div>
            <div class="col-12">
                <p class="mb-1"><i class="fas fa-map-marker-alt mr-2"></i>' . $api['Barrio'] . ', ' . $api['Ciudad'] . '</p>
            </div>
            <hr>
            <div class="col-12">
                <p class="mb-1"> <small>
                        Código: ' . $codigo . '
                    </small>
                </p>
            </div>
        </div>
    </div>
 </div>
    </div>
    
    ';
    }
}
// Funciones para los modelos de propiedades
function existeImagen($r)
{
    if ($r == "") {
        $r = "images/no_image.png";
    }
    return $r;
}
