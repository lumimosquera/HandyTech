<?php
require_once "config/conexion.php";
require_once "config/config.php";

// Verificar y establecer sesión si no está iniciada
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Verificar si hay una sesión activa
if (!isset($_SESSION['id'])) {
    // Redirigir a la página de inicio de sesión si no hay sesión activa
    header('Location: login.php');
    exit;
}

// Obtener el ID de usuario de la sesión
$idUsuario = $_SESSION['id'];

// Consulta para obtener el nombre y el correo del usuario
$query = mysqli_query($conexion, "SELECT nombre, correo FROM usuarios WHERE id = '$idUsuario'");
$resultado = mysqli_fetch_assoc($query);

// Guardar nombre y correo en variables
$nombreUsuario = $resultado['nombre'];
$correoUsuario = $resultado['correo'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Carrito de Compras</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap CSS-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Custom CSS-->
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link href="assets/css/midesing.css" rel="stylesheet" />
</head>
<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="./">HandyTech</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto.php">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="carrito.php">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="badge badge-danger" id="carrito">0</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-danger py-5">
        <div class="container text-center text-white">
            <h1 class="display-4 fw-bolder">Carrito de Compras</h1>
            <p class="lead fw-normal text-white-50 mb-0">Revisa tus productos agregados</p>
            <a class="btn btn-outline-light btn-lg mt-3" href="productos.php">Continuar Comprando</a>
        </div>
    </header>
    <!-- Main content-->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Producto</th>
                                    <th>Precio</th>
                                    <th>Cantidad</th>
                                    <th>Sub Total</th>
                                </tr>
                            </thead>
                            <tbody id="tblCarrito">
                                <!-- Productos agregados se mostrarán aquí -->
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4>Total a Pagar: <span id="total_pagar">0.00</span></h4>
                            <p>Nombre: <span id="nombreUsuario"><?php echo $nombreUsuario; ?></span></p>
                            <p>Correo: <span id="correoUsuario"><?php echo $correoUsuario; ?></span></p>
                            <div class="d-grid gap-2">
                                <div id="paypal-button-container"></div>
                                <button class="btn btn-danger btn-block mt-2" type="button" id="btnCompra">Realizar Compra</button>
                                <button class="btn btn-danger btn-block mt-2" type="button" id="btnVaciar">Vaciar Carrito</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container text-center text-white">
            <p>&copy; HandyTech 2024. Todos los derechos reservados.</p>
            <p>
                <a href="#" class="text-white">Política de Privacidad</a> |
                <a href="#" class="text-white">Términos y Condiciones</a>
            </p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- PayPal JS SDK-->
    <script src="https://www.paypal.com/sdk/js?client-id=<?php echo CLIENT_ID; ?>&locale=<?php echo LOCALE; ?>"></script>
    <!-- Custom JS-->
    <script src="assets/js/scripts.js"></script>
    <script>
        $(document).ready(function() {
            mostrarCarrito();

            $('#btnCompra').click(function() {
                realizarCompra();
            });

            function realizarCompra() {
                let array = JSON.parse(localStorage.getItem('productos'));
                if (array.length > 0) {
                    $.ajax({
                        url: 'ajax.php',
                        type: 'POST',
                        data: { action: 'buscar', data: array },
                        success: function(response) {
                            const res = JSON.parse(response);
                            paypal.Buttons({
                                style: {
                                    color: 'blue',
                                    shape: 'pill',
                                    label: 'pay'
                                },
                                createOrder: function(data, actions) {
                                    return actions.order.create({
                                        purchase_units: [{
                                            amount: { value: res.total },
                                            payee: {
                                                email_address: "<?php echo $correoUsuario; ?>"
                                            }
                                        }]
                                    });
                                },
                                onApprove: function(data, actions) {
                                    return actions.order.capture().then(function(details) {
                                        alert('Transaction completed by ' + details.payer.name.given_name);
                                        // Aquí puedes redirigir al usuario a una página de confirmación o similar
                                    });
                                }
                            }).render('#paypal-button-container');
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    });
                } else {
                    alert('No hay productos en el carrito');
                }
            }

            function mostrarCarrito() {
                if (localStorage.getItem("productos") != null) {
                    let array = JSON.parse(localStorage.getItem('productos'));
                    if (array.length > 0) {
                        $.ajax({
                            url: 'ajax.php',
                            type: 'POST',
                            data: { action: 'buscar', data: array },
                            success: function(response) {
                                const res = JSON.parse(response);
                                let html = '';
                                res.datos.forEach(element => {
                                    html += `
                                        <tr>
                                            <td>${element.id}</td>
                                            <td><img src="assets/img/${element.imagen}" width="50" height="50"> ${element.nombre}</td>
                                            <td>${element.precio}</td>
                                            <td>1</td>
                                            <td>${element.precio}</td>
                                        </tr>
                                    `;
                                });
                                $('#tblCarrito').html(html);
                                $('#total_pagar').text(res.total);
                            },
                            error: function(error) {
                                console.log(error);
                            }
                        });
                    }
                }
            }
        });
    </script>
</body>
</html>
