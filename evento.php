<?php
    $destino = "ventas@canalava.org.mx";
    $email_subject = "Registro para Evento";
    $nombre = $_Post["nombre"];
    $apellido = $_Post["apellido"];
    $email = $_Post["correo"];
    $telefono = $_Post["telefono"];
    $mensaje = $_Post["mensaje"];

    $contenido = "Registro para Evento:\n\n";
    $contenido .= "Nombre(s): " . $_POST['nombre'] . "\n";
    $contenido .= "Apellido(s): " . $_POST['apellido'] . "\n\n";
    $contenido .= "E-Mail: " . $_POST['correo'] . "\n\n";
    $contenido .= "Telefono: " . $_POST['telefono'] . "\n\n";
    $contenido .= "Mensaje: " . $_POST['mensaje'] . "\n\n";

    @mail($destino, $email_subject, $contenido);
    header("Location:gracias.html");
?>