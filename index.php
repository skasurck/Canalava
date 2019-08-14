<?php
/**
 * The main template file
 */

get_header(); ?>

    <!-- inicio slider -->
    <div class="container-fluid contenedor-slider d-flex justify-content-center">
        <br><br><br><br>
        <div id="carouselExampleIndicators" class="carousel slide slider-home " data-ride="carousel" data-interval="8000" data-pause="hover">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            
            </ol>
             <div class="carousel-inner">
                <div class="carousel-item active">
                <a href="https://canalava.org.mx/category/blog/"><img class="d-block w-100 img-slider-home" src="<?php bloginfo('template_url'); ?>/img/slider/2.png" alt="First slide"></a>
                    
                        
                 
                </div>
               <div class="carousel-item">
               <a href="https://canalava.org.mx/cursos/"><img class="d-block w-100 img-slider-home" src="<?php bloginfo('template_url'); ?>/img/slider/agosto-2.png" alt="Second slide"></a>
                </div> 
             <!--
                <div class="carousel-item">
                    

                     <div class="carousel-caption d-none d-md-block texto-slider-3 ml-auto">
                     
                        <h1>Último Curso del 2018</h1>
                        <h2>Introducción al Servicio de Lavandería</h2><hr>
                        <h3>26-29 NOVIEMBRE 2018</h3>
                        <p class="text-center"><i class="fas fa-map-marker-alt"></i> Río Danubio 38 Col. Cuauhtémoc, Del. Cuauteémoc, CDMX CP. 06500 </p>
                        <hr style="background-color: white">
                        <h5 >Contactanos para mas informes</h5>
                        <p class="text-muted"></p>
                         <form name="formcurso"  method="POST" action="php/form-rapido.php">
                          <div class="form-group">
                            <label for="formGroupExampleInput">Nombre</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="nombre" name="nombre">
                          </div>
                          <div class="form-group">
                            <label for="formGroupExampleInput2">Correo</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="correo" name="email">
                          </div>
                           <button type="submit" class="btn btn-info">Enviar Mensaje</button> <span>&nbsp O &nbsp</span> <a href="tel:55146101 " class="btn btn-info  active btn-slider" role="button" aria-pressed="true">llamanos </a>
                        </form>
                       
                        
                      
                     </div>

                </div>-->
                <div class="carousel-item">
                    <img class="d-block w-100 img-slider-home" src="<?php bloginfo('template_url'); ?>/img/slider/sliderGDF.png" 						alt="Third slide">

                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 img-slider-home" src="<?php bloginfo('template_url'); ?>/img/slider/slider-TBuscamos.png" alt="fourth slide">

                </div>
                
            </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
        </div>
       
    </div>
    <!-- fin slider -->
    <!-- inicio del Main -->
    <!-- inicio del main Afiliate -->

    <div class="container bosy">
 <hr>
      <section class="bg-light bosy2">

<hr>

<div class="row">
<div class="card-deck  scrollflow -slide-top -opacity"><!-- fin slider-->
<div class="card">

<a href="https://canalava.org.mx/category/blog/"><img class="card-img-top img-responsive" src="https://canalava.org.mx/wp-content/themes/canalavamx/img/213.png" alt="Card image cap"></a>

<hr>

<div class="card-body">
<h5 class="card-title"><a href="https://canalava.org.mx/2019/04/29/beneficios-afiliacion/">Beneficios para nuevas afiliaciones</a></h5>
<p class="card-text">Beneficios al afiliarte a CANALAVA.</p>

</div>
<div class="card-footer"><small class="text-muted">Ultima Actualización 28 de Mayo 2019</small>

</div>
</div>
<div class="card"><img class="card-img-top" src="https://canalava.org.mx/wp-content/themes/canalavamx/img/2.png" alt="Card image cap">

<hr>

<div class="card-body">
<h5 class="card-title"><a href="https://canalava.org.mx/2019/04/29/beneficios-renovacion-2019/">Beneficios de renovación anticipada</a></h5>
<p class="card-text">Descubre los beneficios al renovar tu afiliación a CANALAVA</p>

