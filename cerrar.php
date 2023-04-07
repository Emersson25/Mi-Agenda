<?php
// Iniciar sesión (si aún no se ha iniciado)
session_start();

// Destruir todas las variables de sesión
session_unset();

// Destruir la sesión
session_destroy();

// Redireccionar al usuario a la página de inicio de sesión o a la página principal
header("Location: /index.php");
exit();
?>