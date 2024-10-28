<?php
session_start();
require 'codigo.php';
if (!isset($_SESSION['idusuario'])) {
    header('Location: login_registro.php');
    exit();
}
if ($_SESSION['rol']!=2){
    header('Location: usuario.php');
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Monedas</title>
    <link rel="stylesheet" href="f_p.css">
</head>
<body>
    <h1>Aumentar Monedas</h1>
    <?php

        $idusuario=$_GET['idusuario'];
        $sql= "SELECT * FROM usuario where idusuario='$idusuario'";
        $result= $conexion->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
         
                $monedas_old=$row['monedas'];

            }
        }
            ?>   
    <form action="aumentarMonedas.php" method="post">
        <input type="hidden" name="id" id="id" value="<?=$idusuario?>">
        <input type="hidden" name="monedas_old" id="monedas_old" value="<?=$monedas_old?>">
        <label for="Monedas_old">cantidad Monedas: <?php echo $monedas_old?></label><br>
        <label for="Monedas_old">Cuantas monedas desea aumentar:</label>
        <input type="number" name="monedas" id="monedas" >
        <br><br>

        <input type="submit" value="Actualizar">
    </form>
</body>
</html>