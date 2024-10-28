<?php
session_start();
require 'codigo.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena']; // agregué el cierre de la comilla

    $stmt = $conexion->prepare("SELECT * FROM usuario WHERE email = ?");
    if ($stmt === false) {
        die('Surgio un incoveniente con la base de datos: ' . $conexion->error);
    }
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $usuario = $result->fetch_assoc();
   // $contrasena_hash = substr(hash('sha512', $contrasena), 0, 45);//
echo $usuario['contrasena'];
    if ($usuario && $contrasena == $usuario['contrasena']) {
        $_SESSION['email'] = $usuario['email'];
        $_SESSION['idusuario']=$usuario['idusuario'];
        $_SESSION['rol']=$usuario['rol'];
        //header('Location: usuario.php');
       // exit();
       if($_SESSION['rol']!=2){
        header('Location: usuarios.php');
    }else{
        header('Location: ADMIN2.php');
    }
} else {
    header('Location: loginerror.php'); // Redirigir a loginerror.php si la contraseña es incorrecta
    exit();
}
    $stmt->close();
}
$conexion->close();
?>