<?php
//Llamando a cada input
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$correo= $_POST['correo'];
$telefono= $_POST['telefono'];
$servicio= $_POST['servicio'];
$mensaje= $_POST['mensaje'];

//Datos el correo de destino

$destinatario = "grupoaprenderbogota@gmail.com";
$asunto = "Contacto desde GrupoAprender Landing Page";

$email = "De: $nombre $apellido \n ";
$email .= "Correo: $correo \n";
$email .= "Telefono: $telefono \n";
$email .= "Servicio: $servicio \n";
$email .= "Mensaje: $mensaje";

//Enviando Mensaje
mail($destinatario, $asunto, $email);
header('Location:mensaje-de-envio.html')

?>