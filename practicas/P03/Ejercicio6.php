<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Práctica 3 E6</title>
</head>

<body>
    <h2>Ejercicio 6</h2>
    <p>6. Dar y comprobar el valor booleano de las variables $a, $b, $c, $d, $e y $f y muéstralas
        usando la función var_dump(<datos>).
    <?php
    $a = FALSE;
    $b = TRUE;
    $c = FALSE;
    $d = ($a OR $b);
    $e = ($a AND $c);
    $f = ($a XOR $b);

    ?>
    <p>Inciso a</p>
    <?php
    var_dump($a);
    ?>
    <p>Inciso b</p>
    <?php
    var_dump($b);
    ?>
    <p>Inciso c</p>
    <?php
    var_dump($c);
    ?>
    <p>Inciso d</p>
    <?php
    var_dump($d);
    ?>
    <p>Inciso e</p>
    <?php
    var_dump($e);
    ?>
    <p>Inciso f</p>
    <?php
    var_dump($f);

    print_r($c);
    ?>
</body>

</html>