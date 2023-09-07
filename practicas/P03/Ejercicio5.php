<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Práctica 3 E5</title>
</head>

<body>
    <h2>Ejercicio 5</h2>

    <?php
    $a = "7 personas";
    $b = (integer) $a;
    $a = "9E3";
    //$b = (integer) $a;
    $c = (double) $a;

    echo '<ul>';
        echo '<li>Resultado de la variable $a</li>', "$a";
        echo '<li>Resultado de la variable $b</li>', "$b";
        echo '<li>Resultado de la variable $c</li>', "$c";
        echo '</ul>';


    ?>

</body>

</html>