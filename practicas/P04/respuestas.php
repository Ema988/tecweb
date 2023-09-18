<!DOCTYPE html>
<html>
<head>
    <title>Respuesta</title>
</head>
<body>
<?php
include 'funciones.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $edad = isset($_POST['edad']) ? intval($_POST['edad']) : 0;
    $sexo = isset($_POST['sexo']) ? $_POST['sexo'] : '';

    $mensaje = verificarEdadYSexo($edad, $sexo);
    echo "<p>$mensaje</p>";
} else {
    echo "<p>Error: Este script solo puede ser accedido mediante un formulario.</p>";
}
?>
</body>
</html>