</div>
<div class="card-footer"><small class="text-muted">Ultima Actualización 28 de Mayo 2019</small></div>
</div>
</div>
</div>
</section><!--Fin de Eventos-->
        <!--inicio promocion-->
        <div class="container">
        <h1 class="section-heading titulo-promo" style="color:#103254; margin-top: 2% "><i class="fab fa-wpforms iconos"></i> PROMOCIÓN MEMBRESÍA HASTA 30 DE AGOSTO</h1>
  <!-- /form -->
<div class="row" style="margin: 50px 0">
<div class="col-sm-12 col-md-6 col-md-pull-6>
      <span class=" aligncenter"="" style="font-size:18px; margin:10px 0"><b>Testimonio del beneficio</b> de la <u>Membresía a la CANALAVA</u>
<div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/328582437" allowfullscreen=""></iframe></div>
</div>
<div class="col-sm-12 col-md-6 col-md-push-6">
<div class="col-sm-12">
        <form name="formAfiliaciones" method="post" action="https://canalava.org.mx/wp-content/themes/canalavamx/php/afiliate.php">
<div class="form-row">
<div class="form-group col-sm-12">
              <label for="inputName">Nombre(s)</label>
<input type="text" name="nombre" required="" class="form-control" id="inputName" placeholder="Nombre"></div>
</div>
<div class="form-row">
<div class="form-group col-sm-12">
              <label for="inputEmail">Correo Electrónico</label>
<input type="email" class="form-control" name="email" required="" id="inputEmail" placeholder="ejemplo@empresa.com"></div>
</div>
<div class="form-row">
<div class="form-group col-sm-12">
              <label for="inputTel">Teléfono</label>
<input type="tel" class="form-control" name="telefono" required="" id="inputTel" placeholder="5522123486"></div>
</div>
<div class="form-row">
<div class="form-group col-sm-12" style="text-align: center;">
              <button type="submit" class="btn btn-info btn-lg btn-info-afiliacion">Quiero Información de Afiliación</button></div>
</div>
</form></div>
</div>
</div>
<a href="tel:55-5514-6101" class="btn-info-afiliacion-2" >Clic para llamarnos (55) 5514-6101</a>
<div style="padding-top: 50px;font-size: 20px; text-align: center;"><b>Beneficios de la <u>Afiliación a la CANALAVA</u></b></div>
<ul class="checkmark" style="padding-left: 0 !important;">
 	<li style="font-size: 23px !important;">
      <span style="font-size:18px">
<strong>Invitación Exclusiva a la Conferencia en las oficinas de Google sobre Digitalización de Lavanderías, Tintorerías y Planchadurias.</strong>
<p style="margin:15px 0">Evento exclusivo donde se presentan las mejores estrategias para que tu Lavanderías, Tintorerías y Planchadurias <u>gane más clientes en internet</u> - ¡puedes hacer las preguntas al equipo de Google! <u>Incluye: Invitación, comida y conectar con expertos</u> en marketing para Lavanderías, Tintorerías y Planchadurias.<strong> ¡Quedan sólo 15 boletos gratuitos disponibles!</strong></p>


</span></li>
 	<li style="font-size: 23px !important; margin-top: 35px"><span style="font-size:18px">Creación de una <b>página web rápida, muy fácil y 100% gratuitamente</b> para tu Lavanderías, Tintorerías y Planchadurias.
<p style="margin:15px 0">Ahora te ven, ahora te conocen, ahora te llaman.</p>


</span></li>
 	<li style="font-size: 23px !important;margin-top: 35px"><span style="font-size:18px"><b>2 meses de publicidad en Google gratis</b></span></li>
 	<li style="font-size: 23px !important;margin-top: 35px"> <span style="font-size:18px"><b>Videoconferencia mensual 100% gratuito</b> sobre estrategias digitales <b>con</b> el equipo de <b>la CANALAVA, Google y Kolau</b> específico para Lavanderías, Tintorerías y Planchadurias.
<p style="margin:15px 0">¡Puedes preguntar en directo tus dudas al equipo de Google!</p>


