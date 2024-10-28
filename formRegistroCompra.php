<?php
require 'codigo.php';
session_start();
if (!isset($_SESSION['idusuario'])) {
    header('Location: login_registro.php');
    exit();
}

$sql = "SELECT  * FROM producto";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Compras</title>
</head>
<body>
    <h1>Lista Productos</h1>
    <h2>Productos Registrados</h2>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($producto = $result->fetch_assoc()) {
                echo "<tr><td>" . $producto['nombre']. "</td><td>" . $producto['precio']. "</td><td>";
                echo "<a href='comprarProducto.php?id=".$producto['idProducto']."'>Comprar</a>&nbsp;";
                
            }
        } else {
            echo "<tr><td colspan='4' class='no-products'>No hay productos registrados</td></tr>";
        }
        ?>
    </table>
    <div style="text-align: center;">
        <a href="formRegistroProducto.php">
            <button>
                Registrar nuevo
            </button>
        </a>
    </div>
    <?php
    $conn->close();
    ?>
    


</body>
</html>