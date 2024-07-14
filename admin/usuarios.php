<?php
require_once "../config/conexion.php";

// Inicia sesión y verifica el rol de administrador
session_start();
if (!isset($_SESSION['rol']) || $_SESSION['rol'] != 'admin') {
    header('Location: ../index.php');
    exit;
}

// Consulta para obtener la lista de usuarios
$query = mysqli_query($conexion, "SELECT id, nombre, correo, imagen, rol FROM usuarios");
include("includes/header.php"); ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <!-- Agrega tus estilos CSS adicionales si es necesario -->

    <!-- Estilos y scripts de Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <!-- Contenido principal -->
    <div class="container">
        <!-- Button trigger modal -->


        <!-- Modal -->
        <div class="modal fade" id="modalEditarUsuarioLabel" tabindex="-1" aria-labelledby="modalEditarUsuarioLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modalEditarUsuarioLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-body">
                            <form id="formEditarUsuario">
                                <input type="hidden" id="editIdUsuario" name="editIdUsuario">
                                <div class="mb-3">
                                    <label for="editNombreUsuario" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="editNombreUsuario" name="editNombreUsuario">
                                </div>
                                <div class="mb-3">
                                    <label for="editCorreoUsuario" class="form-label">Correo</label>
                                    <input type="email" class="form-control" id="editCorreoUsuario" name="editCorreoUsuario">
                                </div>
                                <div class="mb-3">
                                    <label for="editImagenUsuario" class="form-label">Imagen (URL)</label>
                                    <input type="text" class="form-control" id="editImagenUsuario" name="editImagenUsuario">
                                </div>

                            </form>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary">Guardar Cambios</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="mb-4">Lista de Usuarios</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-bs-toggle="modal" data-bs-target="#modalEditarUsuarioLabel">
                <i class="fas fa-plus"></i> Nuevo
            </a>
        </div>

        <!-- Tabla de usuarios -->
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Rol</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($usuario = mysqli_fetch_assoc($query)) { ?>
                        <tr>
                            <td><?php echo $usuario['id']; ?></td>
                            <td><?php echo $usuario['nombre']; ?></td>
                            <td><?php echo $usuario['correo']; ?></td>
                            <td>
                                <img src="<?php echo $usuario['imagen'] ? $usuario['imagen'] : 'assets/img/default-user.png'; ?>" class="img-thumbnail" alt="Imagen de Usuario" width="100">
                            </td>
                            <td><?php echo $usuario['rol']; ?></td>
                            <td>


                                <button type="button" class="btn btn-primary btn-editar" data-bs-toggle="modal" data-bs-target="#modalEditarUsuarioLabel" data-id="<?php echo $usuario['id']; ?>" data-nombre="<?php echo $usuario['nombre']; ?>" data-correo="<?php echo $usuario['correo']; ?>" data-imagen="<?php echo $usuario['imagen']; ?>">
                                    <i class="fas fa-edit fa-sm fa-fw"></i> Editar
                                </button>
                                <a href="#" class="btn btn-danger btn-eliminar">
                                    <i class="fas fa-trash-alt fa-sm fa-fw"></i> Eliminar
                                </a>
                                <!-- Aquí puedes añadir más botones de acciones si es necesario -->


                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal de Edición -->

    <!-- Script JavaScript -->
    <script>
        $(document).ready(function() {
            $('.btn-editar').click(function() {
                var idUsuario = $(this).data('id');
                var nombreUsuario = $(this).data('nombre');
                var correoUsuario = $(this).data('correo');
                var imagenUsuario = $(this).data('imagen');

                $('#editIdUsuario').val(idUsuario);
                $('#editNombreUsuario').val(nombreUsuario);
                $('#editCorreoUsuario').val(correoUsuario);
                $('#editImagenUsuario').val(imagenUsuario);

                $('#modalEditarUsuarioLabel').modal('show');
            });
        });
    </script>


</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</html>