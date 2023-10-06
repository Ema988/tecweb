<?php
// Conexión a la base de datos (modifica las credenciales según tu configuración)
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "marketzone";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$nombre = $_POST["nombre"];
$marca = $_POST["marca"];
$modelo = $_POST["modelo"];
$precio = $_POST["precio"];
$detalles = $_POST["detalles"];
$unidades = $_POST["unidades"];

// Manejo de la imagen (guarda la imagen en un directorio y guarda la ruta en la base de datos)
$imagen = "";
if ($_FILES["imagen"]["error"] === 0) {
    $imagen_nombre = $_FILES["imagen"]["name"];
    $imagen_tmp = $_FILES["imagen"]["tmp_name"];
    $imagen = "C/i" . $imagen_nombre; // Cambia la ruta de almacenamiento según tus necesidades
    move_uploaded_file($imagen_tmp, $imagen);
}

// Insertar el producto en la base de datos
$sql = "INSERT INTO productos (nombre, marca, modelo, precio, detalles, unidades, imagen) VALUES ('$nombre', '$marca', '$modelo', $precio, '$detalles', $unidades, '$imagen')";

if ($conn->query($sql) === TRUE) {
    echo "Producto registrado exitosamente.";
} else {
    echo "Error al registrar el producto: " . $conn->error;
}

$conn->close();
?>
