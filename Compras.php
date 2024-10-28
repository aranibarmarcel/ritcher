<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="l_u.css">
</head>
<body>
    <?php
session_start();
if (!isset($_SESSION['idusuario'])) {
    //header('Location: login_registro.php');
    exit();
}
if ($_SESSION['rol']!=2){
    //header('Location: menuUsuario.php');
    exit();
}
require 'codigo.php';
$current_user_id=$_SESSION['idusuario'];

$sql = "SELECT  * FROM intercambio ";
$result = $conexion->query($sql);


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Intercambio de Productos</title>
</head>
<body>
    <h2>Solicitudes de Compras</h2>
    <table border="1">
        <tr>
            <th>Cliente</th>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Monedas</th>
            <th>Fecha</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $idusuario=$row['usuario_idusuario'];
                $sql_u="SELECT * FROM usuario WHERE idusuario='$idusuario'";
                $idproductos=$row['productos_idproductos'];
                $sql2="SELECT * FROM productos WHERE idproductos='$idproductos'";
                $cant=$row['cantidad'];
                $productos = $conexion->query($sql2);

                if ($productos->num_rows > 0) {
                    $row2 = $productos->fetch_assoc();
                    $nombre_prod=$row2["nombre_prod"];
                    $monedas=$cant*$row2['precio'];
                }
                $usuario = $conexion->query($sql_u);
                if ($usuario->num_rows > 0) {
                    $usuario = $usuario->fetch_assoc();
                    $nombre=$usuario["nombre"];
                } 
                echo "<tr><td>" . $nombre. "</td><td>" . $nombre_prod. "</td><td>" . $row["cantidad"]. "</td><td>" . $monedas. "</td><td>" . $row["fecha"]. "</td>";
                if ($row['estado']==1)
                {
                   echo" <td>Aceptado</td>";
                }
                if ($row['estado']==0)
                {
                    echo" <td>Pendiente a Revisión</td>";
                    echo "<td><a href=aceptarCompra.php?id=".$row['idIntercambio']." >Aceptar Compra</a></td><td><a href=rechazarCompra.php?id=".$row['idIntercambio']."&id_usuario=".$idusuario."&monedas=".$monedas.">Rechazar Compra</a></td>";
                }
                if ($row['estado']==-1)
                {
                    echo" <td>Rechazado</td>";
                }
                
                        
                     echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No hay intercambios registrados</td></tr>";
        }
        ?>
    </table>

    <?php
    $conexion->close();
    ?>
</body>
</html>

</body>
</html>
