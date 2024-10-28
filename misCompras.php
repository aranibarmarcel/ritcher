<?php
session_start();
if (!isset($_SESSION['idusuario'])) {
    header('Location: login_registro.php');
    exit();
}
require 'codigo.php';
include 'validarBloqueo.php';
$current_user_id=$_SESSION['idusuario'];

$sql = "SELECT  * FROM intercambio WHERE Usuario_idusuario='$current_user_id'";
$result = $conexion->query($sql);


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Intercambio de Productos</title>
    <link rel="stylesheet" href="i_u.css">
</head>
<body>
    <h2>Mis Compras</h2>
    <table border="1">
        <tr>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Fecha</th>
            <th>Estado</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                
                $idProducto=$row['productos_idproductos'];
                $sql2="SELECT * FROM productos WHERE idproductos='$idProducto'";
                $producto = $conexion->query($sql2);
                if ($producto->num_rows > 0) {
                    $row2 = $producto->fetch_assoc();
                    $nombre_producto=$row2["nombre_prod"];
                } else {
                    
                }
                echo "<tr><td>" . $nombre_producto. "</td><td>" . $row["cantidad"]. "</td><td>" . $row["fecha"]. "</td>";
                if ($row['estado']==1)
                {
                   echo" <td>Aceptado</td>";
                }
                else
                {
                    echo" <td>Pendiente a Revisión</td>";
                }
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No hay intercambios registrados</td></tr>";
        }
        ?>
    </table>
        <a href="tienda.php">
           <button>
                Registrar nuevo
            </button> 
        </a>
    <?php
    $conexion->close();
    ?>
</body>
</html>
