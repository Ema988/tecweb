<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Práctica 3 E7</title>
</head>

<body>
    <h2>Ejercicio 7</h2>
    <p>Usando la variable predefinida $_SERVER, determina lo siguiente:</p>
    <p>La versión de Apache y PHP</p>
    <?php
    echo $_SERVER['SERVER_SOFTWARE'];
    ?>
    <p>Nombre del sistema operativo y servidor</p>
    <?php
    echo $_SERVER['SERVER_SIGNATURE'];
    ?>
    <p>Idioma del navegador del cliente</p>
    <?php
    echo $_SERVER['HTTP_ACCEPT_LANGUAGE'];
    ?>
<p>
    <a href="http://validator.w3.org/check?uri=referer"><img
      src="http://www.w3.org/Icons/valid-xhtml11" alt="Valid XHTML 1.1" height="31" width="88" /></a>
  </p></body>

</html>