<?php include_once 'Views/template-principal/header.php';

?>


<!-- Start Content -->
<div class="container py-3">
    <div class="row">
        <!-- Start Content --->
        <div class="col-lg-2">
            <h1 class="h2 pb-3">Categories</h1>
            <ul class="list-unstyled templatemo-accordion">
                <li class="pb-3">
                    <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                        Gender
                        <i class="fa fa-fw fa-chevron-circle-down mt-1"></i>
                    </a>
                    <ul class="collapse show list-unstyled pl-3">
                        <li><a class="text-decoration-none" href="#">Men</a></li>
                        <li><a class="text-decoration-none" href="#">Women</a></li>
                    </ul>
                </li>
                <li class="pb-3">
                    <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                        Sale
                        <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                    </a>
                    <ul id="collapseTwo" class="collapse list-unstyled pl-3">
                        <li><a class="text-decoration-none" href="#">Sport</a></li>
                        <li><a class="text-decoration-none" href="#">Luxury</a></li>
                    </ul>
                </li>
                <li class="pb-3">
                    <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                        Product
                        <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                    </a>
                    <ul id="collapseThree" class="collapse list-unstyled pl-3">
                        <li><a class="text-decoration-none" href="#">Bag</a></li>
                        <li><a class="text-decoration-none" href="#">Sweather</a></li>
                        <li><a class="text-decoration-none" href="#">Sunglass</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="col-lg-9">
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-inline shop-top-menu pb-3 pt-1">
                        <li class="list-inline-item">
                            <a class="h3 text-dark text-decoration-none mr-3" href="#">Productos</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- VISTA DE LOS PRODUCTOS--->
            <div class="row">
                <?php foreach ($data['productos'] as $producto) { ?>
                    <div class="col-md-3">
                        <div class="card mb-4 product-wap rounded-0">
                            <div class="card rounded-0">
                                <img class="card-img rounded-0 img-fluid" src="<?php echo $producto['imagen']; ?>">
                                <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                    <ul class="list-unstyled">
                                        <li><a class="btn btn-danger text-white" href="#"><i class="fas fa-heart"></i></a></li>
                                        <li><a class="btn btn-danger text-white mt-2" href="<?php echo BASE_URL . 'principal/detail/' . $producto['id'];?>"><i class="fas fa-eye"></i></a></li>
                                        <li><a class="btn btn-danger text-white mt-2" href="#"><i class="fas fa-cart-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <a href="<?php echo BASE_URL . 'principal/detail/' . $producto['id'];?>" class="h3 text-decoration-none"><?php echo $producto['nombre']; ?></a>
                                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">

                                    <li class="pt-2">
                                        <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-center mb-1">
                                    <li>
                                        <i class="text-danger fa fa-star"></i>
                                        <i class="text-danger fa fa-star"></i>
                                        <i class="text-danger fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                    </li>
                                </ul>
                                <p class="text-center mb-0"><?php echo MONEDA . ''  . $producto['precio']; ?></p>
                            </div>
                        </div>

                    </div>
                <?php } ?>
            </div>
            <!--PAGINATION-->
            <div class="row">
            <ul class="pagination pagination-lg justify-content-center">
    <?php 
     $anterior = $data['pagina'] - 1;
     $siguiente = $data['pagina'] + 1;
     $url = BASE_URL . 'principal/categorias/' . $data['id_categoria'];

     if ($data['pagina'] > 1) {
         echo'<li class="page-item ">
         <a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0 bg-danger text-white" href=" '. $url . '/' . $anterior.' ">Anterior</a>
         </li>';
        }

     if ($data['total'] >= $siguiente)  {
         echo '<li class="page-item">
         <a class="page-link active rounded-0 shadow-sm border-top-0 border-left-0 bg-white text-dark" href="' . $url . '/'   .$siguiente.'" >Siguiente</a>
         </li>';

        }
     ?>
        
      
    </ul>
               
            </div>
            <!--PAGINATION-->
        </div>
    </div>

</div>

<!-- Start Brands --
        
        -End Brands-->


<!-- Start Footer -->

<?php include_once 'Views/template-principal/footer.php'; ?>
<!-- End Footer -->
</body>

</html>