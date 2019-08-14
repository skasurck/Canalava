 <!--footeer-->
 <div class="container">
     <!-- Contact section starts here -->
     <div class="row py-5 px-3 text-white vertical-center" id="contact">
         <div class="row contact-div">
             <div class="col-md-6 pl-4">
                 <h6 class="mt-4 text-uppercase">Contacto con un agente de CANALAVA </h6>
                 <h3 class="mt-2 mb-4 mr-5">Hable con una persona real sobre cómo CANALAVA puede ayudar a su empresa.</h3>
             </div>
             <div class="w-100"></div>
             <div class="col-md-6">
                 <div class="row">
                     <div class="col-md-6">
                         <a class="btn btn-info text-light mt-3 mr-2 btn-block position-relative" href="tel: 5514-6101">
                             <!-- <i class="fa fa-phone position-absolute"></i> -->
                             <i class="fas fa-phone"></i>
                             5514-6101
                         </a>
                     </div>
                     <div class="col-md-6">
                         <a class="btn btn-info text-light btn-block mt-3 position-relative" href="mailto:ventas@canalava.org.mx">
                             <!-- <i class="fa fa-envelope-o position-absolute"></i> -->
                             <i class="far fa-envelope "></i>
                             Email CANALAVA
                         </a>
                     </div>

                 </div>
             </div>
         </div>
     </div>
     <!-- Contact section ends here -->
 </div>
 <footer>
     <div class="container">
         <div class="row">
             <div class="col-md-4">
                 <span class="copyright">Copyright © Canalava 2019</span>
             </div>
             <div class="col-md-4">
                 <ul class="list-inline social-buttons">
                     <li class="list-inline-item"><a href="https://twitter.com/canalava"><i class="fab fa-twitter"></i></a>
                     </li>
                     <li class="list-inline-item"><a href="https://www.facebook.com/profile.php?id=100009642275880"><i class="fab fa-facebook-f"></i></a>
                     </li>
                     <li class="list-inline-item"><a href="https://www.linkedin.com/company/canalava/"><i class="fab fa-linkedin-in"></i></a>
                     </li>
                     <li class="list-inline-item"><a href="https://plus.google.com/u/1/106230463617486207691"><i class="fab fa-google-plus"></i></a>
                     </li>
                     <li class="list-inline-item"><a href="https://www.instagram.com/canalava_marketing/"><i class="fab fa-instagram"></i></a>
                     </li>
                 </ul>
             </div>
             <div class="col-md-4">
                 <ul class="list-inline quicklinks">
                     <li class="list-inline-item tm"><a href="https://canalava.org.mx/aviso-de-privacidad/">Aviso de Privacidad</a>
                     </li>
                     <li class="list-inline-item tm"><a href="https://canalava.org.mx/terminos-y-condiciones/">Terminos y Condiciones</a>
                     </li>
                 </ul>
             </div>
         </div>
     </div>
 </footer>

 <!--fin del fotter-->
 <!--Inicio social bar-->
 <div class="social-bar">
     <a href="tel: 55-11-38-23" target="_blank" class="fas fa-phone-volume icon"></a>
     <a href="https://www.facebook.com/canalava/" target="_blank" class="fab fa-facebook-square icon"></a>
     <a href="https://twitter.com/canalava" target="_blank" class="fab fa-twitter-square icon"></a>
     <a href="mailto:ventas@canalava.org.mx" class="fas fa-envelope-square icon"></a>
 </div>
 <!--Inicio Modal-->
 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <h5>Introduce tus datos</h5>
                 <form>
                     <div class="form-group row">
                         <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
                         <div class="col-sm-10">
                             <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Email">
                         </div>
                     </div>
                     <div class="form-group row">
                         <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Contaseña</label>
                         <div class="col-sm-10">
                             <input type="password" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Contaseña">
                         </div>
                     </div>
                 </form>
                 <div class="row">
                     <div class="col-12">
                     <p><a href="#">Registrate</a> Solo socios</p>
                    </div>
                    <div class="col-12">
                        
                    </div>
                 </div>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
             </div>
         </div>
     </div>
 </div>
 <!-- Optional JavaScript -->
 <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/modalcana.js"></script>
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/cambiar-titulo.js"></script>
 <script src="<?php bloginfo('template_url'); ?>/js/eskju.jquery.scrollflow.js"></script>
 <script src="https://code.jquery.com/jquery-3.3.1.js" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.js" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.js" crossorigin="anonymous"></script>
 <?php wp_footer(); ?>

 </body>

 </html>