<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Ejemplo</title>
    <link rel="stylesheet" href="f_p.css">
</head>
<body>
    <h1>Nuevo Producto</h1>
    <form action="registroProducto.php" method="post">
        <label for="nombre_prod">Nombre:</label>
        <input type="text" id="nombre_prod" name="nombre_prod" required>
        <br><br>
        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" required>
        <br><br>
        <label for="cantidad">Cantidad:</label>
        <input type="number" id="cantidad" name="cantidad" required>
        
        <br><br>
        <input type="submit" value="Enviar">

    </form>
</body>
</html>