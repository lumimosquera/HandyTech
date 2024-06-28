<?php include_once 'Views/template-principal/header.php'; ?>


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
<?php foreach ($data['categorias'] as $categoria) { ?>
        <div class="col-12 col-md-2 p-5 mt-3">
            <a href="#"><img src="<?php echo $categoria['imagen']; ?>" class="rounded-circle img-fluid border"></a>
            <h5 class="text-center mt-3 mb-3"><?php echo $categoria['categoria']; ?></h5>
            <p class="text-center"><a class="btn btn-danger">Ver Más</a></p>
        </div>
        <?php }?>
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
            <?php foreach ($data['nuevoProductos'] as $producto){?>
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <a href="<?php echo BASE_URL . 'principal/detail/' . $producto['id'];?>">
                        <img src="<?php echo $producto['imagen']; ?>" class="card-img-top" alt="<?php echo $producto['nombre']; ?>">
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
                            <li class="text-muted"><?php echo MONEDA . ' ' .  $producto['precio']; ?></li>
                        </ul>
                        <a href="<?php echo BASE_URL . 'principal/detail/' . $producto['id'];?>" class="h2 text-decoration-none text-dark"><?php echo $producto['nombre']; ?></a>
                        <p class="card-text">
                        <?php echo $producto['descripcion']; ?>
                        </p>
                        <p class="text-muted">Reseñas (24)</p>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section>
<!-- End Featured Product -->


<!-- Start Footer -->

<!-- End Footer -->
<?php include_once 'Views/template-principal/footer.php'; ?>

</body>

</html>