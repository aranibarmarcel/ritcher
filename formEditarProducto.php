<?php
session_start();
require 'codigo.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    <link rel="stylesheet" href="f_p.css">
</head>
<body>
    <h1>Editar Producto</h1>
    <?php

        $id=$_GET['id'];
        $sql= "SELECT * FROM productos WHERE idproductos='$id'";
        $result= $conexion->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
         
                $nombre_prod=$row['nombre_prod'];
                $precio=$row['precio'];
                $cantidad=$row['cantidad'];
            }
        }
            ?>   
    <form action="editarProducto.php" method="post">
        <input type="hidden" name="id" id="id" value="<?=$id?>">

        <label for="nombre">Nombre:</label>
        <input type='text' id='nombre' name='nombre_prod' value="<?=$nombre_prod?>" required>
        <br><br>

        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" value="<?= $precio?>" required>
        <br><br>

        <label for="cantidad">Cantidad:</label>
        <input type="number" id="cantidad" name="cantidad" value="<?=$cantidad ?>" required>
        <br><br>

        <input type="submit" value="Actualizar">
    </form>
</body>
</html>