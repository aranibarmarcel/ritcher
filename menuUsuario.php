<?php
    require 'codigo.php';
    session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login_registro.php');
    exit();
}
    include 'validarBloqueo.php';
    $sql_productos = "SELECT  * FROM producto ";
    $result = $conexion->query($sql_productos);
    $sql_info="SELECT  * FROM producto ";
    $current_user_id=$_SESSION['user_id'];
    $sql_info = "SELECT  * FROM usuario WHERE ci='$current_user_id'";
    $infos = $conexion->query($sql_info);
    $info=$infos->fetch_assoc();
    $monedas=$info['monedas'];

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acciones de Usuario</title>
    <style>
       
        body {
            display: flex;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            width: 20%;
        }
        ul li {
            margin-bottom: 10px;
        }
        ul li a {
            text-decoration: none;
            color: black;
        }
        .main-content {
            width: 80%;
            padding: 20px;
        }
        .notification {
            background-color: #f2f2f2;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <ul>
        <li><a href="misRecojos.php">Mis Peticiones de Recojo</a></li>
        <li><a href="InformacionUsuario.php">Mi Información de Usuario</a></li>
        <li><a href="ProductosCompra.php">Ver los Productos Ofrecidos</a></li>
        <li><a href="misCompras.php">Mis Solicitudes de Compra</a></li>
        <li><a href="logout.php">Cerrar Sesión</a></li>
    </ul>
    <div class="main-content">
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            if ($monedas>$row['precio']){
            echo "<div class='notification'><h3>Notificación ".$row['idProducto']."</h3><p>Hey! Tienes la cantidad de monedas suficiente para comprar ".$row['nombre']. " ¿No quieres comprar este producto?.</p>";
            echo "<a href=eliminarProducto.php?id=".$row['idProducto']." >Eliminar</a>&nbsp</div>";
            }
        }
    } else {
        echo "<tr><td colspan='3'>No hay productos registrados</td></tr>";
    }
    ?>

    </div>
</body>
</html>