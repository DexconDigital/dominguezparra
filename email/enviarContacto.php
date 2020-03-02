<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

if ($_POST) {
    $solicitud = $_POST['solicitud'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $celular = $_POST['celular'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
     
}
if($solicitud == 'Información de Arriendos'){
    // $email = 'recepcionprincipal @ dominguezparra.com.co';
   $email = 'wdsp9898@gmail.com';
}elseif($solicitud == 'Peticion Queja o Reclamo'){
    // $email = 'recepcionprincipal@dominguezparra.com.co';
    $email = 'wdsp9898@gmail.com';
}elseif($solicitud == 'Reporte de Mantenimiento'){
    // $email = 'mantenimiento@dominguezparra.com.co';
    $email = 'wdsp9898@gmail.com';
}

$mail = new PHPMailer(true);

try{
    $mail->isSMTP();

    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    //acceso
    $mail->CharSet = 'UTF-8';
    $mail->Username = 'masivoinmobiliarias@gmail.com';
    $mail->Password = 'dexcon2019@';

    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Mensaje para enviar
    
    $mail->isHTML(true);
    //Cabecera
    $mail->setFrom('AlejandroDominguezParra@AlejandroDominguezParra.com', 'AlejandroDominguezParra@AlejandroDominguezParra.com');
    //destinos
    $mail->addAddress($email);
    

    $mail->Subject='Mensaje desde la página web Inmobiliaria Alejandro Domínguez Parra';
    $mail->Body = '  <h3>Tipo de Solicitud: '.$solicitud.'</h3>
                    <span>Hola, '.$nombre.' '.$apellido.' quiere recibir información con respeto a:  <strong>'.$asunto.'</strong></span>
                    <h3>Sus datos de contacto son:</h3>
                    <ul>
                        <li>Correo: '.$correo.'</li>
                        <li>Telefono: '.$telefono.'</li>
                        <li>Celular: '.$celular.'</li>
                    </ul>
                    <h3>Mensaje:</h3>
                    <p>'.$mensaje.'</p>
    ';
    $mail->send();
    echo "<script>window.location.href='.././contactenos.php'</script>";

}catch(Exception $e){
    echo 'algo salio mal' , $e->getMessage();
}
