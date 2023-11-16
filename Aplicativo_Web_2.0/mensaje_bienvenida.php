<?php
session_start();
if (isset($_SESSION["nombre_completo"])) {
    echo '<h1>Bienvenido, ' . $_SESSION["nombre_completo"] . '</h1>';
}
?>