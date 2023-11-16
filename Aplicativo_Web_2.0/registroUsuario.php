<<?php
// Reemplaza con tus credenciales de MySQL
$host = "localhost";
$usuario = "root";
$contrasena = "";
$base_datos = "prueba";

// Conectar a la base de datos
$conn = new mysqli($host, $usuario, $contrasena, $base_datos);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

// Procesar los datos del formulario si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar datos del formulario
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $cedula = $_POST["cedula"];
    $residencia = $_POST["residencia"];
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    // Encriptar la contraseña
    $contrasena_encriptada = password_hash($contrasena, PASSWORD_DEFAULT);

    // Insertar los datos en la base de datos
    $sql = "INSERT INTO usuarios (nombre, apellido, cedula, residencia, usuario, contrasena) VALUES ('$nombre', '$apellido', '$cedula', '$residencia', '$usuario', '$contrasena_encriptada')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso";
    } else {
        echo "Error al registrar: " . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
?>
