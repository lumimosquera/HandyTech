<?php include_once 'Views/template-principal/header.php'; ?>


<link rel="stylesheet" href="<?php echo BASE_URL . 'assets/css/midesingl.css'; ?>">
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
                            <h1 class="h1 text-danger">HandyTech</h1>
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

                    <?php
                    $imageUrl = BASE_URL . 'assets/img/banner_img_02.jpg';
                    echo '<!-- URL de la imagen: ' . $imageUrl . ' -->';
                    ?>
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src="<?php echo $imageUrl; ?>" alt="Handy Image">
                    </div>


                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left">
                            <h1 class="h1">Proident occaecat</h1>
                            <h3 class="h2">Aliquip ex ea commodo consequat</h3>
                            <p>
                                You are permitted to use this Zay CSS template for your commercial websites.
                                You are <strong>not permitted</strong> to re-distribute the template ZIP file in any kind of template collection websites.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container">
                <div class="row p-5">


                    <?php
                    // Construye la URL de la imagen
                    $imageUrl = BASE_URL . 'assets/img/banner_img_03.jpg';
                    ?>
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src="<?php echo $imageUrl; ?>" alt="Handy Image">
                    </div>

                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left">
                            <h1 class="h1">Repr in voluptate</h1>
                            <h3 class="h2">Ullamco laboris nisi ut </h3>
                            <p>
                                We bring you 100% free CSS templates for your websites.
                                If you wish to support TemplateMo, please make a small contribution via PayPal or tell your friends about our website. Thank you.
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



<!-- Categorías finales del mes -->
<section class="container py-5">
    <div class="row text-center pt-3">
        <div class="col-lg-6 m-auto">
            <h1 class="h1">Categorías del Mes</h1>
            <p>
                HandyTech Local es tu tienda en línea de tecnología práctica y accesible. Inspirada en Amazon y MercadoLibre, ofrece productos innovadores que facilitan tu vida diaria. Con un enfoque local y personalizado, conecta a los usuarios con lo mejor de la tecnología moderna de manera conveniente.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="#"><img src="<?php echo BASE_URL; ?>assets/img/category_img_01.jpg" class="rounded-circle img-fluid border"></a>
            <h5 class="text-center mt-3 mb-3">Tecnología Portátil</h5>
            <p class="text-center"><a class="btn btn-danger">Ver Más</a></p>
        </div>
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="#"><img src="<?php echo BASE_URL; ?>assets/img/category_img_02.jpg" class="rounded-circle img-fluid border"></a>
            <h5 class="text-center mt-3 mb-3">Calzado Inteligente</h5>
            <p class="text-center"><a class="btn btn-danger">Ver Más</a></p>
        </div>
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="#"><img src="<?php echo BASE_URL; ?>assets/img/category_img_03.jpg" class="rounded-circle img-fluid border"></a>
            <h5 class="text-center mt-3 mb-3">Accesorios Útiles</h5>
            <p class="text-center"><a class="btn btn-danger">Ver Más</a></p>
        </div>
    </div>
</section>
<!-- Categorías finales del mes -->


<!-- Iniciar producto destacado -->
<!-- Start Featured Product -->
<section class="bg-light">
    <div class="container py-5">
        <div class="row text-center py-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Producto Destacado</h1>
                <p>
                    Descubre lo último en tecnología práctica y accesible que facilita tu vida diaria. 
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <a href="shop-single.html">
                        <img src="<?php echo BASE_URL; ?>assets/img/feature_prod_01.jpg" class="card-img-top" alt="Gym Weight">
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
                            <li class="text-muted">$240.00</li>
                        </ul>
                        <a href="shop-single.html" class="h2 text-decoration-none text-dark">Gym Weight</a>
                        <p class="card-text">
                            Ideal para tus entrenamientos en casa, este peso de gimnasio es esencial para mantenerte en forma.
                        </p>
                        <p class="text-muted">Reseñas (24)</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <a href="shop-single.html">
                        <img src="<?php echo BASE_URL; ?>assets/img/feature_prod_02.jpg" class="card-img-top" alt="Cloud Nike Shoes">
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
                            <li class="text-muted">$480.00</li>
                        </ul>
                        <a href="shop-single.html" class="h2 text-decoration-none text-dark">Cloud Nike Shoes</a>
                        <p class="card-text">
                            Las zapatillas perfectas para tus actividades diarias, combinando comodidad y estilo.
                        </p>
                        <p class="text-muted">Reseñas (48)</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <a href="shop-single.html">
                        <img src="<?php echo BASE_URL; ?>assets/img/feature_prod_03.jpg" class="card-img-top" alt="Summer Addides Shoes">
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
                            <li class="text-muted">$360.00</li>
                        </ul>
                        <a href="shop-single.html" class="h2 text-decoration-none text-dark">Summer Addides Shoes</a>
                        <p class="card-text">
                            Perfectas para el verano, estas zapatillas combinan frescura y estilo para tus paseos.
                        </p>
                        <p class="text-muted">Reseñas (74)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Featured Product -->


<!-- Start Footer -->

<!-- End Footer -->
<?php include_once 'Views/template-principal/footer.php'; ?>

</body>

</html>