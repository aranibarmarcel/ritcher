<?php
    require 'codigo.php';
    $idproductos = $_POST['id'];
    $nombre_prod = $_POST['nombre_prod'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $sql = "UPDATE productos SET nombre_prod='$nombre_prod', precio='$precio', cantidad = '$cantidad' where idproductos='$idproductos'";

    if ($conexion->query($sql) === TRUE) {
        echo "Edicion Exitosa!";
        header('Location: Productos.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
    
    $conexion->close();
?>