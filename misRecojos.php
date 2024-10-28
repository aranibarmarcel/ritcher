<?php
session_start();
if (!isset($_SESSION['idusuario'])) {
    header('Location: login_registro.php');
    exit();
}
require 'codigo.php';
include 'validarBloqueo.php';
$current_user_id=$_SESSION['idusuario'];

$sql = "SELECT  * FROM recojo WHERE Usuario_idusuario='$current_user_id'";
$result = $conexion->query($sql);


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Peticiones de Recojo</title>
    <link rel="stylesheet" href="i_u.css">
</head>
<body>
    <h2>Mis Solicitudes</h2>
    <table border="1">
        <tr>
            <th>Cantidad</th>
            <th>Fecha</th>
            <th>Estado</th>
            <th>Dirección</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                if ($row['estado']==0)
                {
                    $estado="En Espera";
                }
                if ($row['estado']==1)
                {
                    $estado="Recogido";
                }
                if ($row['estado']==-1)
                {
                    $estado="Rechazado";
                }
                $sql2="SELECT * FROM usuario WHERE idusuario='$current_user_id'";
                $direccion = $conexion->query($sql2);
                if ($direccion->num_rows > 0) {
                    $row2 = $direccion->fetch_assoc();
                    $dir=$row2["direccion"];
                } else {
                    $dir="No se encontró la dirección";
                }
                echo "<tr><td>" . $row["cantidad"]. "</td><td>" . $row["fecha"]. "</td><td>" . $estado. "</td><td>" . $dir. "</td</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No hay intercambios registrados</td></tr>";
        }
        ?>
    </table>
        <a href="formRegistroIntercambio.php">
           <button>
                Registrar nuevo
            </button> 
        </a>
    <?php
    $conexion->close();
    ?>
</body>
</html>
