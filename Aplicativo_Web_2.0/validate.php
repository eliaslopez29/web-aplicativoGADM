<?php
    
$host = "localhost";
$usuario = "root";
$contrasena = "";
$base_datos = "prueba";

// Conectar a la base de datos
$conn = new mysqli($host, $usuario, $contrasena, $base_datos);

// Verificar la conexión
if($conn){
    echo "conexion exitosa";
}else{
    echo "conexion no exitosa";
}

// Recibe los datos del formulario
$username = $_POST['username'];
$password = $_POST['password'];


$query = mysqli_query($conn, "SELECT * FROM login WHERE usuario = '$username' AND password = '$password'");

$nr= mysqli_num_rows($query);

if ($nr == 1)
{
    header("location: data.html");
    echo "bienvenido:" .$username;
}
else if ($nr == 0)
{
    header("location: login.html");
}


$conn->close();


?>