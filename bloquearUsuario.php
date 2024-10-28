<?php
    require 'codigo.php';
    session_start();
if (!isset($_SESSION['idusuario'])) {
    header('Location: login_registro.php');
    exit();
}
    if ($_SESSION['rol']!=2){
        header('Location: menuUsuario.php');
    }
    
    $idUsuario = $_GET['id'];

    $sql = "UPDATE usuario SET estado=-1 where idusuario='$idUsuario'";

    if ($conexion->query($sql) === TRUE) {
        echo "Se bloqueo el usuario!";
        header('Location: listar_usuarios.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
    
    $conexion->close();
?>