</span></li>
 	<li style="font-size: 23px !important;margin-top: 35px"> <span style="font-size:18px"><b>Asesoría gratuita</b> laboral, legal, de gestoría y trámites</span></li>
 	<li style="font-size: 23px !important;margin-top: 35px"> <span style="font-size:18px"><b>Capacitaciones gratuitas</b> por líderes en la industria de la Lavanderías, Tintorerías y Planchadurias.</span></li>
</ul>
<div class="row">
<div class="col-sm-12">
<span class="aligncenter" style="font-size:21px; margin-bottom:30px"><b>
<span style="font-size:70px; vertical-align: middle; color: #0F9948">‣</span> Sólo por</b> $2,150/año para Lavanderías, Planchadurias y $2,450/año para tintorerías si son nuevas afiliaciones <u>hasta el 30 de agosto</u>
</span>

<hr>

</div>
<style type="text/css">
    body{font-family:'Open Sans', sans-serif;}p{font-family:'Open Sans', sans-serif}ul.checkmark li{font-size:21px;margin-bottom:1em;list-style-type:none;padding:0 0 0 2.5em;position:relative}ul.checkmark li:after,ul.checkmark li:before{content:" ";display:block;position:absolute;top:40%}ul.checkmark li:after{width:.3em;height:.6em;border:solid #fff;border-width:0 .2em .2em 0;left:1em;margin-top:-.2em;-webkit-transform:rotate(45deg);-moz-transform:rotate(45deg);-o-transform:rotate(45deg);transform:rotate(45deg);-webkit-box-sizing:content-box!important;-moz-box-sizing:content-box!important;box-sizing:content-box!important}ul.checkmark li:before{border:.8em solid #0F9948;border-radius:.8em;height:0;width:0;left:.5em;margin-top:-.5em;-webkit-box-sizing:content-box!important;-moz-box-sizing:content-box!important;box-sizing:content-box!important}<br />
  </style></div>
</div>
        <!--Inicio de Modals
        <section class="Modal-index">        
            <div class="modal fade bd-example-modal-xl" id="modalcana" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title" style="text-align: center">Promoción CANALAVA</h1>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">  
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <a href="img/Global_CANALAVA..png"><img src="img/Global_CANALAVA..png" class="img-fluid" alt="Promocion Para socios canalava"></a>
                                    </div>
                                </div>
                            </div>         
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>                
                        </div>
                    </div>
                </div>
            </div>
        </section>
       Fin de Modals-->
        <!--Inicio Sectores-->
       
        <!--fin de Sectores-->
        <hr>
        <!--Inicio de Contacto-->
         <div class="row" >
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><i class="far fa-envelope iconos"></i> Contacto</h2>
                    <h3 class="section-subheading text-muted">Déjanos tus datos para más informes.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <form name="formIndex" id="contactForm" novalidate="" method="POST" action="https://canalava.org.mx/wp-content/themes/canalavamx/php/inicio.php">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nombre completo*" id="name" name="nombre" required data-validation-required-message="Por favor ingrese su nombre">
                                    <p class="d-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Correo Electrónico*" id="email" name="email" required data-validation-required-message="Por favor ingrese su dirección de Email">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Teléfono*" id="phone" name="telefono" required data-validation-required-message="Por favor ingrese su número Teléfonico.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Mensaje*" id="message" name="mensaje" required data-validation-required-message="Por favor ingrese su Mensaje."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                 <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-info">Enviar Mensaje</button>
                            </div>
                             <div class="g-recaptcha" data-sitekey="6LfMInEUAAAAAOW1Lct3ZOvDts2tcDPsHgzUzJQG"></div>
                            </div>
                            <div class="col-md-6">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15050.136805515323!2d-99.1687736!3d19.4325217!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfee07d0b706bb2eb!2sCANALAVA+C%C3%A1mara+Nacional+de+la+Industria+de+Lavander%C3%ADas!5e0!3m2!1ses-419!2smx!4v1528300071956" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                            <div class="clearfix"></div>
                           
                        </div>
                       
                    </form>
                </div>
                </div>
        <!--fin de contacto-->
        </div>
    <!--Fin del Main-->
   
<?php get_footer(); ?>