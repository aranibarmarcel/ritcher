<?php
session_start();
require 'codigo.php';
if (!isset($_SESSION['idusuario'])) {
    header('Location: login_registro.php');
    exit();
}
?>
 <?php

$producto_id=$_GET['producto_id'];
$user_id=$_GET['user_id'];
    ?>  

<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" href="i_u.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Compras</title>
</head>
<body>
    <h1>Nueva Compra</h1>
    <form action="comprarProducto2.php" method="post">
        <input type="hidden" name="idProducto" id="idProducto" value="<?=$producto_id?>">
        <input type="hidden" name="id_user" id="id_user" value="<?=$user_id?>">
        <label for="fecha">Fecha:</label>
        <input type="date" id="fecha" name="fecha" required>
        <br><br>
        <label for="cantidad">Cantidad:</label>
        <input type="number" id="cantidad" name="cantidad" required>        
        <br><br>
        <input type="submit" value="Enviar">

    </form>
    


</body>
</html>