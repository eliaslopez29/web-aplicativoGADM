<?php

if (isset($_SESSION["nombre_completo"])) {
    echo '<h1>Bienvenido, ' . $_SESSION["nombre_completo"] . '</h1>';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Aplicativo Parroquial</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="header-content">
            <img src="logores.jpg" alt="Imagen" class="header-image">
            <h1 class="header-text">COPAE MANGLARALTO RESILIENTE</h1>
        </div>
        <div class="menu-toggle" id="menuToggle">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <nav class="nav-bar">
            <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="Gestion-de-Riesgo.html">Programas Misionales</a></li>
                <li><a href="registrar-evento.html">Registro de Evento</a></li>
                <li><a href="registrar-emergencia.html">Registro de Emergencia</a></li>
                <li><a href="Recomendaciones.html">Recomendaciones</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
         <?php
    session_start();
    if (isset($_SESSION["nombre_completo"])) {
        echo '<h1>Bienvenido, ' . $_SESSION["nombre_completo"] . '</h1>';
    }
    ?>
        
        <section id="Gestion-de-Riesgo" class="section">
            <div class="section-content">
                <img src="gestionriesgo.jpg" alt="Gestión de Riesgo">
                <h2>Gestión de Riesgo</h2>
                <a href="Gestion-de-Riesgo.html" class="animated-button">Ir a Registro</a>
            </div>
        </section>

        <section id="Recomendaciones" class="section">
            <div class="section-content">
                <img src="recomendaciones.jpg" alt="Recomendaciones">
                <h2>Recomendaciones</h2>
                <a href="Recomendaciones.html" class="animated-button">Ir a Recomendaciones</a>
            </div>
        </section>

        <section id="visualizaciones" class="section">
            <div class="section-content">
                <img src="visualizaciones.jpg" alt="Visualizaciones">
                <h2>Visualizaciones</h2>
                <a href="login.html" class="animated-button">Ir a Visualizaciones</a>
            </div>
        </section>

        <section class="section">
            <div class="section-content">
                <img src="imagenprimerosauxilio.jpg" alt="Manual de Primeros Auxilios">
                <h2>Manual de Primeros Auxilios</h2>
                <p>Los Primeros Auxilios Básicos (PAB) son fundamentales para salvar la vida de una persona.</p>
                <p>Descarga nuestro Manual de Primeros Auxilios Básicos.</p>
                <a href="https://cruzroja.org.ec/wp-content/uploads/2018/04/MANUAL-PAB-2019.pdf"class="animated-button">Ver Más</a>
            </div>
        </section>
    </main>

    <footer>
        <div class="contact">
            <div class="contact-item">
                <i class="fa-solid fa-phone"></i>
                <p>Teléfono: +123456789</p>
            </div>
            <div class="contact-item">
                <i class="fa-solid fa-envelope"></i>
                <p>Correo Electrónico: info@example.com</p>
            </div>
            <div class="contact-item">
                <i class="fa-solid fa-location-dot"></i>
                <p>Ubicación: Dirección de la Parroquia</p>
            </div>
        </div>
        <div class="logo">
            <img src="LOGOMANGLARALTO.png" alt="COPAE MANGLARTO">
        </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>
