<?php
session_start();


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

// Datos del formulario
$usuario = $_POST["usuario"];
$contrasena_ingresada = $_POST["contrasena"]; // Cambio de nombre de la variable

// Consulta SQL utilizando una sentencia preparada
$sql = "SELECT * FROM registrousuario WHERE usuario=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $usuario);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $contrasena_almacenada = $row["password"]; // Obtén la contraseña almacenada desde la base de datos

    if (password_verify($contrasena_ingresada, $contrasena_almacenada)) {
        $_SESSION["usuario"] = $usuario;
        $_SESSION["nombre_completo"] = $row["nombre"] . " " . $row["apellido"]; // Guardar el nombre completo
    header("Location: index.html"); // Redirige al panel de control
        header("Location: index.html"); // Redirige al panel de control
    } else {
        echo "Contraseña incorrecta.";
    }
} else {
    echo "Usuario no encontrado.";
}

$stmt->close();
$conn->close();
?>
