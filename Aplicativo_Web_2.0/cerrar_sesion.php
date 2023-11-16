<?php
session_start();

// Destruir la sesión
session_destroy();

// Redirigir al usuario a la página de inicio de sesión
header("location: login_App.html");
?>
