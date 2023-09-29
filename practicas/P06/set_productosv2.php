<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera los datos del formulario
    $nombre = $_POST["nombre"];
    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $precio = $_POST["precio"];
    $detalles = $_POST["detalles"];
    $unidades = $_POST["unidades"];

    // Validación de datos
    if (empty($nombre) || empty($marca) || empty($modelo) || empty($precio) || empty($detalles) || empty($unidades)) {
        echo "Error: Todos los campos son obligatorios.";
    } elseif (!is_numeric($precio) || !is_float($precio + 0)) {
        echo "Error: El precio debe ser un número decimal válido.";
    } else {
        // Conexión a la base de datos (debes configurar esto)
        $servername = 'localhost';
        $username = 'root';
        $password = '12345678';
        $dbname = 'marketzone';

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Error en la conexión a la base de datos: " . $conn->connect_error);
        }

        // Preparar la consulta SQL
        $sql = "INSERT INTO productos (nombre, marca, modelo, precio, detalles, unidades, eliminado) VALUES (?, ?, ?, ?, ?, ?, 0)";
        $stmt = $conn->prepare($sql);

        // Vincular los parámetros
        $stmt->bind_param("sssdsi", $nombre, $marca, $modelo, $precio, $detalles, $unidades);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            echo "Producto registrado con éxito:<br>";
            echo "Nombre: $nombre<br>";
            echo "Marca: $marca<br>";
            echo "Modelo: $modelo<br>";
            echo "Precio: $precio<br>";
            echo "Detalles: $detalles<br>";
            echo "Unidades: $unidades<br>";
        } else {
            echo "Error al registrar el producto: " . $stmt->error;
        }

        // Cerrar la conexión
        $stmt->close();
        $conn->close();
    }
} else {
    echo "Acceso no válido.";
}
?>
