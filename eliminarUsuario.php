<?php
    require 'codigo.php';
    $idusuario = $_GET['id'];

    $sql = "DELETE FROM usuario where idusuario='$idusuario'";

    if ($conexion->query($sql) === TRUE) {
        echo "Se elimino el usuario!";
        header('Location: listar_usuarios.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
    
    $conexion->close();
?>