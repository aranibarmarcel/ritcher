<?php
    require 'codigo.php';
    session_start();
if (!isset($_SESSION['idusuario'])) {
    header('Location: login_registro.php');
    exit();
}
    include 'validarBloqueo.php';
    $idProducto = $_POST['idProducto'];
    $user_id=$_SESSION['idusuario'];
    $fecha = $_POST['fecha'];
    $cantidad_f = $_POST['cantidad'];
    $sql_u = "SELECT  * FROM usuario WHERE idusuario=$user_id";
    $sql_p= "SELECT  * FROM productos WHERE idproductos=$idProducto";
    $result = $conexion->query($sql_p);
    while($row = $result->fetch_assoc()) {
        
        $producto=$row;
        $cantidad=$producto['cantidad'];
    }
    $result2 = $conexion->query($sql_u);
    while($row = $result2->fetch_assoc()) {
        
        $informacion=$row;
    }
    $final= $informacion['monedas']-$producto['precio']*$cantidad_f;
    if ($final>=0){
        $sql_c= "INSERT INTO intercambio (Usuario_idusuario,productos_idproductos,fecha, cantidad) VALUES ('$user_id','$idProducto','$fecha', '$cantidad_f')";
        $sql2= "UPDATE usuario SET monedas='$final' WHERE idusuario='$user_id'";
        if ($conexion->query($sql_c) === TRUE) {
            if ($conexion->query($sql2) === TRUE) {
                header('Location: misCompras.php');
            }
        } else {
            echo "Error: " . $sql_C . "<br>" . $conexion->error;
        }
    }
    else{

        echo "Error: Monedas insuficientes" ;
    }


    
  

    
    $conexion->close();
?>