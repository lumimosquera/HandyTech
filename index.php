<?php

session_start();
require_once "config/conexion.php";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtén los datos del formulario de inicio de sesión
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Consulta a la base de datos para verificar las credenciales
    $query = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email = '$email'");
    if ($query && mysqli_num_rows($query) > 0) {
        $user = mysqli_fetch_assoc($query);
        // Verifica la contraseña
        if (password_verify($password, $user['password'])) {
            // Almacena la información del usuario en la sesión
            $_SESSION['id'] = $user['id'];
            $_SESSION['nombre'] = $user['nombre'];
            $_SESSION['imagen'] = $result['imagen'];
            // Redirige al usuario a la página principal
            header("Location: index.php");
            exit();
        } else {
            // Contraseña incorrecta
            echo "Contraseña incorrecta.";
        }
    } else {
        // Usuario no encontrado
        echo "Usuario no encontrado.";
    }
}
// Verificar si el usuario está logueado



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Carrito de Compras</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link rel="shortcut icon" href="assets/favicon/favicon.ico" type="image/x-icon">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link href="assets/css/estilos.css" rel="stylesheet" />
    <link href="assets/css/midesing.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://kit.fontawesome.com/b02da9335c.js" crossorigin="anonymous"></script>
</head>

<body class="my-cp">
    <!-- BOTON-->
    <a href="#" class="btn-flotante" id="btnCarrito">
        <i class="fas fa-shopping-cart"></i> Carrito
        <span class="badge bg-danger" id="carrito">0</span>
    </a>

    <!-- Navigation -->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="assets/favicon/android-icon-36x36.png" alt="HandyTech Logo" style="height: 40px;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link text-danger" category="all">Todo</a>
                        </li>
                        <?php
                        $query = mysqli_query($conexion, "SELECT * FROM categorias");
                        while ($data = mysqli_fetch_assoc($query)) { ?>
                            <li class="nav-item">
                                <a href="#" class="nav-link" category="<?php echo $data['categoria']; ?>"><?php echo $data['categoria']; ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                    <ul class="navbar-nav">
                        <?php
                        // Verifica si existe la sesión y el ID del usuario
                        if (!empty($_SESSION['id'])) {
                            $id = $_SESSION['id'];
                            $query = "SELECT nombre, imagen FROM usuarios WHERE id = '$id'";
                            $result = mysqli_query($conexion, $query);

                            if ($result) {
                                $usuario = mysqli_fetch_assoc($result);
                                $nombre = $usuario['nombre'];
                                $imagen = !empty($usuario['imagen']) ? $usuario['imagen'] : 'assets/img/default-user.png';

                                // Almacenar en sesión si existe imagen
                                if (!empty($imagen)) {
                                    $_SESSION['imagen'] = $imagen;
                                }
                            } else {
                                // Manejo de error en la consulta
                                $nombre = 'Usuario';
                                $imagen = 'assets/img/default-user.png';
                            }
                        } else {
                            // Si no hay sesión iniciada, muestra el enlace de inicio de sesión
                            $nombre = 'Iniciar';
                            $imagen = 'assets/img/default-user.png';
                        }
                        ?>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small ml-2"><?php echo $nombre; ?></span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <ul class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <li><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i><?php echo $nombre; ?> </a></li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li><a class="dropdown-item" href="model/login.php"><i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-gray-400"></i> Iniciar sesión</a></li>
                                <li><a class="dropdown-item" href="salir.php"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Cerrar sesión</a></li>
                            </ul>
                        </li>


                    </ul>
                </div>
            </div>
        </nav>
    </div>


    <!--  Banner-->
    <div id="template-mo-hero-carousel" class="carousel slide bg-dar" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-hero-carousel" data-bs-slide-to="2"></li>
            <li data-bs-target="#template-mo-hero-carousel" data-bs-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="assets/img/ct-movil.png" alt="Celulares">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-danger"><b>Celulares</b></h1>
                                <p>
                                    Descubre nuestra amplia gama de celulares de última generación con tecnología avanzada y las mejores marcas del mercado.
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
                            <img class="img-fluid" src="assets/img/ct-laptops.png" alt="Laptops">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1 text-danger"><b>Laptops</b></h1>
                                <p>
                                    Encuentra la laptop perfecta para ti, ya sea para trabajar, estudiar o jugar, con opciones para todos los presupuestos.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item ">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="assets/img/ct-laptops.png" alt="Gadgets">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1 text-danger"><b>Gadgets</b></h1>
                                <p>
                                    Explora nuestros gadgets innovadores que harán tu vida más fácil y divertida, desde wearables hasta dispositivos inteligentes para el hogar.
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
                            <img class="img-fluid" src="assets/img/ct-consolas.png" alt="Consolas">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1 text-danger"><b>Consolas</b></h1>
                                <p>
                                    Sumérgete en el mundo de los videojuegos con nuestras consolas de última generación y una gran variedad de juegos para todas las edades.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- fin Banner-->

    <section class="py-5">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php
                $query = mysqli_query($conexion, "SELECT p.*, c.id AS id_cat, c.categoria FROM productos p INNER JOIN categorias c ON c.id = p.id_categoria");
                $result = mysqli_num_rows($query);
                if ($result > 0) {
                    while ($data = mysqli_fetch_assoc($query)) { ?>
                        <div class="col mb-5 productos" category="<?php echo $data['categoria']; ?>">
                            <div class="card h-100 shadow border-0" style="border-radius: 10px; overflow: hidden;">
                                <!-- Sale badge-->
                                <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; right: 0.5rem; z-index: 10;">
                                    <?php echo ($data['precio_normal'] > $data['precio_rebajado']) ? 'Oferta' : ''; ?>
                                </div>
                                <!-- Product image-->
                                <div class="img-container">
                                    <img class="card-img-top img-fluid" src="assets/img/<?php echo $data['imagen']; ?>" alt="..." style="height: 200px; object-fit: cover; transition: transform 0.3s ease-in-out;" />
                                </div>
                                <!-- Product details-->
                                <div class="card-body p-4 text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder text-dark"><?php echo $data['nombre'] ?></h5>
                                    <p class="text-muted small"><?php echo $data['descripcion']; ?></p>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center mb-2">
                                        <?php for ($i = 0; $i < 5; $i++) { ?>
                                            <div class="bi-star-fill text-warning"></div>
                                        <?php } ?>
                                    </div>
                                    <!-- Product price-->
                                    <div class="d-flex justify-content-center align-items-center">
                                        <span class="text-muted text-decoration-line-through me-2"><?php echo $data['precio_normal'] ?></span>
                                        <span class="fw-bold text-danger"><?php echo $data['precio_rebajado'] ?></span>
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center">
                                        <a class="btn btn-danger btn-sm mt-auto agregar" data-id="<?php echo $data['id']; ?>" href="#">
                                            <i class="fas fa-cart-plus"></i> Agregar
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php  }
                } ?>

            </div>
        </div>
    </section>

    <!-- Footer-->
    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <img class="img-fluid" src="assets/img/Handy.png" alt="Handy Image">
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
                            <a class="text-decoration-none" href="contacto@handytech.com">handytech.com</a>
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

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>