<?php
require 'https://canalava.org.mx/wp-content/themes/canalavamx/php/conexion.php';
require 'https://canalava.org.mx/wp-content/themes/canalavamx/php/funcs.php';

$errors = array();

if (!empty($_POST)) {
  $nombre = $mysqli->real_escape_string($_POST['nombre']);
  $email = $mysqli->real_escape_string($_POST['email']);
  $sector = $mysqli->real_escape_string($_POST['sector']);
  $n_afiliacion = $mysqli->real_escape_string($_POST['n_afiliacion']);
  $telefono = $mysqli->real_escape_string($_POST['telefono']);
  $info = $mysqli->real_escape_string($_POST['info']);
  $contra = $mysqli->real_escape_string($_POST['contra']);
  $con_contra = $mysqli->real_escape_string($_POST['con_contra']);
  $captcha = $mysqli->real_escape_string($_POST['g-recaptcha-response']);
  $activo = 0;
  $secret = '6LfDsKoUAAAAAPirEZt5d_6kpo2asJQglsiLbBO3'; //Modificar

  if (!$captcha) {
    $errors[] = "Por favor verifica el captcha";
  }

  if (isNull($nombre, $sector, $n_afiliacion, $telefono, $contra, $con_contra, $email)) {
    $errors[] = "Debe llenar todos los campos";
  }

  if (!isEmail($email)) {
    $errors[] = "Dirección de correo inválida";
  }

  if (!validaContra($contra, $con_contra)) {
    $errors[] = "Las contraseñas no coinciden";
  }



  if (emailExiste($email)) {
    $errors[] = "El correo electronico $email ya existe";
  }

  if (count($errors) == 0) {

    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha");

    $arr = json_decode($response, TRUE);

    if ($arr['success']) {

      $pass_hash = hashPassword($password);
      $token = generateToken();

      $registro = registraUsuario($nombre, $sector, $n_afiliacion, $telefono, $pass_hash, $email, $activo, $token);

      if ($registro > 0) {
        $url = 'http://' . $_SERVER["canalava.org.mx"] . '/login/activar.php?id=' . $registro . '&val=' . $token;

        $asunto = 'Activar Cuenta - Sistema de Usuarios';
        $cuerpo = "Estimado $nombre: <br /><br />Para continuar con el proceso de registro, es indispensable de click en la siguiente liga <a href='$url'>Activar Cuenta</a>";

        if (enviarEmail($email, $nombre, $asunto, $cuerpo)) {

          echo "Para terminar el proceso de registro siga las instrucciones que le hemos enviado la direccion de correo electronico: $email";
          echo "<br><a href='index.php' >Iniciar Sesion</a>";
          exit;
        } else {
          $erros[] = "Error al enviar Email";
        }
      } else {
        $errors[] = "Error al Registrar";
      }
    } else {
      $errors[] = 'Error al comprobar Captcha';
    }
  }
}
header('Location: https://canalava.org.mx/beneficios/');
?>
