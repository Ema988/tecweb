<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Registro de Productos</title>
</head>
<body>
    <h1>Registro de Nuevos Productos</h1>
    <form action="set_productosv2.php" method="post" enctype="multipart/form-data">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br><br>

        <label for="marca">Marca:</label>
        <input type="text" name="marca" required><br><br>

        <label for="modelo">Modelo:</label>
        <input type="text" name="modelo" required><br><br>

        <label for="precio">Precio:</label>
        <input type="text" name="precio" required><br><br>

        <label for="detalles">Detalles:</label>
        <textarea name="detalles" required></textarea><br><br>

        <label for="unidades">Unidades:</label>
        <input type="number" name="unidades" required><br><br>

        <label for="imagen">Imagen:</label>
        <input type="file" name="imagen" accept="image/*" required><br><br>

        <input type="submit" value="Registrar Producto">
    </form>
</body>
</html>
