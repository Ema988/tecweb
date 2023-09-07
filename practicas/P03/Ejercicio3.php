<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Práctica 3 E3</title>
</head>

<body>
<h2>Ejercicio 3</h2>
    <p>Muestra el contenido de cada variable inmediatamente después de cada asignación,
       verificar la evolución del tipo de estas variables (imprime todos los componentes de los
       arreglo):</p>
       <p><br>$a = “PHP5”;</p>
    <?php
    $a = "PHP5";
    echo "$a";
    ?>
    <p><br>$z[] = &$a;</p>

    <?php
    $z[] = &$a;
    print_r($z);
    ?>

    <p> <br>$b = “5a version de PHP”;</p>
    <?php
    $b = "5a version de PHP";
    echo "$b";
    ?>

    <p> <br>$c = $b*10;</p>
    <?php
    @$c = $b*10;
    echo "$c";
    ?>

    <p> <br>$a .= $b;</p>
    <?php
    $a .= $b;
    echo "$a ";
    ?>


    <p> <br>$b *= $c;</p>
    <?php
    @$b *= $c;
    echo "$b ";
    ?>

    <p> <br>$z[0] = “MySQL”;</p>
    <?php
    $z[0] = "MySQL";
    print_r($z[0]);
    ?>


</body>

</html>