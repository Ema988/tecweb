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

<br><br>
    <h2>Ejercicio 2</h2>

<?php

$resultado = generarMatriz();

$matriz = $resultado['matriz'];
$iteraciones = $resultado['iteraciones'];
$numerosGenerados = $resultado['numerosGenerados'];


echo "<h3>Matriz generada:</h3>";
echo "<table border='1'>";
foreach ($matriz as $fila) {
    echo "<tr>";
    foreach ($fila as $numero) {
        echo "<td>$numero</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "<h3>Información adicional:</h3>";
echo "<p>Número de iteraciones: $iteraciones</p>";
echo "<p>Cantidad de números generados: $numerosGenerados</p>";
?>

<br><br>

<h2>Ejercicio 3</h2>

<?php

if (isset($_GET['numeroDado'])) {
    $numeroDado = intval($_GET['numeroDado']);

    $resultado = encontrarMultiploWhile($numeroDado);

    echo "<p>El primer número múltiplo de $numeroDado encontrado usando while es: {$resultado['numeroAleatorio']}</p>";
    echo "<p>Se realizaron {$resultado['intentos']} intentos.</p>";
} else {
    echo "<p>No se proporcionó un número dado en la URL.</p>";
}
?>

</body>
</html>