<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION["usuario"])) {
    header("location: login_App.html");
    exit; // Salir para evitar que se ejecute el código restante
}
// Reemplaza con tus credenciales de MySQL
$host = "localhost";
$usuario = "root";
$contrasena = "";
$base_datos = "prueba";

// Conectar a la base de datos
$conn = new mysqli($host, $usuario, $contrasena, $base_datos);

// Verificar la conexión
if($conn){
    echo "Conexion con la base de dato exitosa";
}else{
    echo "conexion no exitosa";
}

// recuperar datos del formulario 
$cedula = $_POST["cedula"];
$nombre = $_POST["nombre"];
$lugar = $_POST["lugar"];
$descripcion = $_POST["descripcion"];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));


// Insertar los datos en la base de datos
$sql = "INSERT INTO emergencia  VALUES ('$cedula','$nombre','$lugar','$descripcion','$imagen')";


// Verificamos la ejecución
if ($conn->query($sql) === TRUE) {
    header("location: registrar-emergencia.html");
    
    
} else {
    echo "Error al registrar: " . $conn->error;
}

// Cierra la conexión
$conn->close();
?>
