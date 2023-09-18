<?php

function esMultiploDe5Y7($numero) {
    return ($numero % 5 == 0 && $numero % 7 == 0);
}
?>

<?php

function generarMatriz() {
    $matriz = array();
    $iteraciones = 0;
    $numerosGenerados = 0;

    while (true) {
        $numero1 = rand(1, 100);
        $numero2 = rand(1, 100);
        $numero3 = rand(1, 100);

        $iteraciones++;
        $numerosGenerados += 3;

        if ($numero1 % 2 == 1 && $numero2 % 2 == 0 && $numero3 % 2 == 1) {
            $matriz[] = array($numero1, $numero2, $numero3);
            break;
        }
    }

    return array('matriz' => $matriz, 'iteraciones' => $iteraciones, 'numerosGenerados' => $numerosGenerados);
}
?>

<?php
function encontrarMultiploWhile($numeroDado) {
    $numeroAleatorio = rand(100, 1000);
    $intentos = 0;

    while ($numeroAleatorio % $numeroDado != 0) {
        $numeroAleatorio = rand(100, 1000);
        $intentos++;
    }

    return array('numeroAleatorio' => $numeroAleatorio, 'intentos' => $intentos);
}
?>

<?php
function crearArregloLetras() {
    $letras = array();
    for ($codigo = 97; $codigo <= 122; $codigo++) {
        $letras[$codigo] = chr($codigo);
    }
    return $letras;
}
?>