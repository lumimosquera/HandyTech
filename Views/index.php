<?php include_once 'Views/template-principal/header.php';?>



    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <?php
                            // Verifica la URL generada
                            $imageUrl = BASE_URL . 'assets/img/Handy.png';
                            echo '<!-- URL de la imagen: ' . $imageUrl . ' -->';
                            ?>
                            <img class="img-fluid" src="<?php echo $imageUrl; ?>" alt="Handy Image">
                        </div>

                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success">HandyTech</h1>
                                <h3 class="h2">Tu tienda en línea de tecnología práctica y accesible</h3>
                                <p>
                                    HandyTech Local es tu tienda en línea de tecnología práctica y accesible. Inspirada en Amazon y MercadoLibre, ofrece productos innovadores que facilitan tu vida diaria. Con un enfoque local y personalizado, conecta a los usuarios con lo mejor de la tecnología moderna de manera conveniente.
                                </p>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./<?php echo BASE_URL . 'assets/img/banner_img_02.jpg'; ?>">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Conéctate con el futuro</h1>
                                <h3 class="h2">Accesorios técnologicos de la mejor calidad al mejor precio en un solo lugar para tu comodidad</h3>
                                <p>
                                     <strong>A un solo paso</strong> 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./<?php echo BASE_URL; ?>assets/img/banner_img_03.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Da un toque a la innovación para ver impecable tu hogar</h1>
                                <h3 class="h2">El imperdible dispositivo de limpieza que te facilita la vida, ahorrando espacio, tiempo y energía</h3>
                                <p>
                                    Cuida tu interior, cuida tu paz, innova en tu hogar.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->


    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Lo más destacado en seguridad inteligente</h1>
                <p>
                    Aprovecha las promociones hasta agotar existencia
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./<?php echo BASE_URL; ?>assets/img/category_img_01.jpg" class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3">Sensores</h5>
                <p class="text-center"><a class="btn btn-success">Ver</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./<?php echo BASE_URL; ?>assets/img/category_img_02.jpg" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Cámaras</h2>
                <p class="text-center"><a class="btn btn-success">Ver</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./<?php echo BASE_URL; ?>assets/img/category_img_03.jpg" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Sistemas</h2>
                <p class="text-center"><a class="btn btn-success">Ver</a></p>
            </div>
        </div>
    </section>
    <!-- End Categories of The Month -->


    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Productos más populares en PC</h1>
                    <p>
                       Aquí podrás encontrar infinidad de accesorios, dispositivos y perifericos para modificar o armar tu PC.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="./<?php echo BASE_URL; ?>assets/img/feature_prod_01.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">$42.999</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Ratón inalámbrico</a>
                            <p class="card-text">
                            Logitech Ratón inalámbrico M185, 2.4 GHz con mini receptor USB, duración de la batería de 12 meses, seguimiento óptico de 1000 DPI, PC/Mac/Laptop ambidiestro, color gris Swift
                            </p>
                            <p class="text-muted">Vistas (84)</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="./<?php echo BASE_URL; ?>assets/img/feature_prod_02.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">$109.999</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Kits de reparación</a>
                            <p class="card-text">
                            STREBITO - Juego de destornilladores de precisión de 142 piezas con kit de herramientas de reparación magnética de 120 puntas para iPhone, MacBook, computadora, laptop, PC, tableta, PS4, Xbox, Nintendo, consola de juegos.
                            </p>
                            <p class="text-muted">Vistas (48)</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="./<?php echo BASE_URL; ?>assets/img/feature_prod_03.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">$360.000</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Soporte de monitor doble</a>
                            <p class="card-text">
                            HUANUO Soporte de monitor doble, soporte giratorio de escritorio con resorte ajustable, soporte giratorio Vesa con abrazadera C, base de montaje con ojales para pantallas de computadora de 13 a 30
                            </p>
                            <p class="text-muted">Vistas (74)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Product -->


    <!-- Start Footer -->
   
    <!-- End Footer -->
    <?php include_once 'Views/template-principal/footer.php';?>
  
</body>

</html>