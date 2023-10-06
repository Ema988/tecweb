<?php
// Conexión a la base de datos (debes configurar esto)
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "marketzone";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

// Consulta SQL para obtener productos no eliminados
$sql = "SELECT * FROM productos WHERE eliminado = 0";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h1>Productos Vigentes</h1>";
    echo "<table border='1'>";
    echo "<tr><th>Nombre</th><th>Marca</th><th>Modelo</th><th>Precio</th><th>Detalles</th><th>Unidades</th><th>Acciones</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["nombre"] . "</td>";
        echo "<td>" . $row["marca"] . "</td>";
        echo "<td>" . $row["modelo"] . "</td>";
        echo "<td>" . $row["precio"] . "</td>";
        echo "<td>" . $row["detalles"] . "</td>";
        echo "<td>" . $row["unidades"] . "</td>";
        // Agregar un botón "Modificar" para cada producto
        echo "<td><button onclick='mostrarAlerta(\"" . $row["nombre"] . "\", \"" . $row["marca"] . "\", \"" . $row["modelo"] . "\", \"" . $row["precio"] . "\", \"" . $row["detalles"] . "\", \"" . $row["unidades"] . "\")'>Modificar</button></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron productos vigentes.";
}

// Cerrar la conexión
$conn->close();
?>

<script>
// Función para mostrar una alerta con los datos del producto seleccionado
function mostrarAlerta(nombre, marca, modelo, precio, detalles, unidades) {
    alert("Datos del Producto a Modificar:\n\n" +
          "Nombre: " + nombre + "\n" +
          "Marca: " + marca + "\n" +
          "Modelo: " + modelo + "\n" +
          "Precio: " + precio + "\n" +
          "Detalles: " + detalles + "\n" +
          "Unidades: " + unidades);
}

            form.method = 'POST';
            form.action = 'http://localhost/tecweb/practicas/P07/p07-base/formulario.php';  
</script>
