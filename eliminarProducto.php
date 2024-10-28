<?php

    require 'codigo.php';
    $idproductos = $_GET['id'];

    $sql = "DELETE FROM productos where idproductos='$idproductos'";

    if ($conexion->query($sql) === TRUE) {
        echo "Se elimino el producto!";
        header('Location: Productos.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
    
    $conexion->close();
?>