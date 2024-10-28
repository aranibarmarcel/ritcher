<?php
session_start();
require 'codigo.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="f_p.css">
</head>
<body>
    <h1>Editar Usuario</h1>
    <?php

        $id=$_SESSION['idusuario'];
        $sql= "SELECT * FROM usuario WHERE idusuario='$id'";
        $result= $conexion->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
         
                $nombre=$row['nombre'];
                $apellido=$row['apellido'];
                $direccion=$row['direccion'];
                $email=$row['email'];
                $telefono=$row['telefono'];
                $edad=$row['edad'];

            }
        }
            ?>   
    <form action="editar_usuario.php" method="post">
        <input type="hidden" name="id" id="id" value="<?=$id?>">

        <label for="nombre">Nombre:</label>
        <input type='text' id='nombre' name='nombre' value="<?=$nombre?>" required>
        <br><br>

        <label for="apellidos">Apellidos:</label>
        <input type="text" id="precio" name="apellido" value="<?= $apellido?>" required>
        <br><br>

        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" value="<?= $direccion?>" required>
        <br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?= $email?>" required>
        <br><br>

        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" value="<?= $telefono?>" required>
        <br><br>

        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" value="<?= $edad?>" required>
        <br><br>



        <input type="submit" value="Actualizar">
    </form>
</body>
</html>