<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Proveedor</title>
</head>
<body>
    <h1>Formulario de Proveedor</h1>
    <form action="insertar.php" method="post">
        <label for="idProveedor">ID Proveedor:</label><br>
        <input type="text" id="idProveedor" name="idProveedor"><br>

        <label for="telefono">Teléfono:</label><br>
        <input type="text" id="telefono" name="telefono"><br>

        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre"><br>

        <label for="apellido">Apellido:</label><br>
        <input type="text" id="apellido" name="apellido"><br>

        <label for="observaciones">Observaciones:</label><br>
        <input type="text" id="observaciones" name="observaciones"><br>

        <input type="submit" value="Agregar Proveedor">
    </form>
</body>
</html>

