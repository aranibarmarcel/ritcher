<?php
    require 'codigo.php';
    session_start();
if (!isset($_SESSION['idusuario'])) {
    header('Location: login_register.php');
    exit();
}
    if ($_SESSION['rol']!=2){
        header('Location: menuUsuario.php');
    }
    
    $idRecojo = $_GET['id'];
    $user_id=$_GET['user_id'];
    $cantidad=$_GET['cant'];
    $sql = "SELECT  * FROM usuario WHERE idusuario=$user_id";
    $result = $conexion->query($sql);
    while($row = $result->fetch_assoc()) {
        
        $intercambio=$row;
    }
    $final= $intercambio['monedas']+$cantidad;
    $sql1 = "UPDATE recojo SET estado=1 where idRecojo='$idRecojo'";
    $sql2= "UPDATE usuario SET monedas='$final' WHERE idusuario='$user_id'";
    if ($conexion->query($sql1) === TRUE) {
        if ($conexion->query($sql2) === TRUE) {
            header('Location: Recojos.php');
        } else {
            echo "Error: " . $sql2 . "<br>" . $conexion->error;
        }
    } else {
        echo "Error: " . $sql1 . "<br>" . $conexion->error;
    }
    
    $conexion->close();
?>