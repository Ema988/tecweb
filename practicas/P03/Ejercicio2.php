<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Práctica 3 E2 </title>
</head>

<body>
    <h2>Ejercicio 2</h2>
        <p>Proporcionar los valores de $a, $b, $c como sigue:</p>
        <p>$a = “ManejadorSQL”;
           $b = 'MySQL';
           $c = $a;
           <br>
        </p>
        <?php
        $a = "ManejadorSQL";
        $b = 'MySQL';
        $c = &$a;
    
        ?>
        <p>a. Ahora muestra el contenido de cada variable</p>

        <?php
        echo "$a, $b, $c";
        ?>
        <p><br>b. Agrega al código actual las siguientes asignaciones:</p>
        <p>$a = “PHP server”;
           $b = &$a;
        </p>
        <br>
        <?php

        $a = "PHP server";
        $b = &$a;
        ?>

        <p>c. Vuelve a mostrar el contenido de cada uno</p>

        <?php
        echo "$a, $b, $c";
        echo '<br>';
        echo '<ul>';
        echo '<li>Lo que paso en el inciso "A" es que se mostro el valor que se les dio a acada variable</li>';
        echo '<li>En el inciso "B" se les volvio a asignar un nuevo valor a las variables existentes y utilizadas anteriormente</li>';
        echo '<li>En el inciso "C" se vuelve a mostrar el contenido de las variables pero esta vez ya actualizadas con el nuevo valor que se les asigno en el incio "B"</li>';
        ?>

<p>
    <a href="http://validator.w3.org/check?uri=referer"><img
      src="http://www.w3.org/Icons/valid-xhtml11" alt="Valid XHTML 1.1" height="31" width="88" /></a>
  </p>
</body>

</html>