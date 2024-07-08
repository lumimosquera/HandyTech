 <!--  Footer -->
 <header>
     <link rel="stylesheet" href="<?php echo BASE_URL . 'assets/css/templatemo.css'; ?>">
 </header>
 <footer class="pie-pagina">
     <div class="grupo-1">
         <div class="box">
             <figure><a href="#">
                     <?php
                        // Verifica la URL generada
                        $imageUrl = BASE_URL . 'assets/img/Handy.svg';
                        echo '<!-- URL de la imagen: ' . $imageUrl . ' -->';
                        ?>

                     <img class="img-fluid" src="<?php echo $imageUrl; ?>" alt="Handy Image">
                 </a></figure>
         </div>
         <div class="box">
             <h2>HandyTech</h2>
             <P>Tu destino tecnológico. Encuentra los mejores productos tecnológicos y soluciones innovadoras en un solo lugar.</P>
             <h4>Enlaces Útiles</h4>
             <ul>
                 <li><a href="#about"><i class="fas fa-info-circle"></i> Sobre Nosotros</a></li>
                 <li><a href="#services"><i class="fas fa-concierge-bell"></i> Servicios</a></li>
                 <li><a href="#faq"><i class="fas fa-question-circle"></i> Preguntas Frecuentes</a></li>

             </ul>
         </div>

         <div class="box">
             <div class="contacto">
                 <h2>CONTACTO</h2>
                 <ul class="list-unstyled  footer-link-list">
                     <li>
                         <i class="fas fa-phone-alt"></i>
                         <a class="text-decoration-none" href="#">789 547 452</a>
                     </li>
                     <li>
                         <i class="fa fa-envelope fa-fw"></i>
                         <a class="text-decoration-none" href="contacto@megainnova.com">contacto@megainnova.com</a>
                     </li>

                 </ul>

             </div>
             <h2>SIGUENOS</h2>
             <div class="red-social">
                 <a href="#" class="fa fa-facebook"></a>
                 <a href="#" class="fa fa-instagram"></a>
                 <a href="#" class="fa fa-twitter"></a>
                 <a href="#" class="fa fa-youtube"></a>
                 <a href="#" class="fa fa-linkedin"></a>
             </div>
         </div>
     </div>
     <div class="grupo-2">
         <small>&copy; 2024 <b>HandyTech</b> - Todos los derechos reservados.</small>
     </div>
 </footer>

 <!-- Start Script -->
 <script src="<?php echo BASE_URL; ?>assets/js/jquery-1.11.0.min.js"></script>
 <script src="<?php echo BASE_URL; ?>assets/js/jquery-migrate-1.2.1.min.js"></script>
 <script src="<?php echo BASE_URL; ?>assets/js/bootstrap.bundle.min.js"></script>
 <script src="<?php echo BASE_URL; ?>assets/js/templatemo.js"></script>
 <script src="<?php echo BASE_URL; ?>assets/js/custom.js"></script>
 <script src="<?php echo BASE_URL; ?>assets/js/sweetalert2.all.min.js"></script>
 <script src="<?php echo BASE_URL; ?>assets/js/carrito.js"></script>
 <!-- End Script -->