<?php
/**
 * The template for displaying the header
 */
 require 'https://canalava.org.mx/wp-content/themes/canalavamx/php/conexion.php';
    require 'https://canalava.org.mx/wp-content/themes/canalavamx/php/funcs.php';

	$errors = array();
	
	if(!empty($_POST))
	{
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
		$secret = '6LfDsKoUAAAAAPirEZt5d_6kpo2asJQglsiLbBO3';//Modificar
		
		if(!$captcha){
			$errors[] = "Por favor verifica el captcha";
		}
		
		if(isNull($nombre, $sector, $n_afiliacion, $telefono, $contra, $con_contra, $email))
		{
			$errors[] = "Debe llenar todos los campos";
		}
		
		if(!isEmail($email))
		{
			$errors[] = "Dirección de correo inválida";
		}
		
		if(!validaContra($contra, $con_contra))
		{
			$errors[] = "Las contraseñas no coinciden";
		}		
		

		
		if(emailExiste($email))
		{
			$errors[] = "El correo electronico $email ya existe";
		}
		
		if(count($errors) == 0)
		{
			
			$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha");
			
			$arr = json_decode($response, TRUE);
			
			if($arr['success'])
			{
				
				$pass_hash = hashPassword($password);
				$token = generateToken();
				
                $registro = registraUsuario($nombre, $sector, $n_afiliacion, $telefono, $pass_hash, $email, $activo, $token);
                
				if($registro > 0)
				{				
					$url = 'http://'.$_SERVER["canalava.org.mx"].'/login/activar.php?id='.$registro.'&val='.$token;
					
					$asunto = 'Activar Cuenta - Sistema de Usuarios';
					$cuerpo = "Estimado $nombre: <br /><br />Para continuar con el proceso de registro, es indispensable de click en la siguiente liga <a href='$url'>Activar Cuenta</a>";
					
					if(enviarEmail($email, $nombre, $asunto, $cuerpo)){
						
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
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!--Inicio del head-->

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120752635-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-120752635-1');
    </script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Titulo-->
    <title><?php bloginfo('name'); ?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/boostrap4-personalizado.css" type="text/css">
    <!-- main CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/estilos-beneficios.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/estilos-cursos.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
    <!-- icono pagina -->
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/img/logocanalava-blanco.ico">
    <!-- iconos font-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" crossorigin="anonymous">
    <!-- capcha CSS -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.js"></script>
    <!-- Efectos -->
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/eskju.jquery.scrollflow.js"></script>
    <!--chatbot-->
    <!-- Código de instalación Cliengo para https://canalava.org.mx -->
    <script type="text/javascript">
        (function() {
            var ldk = document.createElement('script');
            ldk.type = 'text/javascript';
            ldk.async = true;
            ldk.src = 'https://s.cliengo.com/weboptimizer/5cef4f20e4b0be3b224ad46c/5cef4f21e4b0be3b224ad46f.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ldk, s);
        })();
    </script>
    <!--FIn chatbot-->
    <?php wp_head(); ?>
</head>
<!--Fin del head-->

<body <?php body_class(); ?>>
    <!--Navbar-->
    <header>

        <nav class="navbar navbar-expand-lg align-middle nav-home">
            <a class="navbar-brand" href="https://canalava.org.mx/"><img src="<?php bloginfo('template_url'); ?>/img/logocanalava.svg" class="img-logo" alt="Logo de la Camara Nacional de la industria del Lavado"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php wp_nav_menu(array(
                'theme_location' => 'top',
                'container' => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id' => 'navbarNavDropdown',
                'items_wrap' => '<ul class="navbar-nav ml-auto align-middle ul-nav-home-canalava">%3$s</ul>',
                'menu_class' => 'nav-item'
            ));
            ?>
        </nav>
    </header>


    <!--Fin del Navbar-->