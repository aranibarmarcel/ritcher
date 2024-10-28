<?php
session_start();
if (!isset($_SESSION['idusuario'])) {
    header('Location: login_registro.php');
    exit();
}
require 'codigo.php';
include 'validarBloqueo.php';
$current_user_id=$_SESSION['idusuario'];
$sql = "SELECT  * FROM usuario WHERE idusuario='$current_user_id'";
$result = $conexion->query($sql);
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion de Usuarios</title>
    <link rel="stylesheet" href="i_u.css">
</head>
<body>
    <h1>Mi información</h1>

    <?php if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) { 
                echo "<div>
                    <p>
                    <strong>Nombre: </strong>" .$row['nombre']. "</p>
                    <p><strong>Apellidos: </strong>".$row['apellido']."</p>
                    <p><strong>Teléfono: </strong>" .$row['telefono']."</p>
                    <p><strong>Dirección: </strong>" .$row['direccion'] ."</p>
                    <p><strong>Monedas: </strong>" .$row['monedas']."</p>
                    <p><strong>Edad: </strong>"  .$row['edad']. "</p>
                </div>";
                echo "<a href=formEditarUsuario.php >Editar Informacion</a>&nbsp";
            }
    }
    else {
        echo "<p>No se encontraron usuarios.</p>";
    }?>
   <a href="logout.php" title="Logout"><button> Cerrar sesion</button>
   <a href="misRecojos.php" title="recojos"><button> Ver mis recojos</button>

</body>
</html>