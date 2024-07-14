<?php
session_start();

// Verificar si el usuario ya está logueado
if (!empty($_SESSION['active'])) {
    header('location: productos.php');
    exit;
}

// Inicializar variables
$alert = '';

// Procesar datos del formulario de registro cuando se envía
if (!empty($_POST)) {
    require_once "../config/conexion.php";

    // Recoger datos del formulario y limpiarlos para evitar inyección SQL
    $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
    $correo = mysqli_real_escape_string($conexion, $_POST['correo']);
    $usuario = mysqli_real_escape_string($conexion, $_POST['usuario']);
    $clave = mysqli_real_escape_string($conexion, $_POST['clave']);
    $imagen = '';

    // Validación básica (puedes agregar más validaciones según tus requerimientos)
    if (empty($nombre) || empty($correo) || empty($usuario) || empty($clave)) {
        $alert = '<div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
                    Todos los campos son obligatorios.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
    } else {
        // Verificar si el usuario ya existe en la base de datos
        $query_check = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario'");
        $resultado = mysqli_num_rows($query_check);

        if ($resultado > 0) {
            $alert = '<div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
                        El usuario ya está registrado.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
        } else {
            // Manejar la carga de la imagen
            if (!empty($_FILES['imagen']['name'])) {
                $target_dir = "../assets/img/";
                $target_file = $target_dir . basename($_FILES["imagen"]["name"]);
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                $valid_extensions = array("jpg", "jpeg", "png", "gif");

                // Verificar si el archivo es una imagen
                $check = getimagesize($_FILES["imagen"]["tmp_name"]);
                if ($check !== false) {
                    if (in_array($imageFileType, $valid_extensions)) {
                        if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)) {
                            $imagen = $target_file;
                        } else {
                            $alert = '<div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
                                        Error al subir la imagen.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>';
                        }
                    } else {
                        $alert = '<div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
                                    Solo se permiten archivos JPG, JPEG, PNG y GIF.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>';
                    }
                } else {
                    $alert = '<div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
                                El archivo no es una imagen.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>';
                }
            }

            if (empty($alert)) {
                // Insertar nuevo usuario en la base de datos
                $clave = md5($clave); // Hashear la contraseña (en un entorno real deberías considerar usar métodos más seguros)
                $query_insert = "INSERT INTO usuarios(nombre, correo, usuario, clave, imagen) VALUES ('$nombre', '$correo', '$usuario', '$clave', '$imagen')";
                $resultado_insert = mysqli_query($conexion, $query_insert);

                if ($resultado_insert) {
                    $alert = '<div class="alert alert-success text-center alert-dismissible fade show" role="alert">
                                Usuario registrado correctamente. <a href="login.php">Inicia sesión aquí</a>.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>';
                } else {
                    $alert = '<div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
                                Error al registrar el usuario. Inténtalo de nuevo más tarde.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>';
                }
            }
        }

        mysqli_close($conexion);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="../assets/css/sb-admin-2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://kit.fontawesome.com/b02da9335c.js" crossorigin="anonymous"></script>
</head>

<body class="bg-gradient-dark">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-6 col-md-8 col-sm-12">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Registro de Usuario</h1>
                                        <?php echo (isset($alert)) ? $alert : ''; ?>
                                    </div>
                                    <form class="user" method="POST" action="" autocomplete="off" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="nombre" name="nombre" placeholder="Nombre completo">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" id="correo" name="correo" placeholder="Correo electrónico">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="usuario" name="usuario" placeholder="Usuario">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="clave" name="clave" placeholder="Contraseña">
                                        </div>
                                        <div class="form-group">
                                            <input type="file" class="form-control form-control-user" id="imagen" name="imagen" accept="image/*">
                                        </div>
                                        <button type="submit" class="btn btn-danger btn-user btn-block">
                                            Registrarse
                                        </button>
                                        <hr>
                                    </form>
                                    <div class="text-center">
                                        <a class="small" href="../admin/index.php">¿Ya tienes una cuenta? ¡Inicia sesión!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

