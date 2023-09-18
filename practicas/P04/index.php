<!DOCTYPE html>
<html>
<head>
    <title>Comprobar Múltiplo de 5 y 7</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
<?php
include 'P04_funciones.php';

if (isset($_GET['numero'])) {
    $numero = intval($_GET['numero']);

    if (esMultiploDe5Y7($numero)) {
        echo "<p>{$numero} es un múltiplo de 5 y 7.</p>";
    } else {
        echo "<p>{$numero} no es un múltiplo de 5 y 7.</p>";
    }
} else {
    echo "<p>No se proporcionó un número en la URL.</p>";
}
?>

</body>
</html>