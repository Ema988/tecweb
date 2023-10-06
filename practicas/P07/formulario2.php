<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Productos</title>
</head>
<body>
    <h1>Formulario de Productos</h1>
    <form method="post" action="formulario.php" enctype="multipart/form-data">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br><br>

        <label for="marca">Marca:</label>
        <input type="text" name="marca"><br><br>

        <label for="modelo">Modelo:</label>
        <input type="text" name="modelo"><br><br>

        <label for="precio">Precio:</label>
        <input type="number" name="precio" step="0.01" required><br><br>

        <label for="detalles">Detalles:</label>
        <textarea name="detalles"></textarea><br><br>

        <label for="unidades">Unidades:</label>
        <input type="number" name="unidades" required><br><br>

        <label for="imagen">Imagen:</label>
        <input type="file" name="imagen" accept="image/*"><br><br>

        <input type="submit" value="Guardar">
    </form>
</body>
</html>
