<?php
    require 'codigo.php';
    session_start();
if (!isset($_SESSION['idusuario'])) {
    header('Location: login_registrer.php');
    exit();
}
    if ($_SESSION['rol']!=2){
        header('Location: formDisminuirMonedas.php');
    }
    
    $idusuario = $_POST['id'];
    $monedas_old=$_POST['monedas_old'];
    $monedas=$_POST['monedas'];
    $final=$monedas_old-$monedas;
    $sql = "UPDATE usuario SET monedas='$final' where idusuario='$idusuario'";

    if ($conexion->query($sql) === TRUE) {
        echo "Se bloqueo el usuario!";
        header('Location: listar_usuarios.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
    
    $conexion->close();
?>