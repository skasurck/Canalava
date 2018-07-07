<?php
if(isset($_POST['email'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "contacto@canalava.org.mx";
$email_subject = "Contacto desde el inicio";

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['nombre']) ||
!isset($_POST['email']) ||
!isset($_POST['telefono']) ||
!isset($_POST['mensaje'])) {

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}

    $email_message = "Detalles del formulario de contacto:\n\n";
    $email_message .= "Nombre: " . $_POST['nombre'] . "\n";
    $email_message .= "E-Mail: " . $_POST['email'] . "\n\n";
    $email_message .= "Telefono: " . $_POST['telefono'] . "\n\n";
    $email_message .= "Mensaje: " . $_POST['mensaje'] . "\n\n";


// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);



}
header("Location:gracias.html")
?>