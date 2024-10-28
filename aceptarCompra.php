<?php
session_start();
if (!isset($_SESSION['idusuario'])) {
    header('Location: login_registro.php');
    exit();
}
    require 'codigo.php';
    if ($_SESSION['rol']!=2){
        header('Location: usuario.php');
    }
    
    $idCompra= $_GET['id'];
    $sql = "UPDATE intercambio SET estado=1 WHERE idintercambio=$idCompra";
    $result = $conexion->query($sql);
    if ($conexion->query($sql) === TRUE) {
        header('Location: Compras.php');
    } else {
        echo "Error: " . $sql1 . "<br>" . $conexion->error;
    }
    
    $conexion->close();
?>