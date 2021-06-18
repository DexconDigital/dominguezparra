<?php
require 'admin/conexion.php';
$con = Conect();
$id_inmobiliaria = 15;

$qry = ( "SELECT id_user
FROM usuarios WHERE id_user = '$id_inmobiliaria' AND usuario = '".$_POST['usuariolg']."' 
AND password = '".$_POST['passlg']."'" );

$result = $con->prepare( $qry );
$result->execute();

$row = $result->fetch();
$rowcount = $result->rowCount();

if ( $rowcount == 1 ):
$datos = $row;
echo json_encode( array( 'error' => false, 'tipo' => $datos['id_user'] ) );
else:
echo json_encode( array( 'error' => true ) );
endif;
?>

