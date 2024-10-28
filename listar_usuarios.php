
<link rel="stylesheet" type="text/css" href="l_u.css">
<?php
$servidor ="localhost";
$usuario="root";
$contrasena="";
$baseDatos="ritcher";
$conexion=new mysqli($servidor,$usuario,$contrasena,$baseDatos);


// Check connection
if ($conexion->connect_error) {
  die("Connection failed: " . $conexion->connect_error);
}

$sql = "SELECT idusuario, nombre, apellido, email, edad,contrasena FROM usuario";
$result = $conexion->query($sql);

if ($result->num_rows > 0){ 
  // output data of each row
echo "<table>
  <tr>
    <th>Id</th>
    <th>Nombre</th>
    <th>Apellido</th>
     <th>Email</th>
    <th>Edad</th>
    <th> accion</th>
    
  </tr>";

 while($row = $result->fetch_assoc()) {
   /* echo "idusuario: " . $row["idusuario"]. " nombre: " . $row["nombre"]. "  apellido:" . $row["apellido"]." email: ".$row["email"]." edad: " .$row["edad"]."<br>" ; */
    echo "<tr><td>". $row["idusuario"]."</td><td>". $row["nombre"]."</td><td>". $row["apellido"]."</td><td>".$row["email"]."</td><td>".$row["edad"]."</td><td>";
    
    echo "<a href='formEditarUsuario.php?id=".$row['idusuario']."'>Editar</a>&nbsp;";
    echo "<a href='eliminarUsuario.php?id=".$row['idusuario']."'>Eliminar</a>&nbsp;";
    echo "<a href='bloquearUsuario.php?id=".$row['idusuario']."'>Bloquear</a>&nbsp;&nbsp;";
    echo"<a href='formAumentarMonedas.php?idusuario=".$row['idusuario']."' >+</a> &nbsp;&nbsp;<a href='formDisminuirMonedas.php?idusuario=".$row['idusuario']."'>-</a></td>";
    echo "</tr>";
  }
} else {
  echo "0 results";
}
echo"</table>";
 ?>


<?php $conexion->close();
?> 
