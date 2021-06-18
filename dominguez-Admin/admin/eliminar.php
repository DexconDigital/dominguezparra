<?php
require_once( "conexion.php" );
$id = $_GET["id"];
$con = Conect();
$consulta = "SELECT * FROM noticias WHERE id = ?";
$resultado = $con->prepare( $consulta );
$resultado->execute( array( $id ) );

while ( $field = $resultado->fetch() ) {
    $imagen = $field['imagen'];
    $archivo = $field['archivo'];

}
unlink( $archivo );
unlink( $imagen );

$qry = "DELETE FROM noticias WHERE id = ? ";
$resultado = $con->prepare( $qry );
$resultado->execute( array( $id ) );

if ( !$resultado ) {
    echo 'No se logro realizar la peticion';
} else {
    header( "location: lista-publicaciones.php" );
}
?>
