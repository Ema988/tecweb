<?php
if(isset($_GET['tope'])) {
    $tope = $_GET['tope'];
} else {
    die('Parámetro "tope" no detectado...');
}

if (!empty($tope)) {
    @$link = new mysqli('localhost', 'root', '12345678', 'marketzone');

    if ($link->connect_errno) {
        die('Falló la conexión: '.$link->connect_error.'<br/>');
    }

    if ($result = $link->query("SELECT * FROM productos WHERE unidades <= $tope")) {
        echo '<?xml version="1.0" encoding="UTF-8"?>';
        echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">';
        echo '<html xmlns="http://www.w3.org/1999/xhtml">';
        echo '<head>';
        echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
        echo '<title>Productos</title>';
        echo '</head>';
        echo '<body>';
        echo '<h3>PRODUCTOS</h3>';
        echo '<table border="2">';
        echo '<tr>';
        echo '<th>#</th>';
        echo '<th>Nombre</th>';
        echo '<th>Marca</th>';
        echo '<th>Modelo</th>';
        echo '<th>Precio</th>';
        echo '<th>Unidades</th>';
        echo '<th>Detalles</th>';
        echo '<th>Imagen</th>';
        echo '</tr>';
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td>' . $row['nombre'] . '</td>';
            echo '<td>' . $row['marca'] . '</td>';
            echo '<td>' . $row['modelo'] . '</td>';
            echo '<td>' . $row['precio'] . '</td>';
            echo '<td>' . $row['unidades'] . '</td>';
            echo '<td>' . utf8_encode($row['detalles']) . '</td>';
            echo '<td><img src="' . $row['imagen'] . '" /></td>';
            echo '</tr>';
        }
        echo '</table>';
        echo '</body>';
        echo '</html>';

        $result->free();
    }

    $link->close();
}
?>