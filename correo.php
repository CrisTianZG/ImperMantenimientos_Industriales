<?php

    $destino = "dejaramillo953@gmail.com";
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    $contenido = "Nombre: " .$nombre . "\nCorreo: " .$email . "\nTelefono: " .$phone  . "\nMensaje" .$mensaje;
    mail($destino,$asunto,$contenido);
    header("Location:index.php");



   

?>