<!DOCTYPE html>
<html>
<head>

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        img {
            max-width: 100px;
            max-height: 100px;
        }

         .button {
        background-color: #2196F3;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        text-decoration: none;
        display: inline-block;
        margin-top: 10px; /* Ajusta el margen superior según tu diseño */
        transition: background-color 0.3s;
    }

    .button:hover {
        background-color: #007ACC;
    }



     
    </style>
</head>
<body>
    <?php
    // Tu código de conexión y consulta SQL aquí
    // Reemplaza con tus credenciales de MySQL
$host = "localhost";
$usuario = "root";
$contrasena = "";
$base_datos = "prueba";

// Conectar a la base de datos
$conn = new mysqli($host, $usuario, $contrasena, $base_datos);

// Verificar la conexión
if($conn){
   
}else{
    echo "conexion no exitosa";
}


// Realizar la consulta SQL
$sql = "SELECT * FROM emergencia";

$resultado = $conn->query($sql);

    if ($resultado->num_rows > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<th>Cédula</th>";
        echo "<th>Nombre</th>";
        echo "<th>Lugar</th>";
        echo "<th>Descripción</th>";
        echo "<th>Imagen</th>";
        echo "</tr>";

        while ($row = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['cedula'] . "</td>";
            echo "<td>" . $row['nombre'] . "</td>";
            echo "<td>" . $row['lugar'] . "</td>";
            echo "<td>" . $row['descripcion'] . "</td>";
            echo '<td><img src="data:image/jpg;base64,' . base64_encode($row['imagen']) . '"/></td>';
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No se encontraron resultados.";
    }

    // Cerrar la conexión
    $conn->close();
    echo '<a href="data.html" class="button">Regresar</a>';
    ?>
</body>
</html>
