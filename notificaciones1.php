<?php
    require 'db.php';
    $sql_productos = "SELECT  * FROM productos ";
    $result = $conexion->query($sql_productos);
    $sql_info="SELECT  * FROM productos ";
    session_start();
    $current_user_id=$_SESSION['idusuario'];
    $sql_info = "SELECT  * FROM usuario";
    $infos = $conexion->query($sql_info);
    $info=$infos->fetch_assoc();
    $monedas=$info['monedas'];
    $sql_info1="SELECT  nombre FROM productos ";
    $infos1 = $conexion->query($sql_info1);
    $info=$infos1->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acciones de Usuario</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     <style>
       
        body {
           
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
<body onload="esti()">
   
    <div class="main-content">
    <?php
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            if($monedas>=$row['precio']){  
               
                echo "<div class='notification'><h3>Notificación". $row['idProducto']."</h3><p>Tienes las monedas suficientes para comprar ". $row['nombre']."<button onclick='ima()'>ver</button>".". Si te interesa compralo!</p>" ;
                echo "<button onclick='ima()'><a href=formEditarProducto.php?id=".$row['idProducto']." >Comprar</a></button>&nbsp";
                echo "<a href=eliminarProducto.php?id=".$row['idProducto']." >Eliminar</a>&nbsp";
      
               
   
                echo "</div>";
                
                $datos_json = json_encode($row['nombre']);
              
            
                
    } } 
}else {
        echo "<tr><td colspan='3'>No hay productos registrados</td></tr>";
    }

    

    ?>
<script>
    function ima(){
        var datos = <?php echo $datos_json; ?>;
        if(datos=="quitagrasa"){
            Swal.fire({
  title: "Quitagrasa!",
  text: "El mejor quitagrasa de 2litros.",
  imageUrl: "data:image/jpeg;base64,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",
  imageWidth: 400,
  imageHeight: 400,
  imageAlt: "Custom image"
});
        }else if(datos=="lavavajillas"){
            alert("lavavajillsd");
        }else{
            alert("no hay ese producto");
        }
       

    }
   
    
    </script>
    
            
</body>
</html>
