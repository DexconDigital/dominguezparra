<?php
require_once 'conexion.php';

$nombre = $_REQUEST["titulo"];
$descripcion = $_REQUEST["descripcion"];
$url = $_REQUEST["url"];
$insta_url = $_REQUEST["insta_url"];
$fecha = $_REQUEST["fecha"];
$noticia = $_POST["noticia"];
$foto = $_FILES["imagen"]["name"];
$ruta = $_FILES["imagen"]["tmp_name"];
$nombre_foto = str_replace( " ", "", $foto );
$destino = "fotos/".$nombre_foto;
$fecha = date( "Y-m-d" );
$id_inmo = 12;

$nombre_ar = $_FILES['archivo']['name'];
$limite_kb = 850;
if ( $nombre_ar != "" ) {
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $rutas = $_FILES['archivo']['tmp_name'];
    $nombre_archivo = str_replace( " ", "", $nombre_ar );
    $destinos = "archivo/".$nombre_archivo;

    if ( $tamanio <= $limite_kb * 1024 ) {
        $nombre_archivo = str_replace( " ", "", $nombre_ar );
        $destinos = "archivo/".$nombre_archivo;

    } else {
        echo "Archivo demaciado Grande";
    }
    $con = Conect();
    copy( $rutas, $destinos );
}

$con = Conect();
copy( $ruta, $destino );

if ( $nombre_ar != "" ) {
    $sql = ( "INSERT INTO `noticias` (`id`, `nombre`, `descripcion`, `video_url`, `instagram_url` , `imagen`, `archivo`, `noticia`, `fecha`, `id_inmobiliaria2`) VALUES (NULL, '$nombre', '$descripcion', '$url' , '$insta_url' , '$destino', '$destinos', '$noticia', '$fecha', '$id_inmo')" );
    $result = $con->prepare( $sql );
    $result->execute();
    echo  "<script language='javascript'>
        alert('Publicación Agregada Con Éxito');
        window.location.href='index.php'
        </script>";
} else {
    $sql = ( "INSERT INTO `noticias` (`id`, `nombre`, `descripcion`, `video_url`, `instagram_url` , `imagen`, `archivo`, `noticia`, `fecha`, `id_inmobiliaria2`) VALUES (NULL, '$nombre', '$descripcion', '$url' , '$insta_url' , '$destino', '', '$noticia', '$fecha', '$id_inmo')" );
    $result = $con->prepare( $sql );
    $result->execute();
    echo  "<script language='javascript'>
        alert('Publicación Agregada Con Éxito');
        window.location.href='index.php'
        </script>";
}
?>
