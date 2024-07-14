

<?php
// Inicia la sesión
session_start();

// Elimina todas las variables de sesión
session_unset();

// Destruye la sesión
session_destroy();

// Redirige al usuario al inicio de sesión o a otra página
header("Location: ./"); // Puedes cambiar "./" por la URL de tu página de inicio de sesión o página principal
exit;
?>
