<?php
    /**
     * The template for displaying the header
     */
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
  function gtag(){dataLayer.push(arguments);}
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
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css">
    <!-- icono pagina -->
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/img/logocanalava-blanco.ico">
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">
    <!-- capcha CSS -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.js"></script>
    <!-- Efectos -->
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/eskju.jquery.scrollflow.js"></script>
    <!--chatbot-->
   <!-- Código de instalación Cliengo para https://canalava.org.mx --> <script type="text/javascript">(function () { var ldk = document.createElement('script'); ldk.type = 'text/javascript'; ldk.async = true; ldk.src = 'https://s.cliengo.com/weboptimizer/5cef4f20e4b0be3b224ad46c/5cef4f21e4b0be3b224ad46f.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ldk, s); })();</script>
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
        <?php wp_nav_menu( array( 
                'theme_location' => 'top',
                'container' => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id' => 'navbarNavDropdown',
                'items_wrap' => '<ul class="navbar-nav ml-auto align-middle ul-nav-home-canalava">%3$s</ul>',
                'menu_class' => 'nav-item'
              ) ); 
        ?>
    </nav>
    </header>
    
  
    <!--Fin del Navbar-->