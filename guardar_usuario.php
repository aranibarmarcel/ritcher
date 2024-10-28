<link rel="stylesheet" type="text/css" href="g_u.css">
<?php
$servidor ="localhost";
$usuario="root";
$contrasena="";
$baseDatos="ritcher";
$conexion=new mysqli($servidor,$usuario,$contrasena,$baseDatos);

if ($conexion->connect_error) {
    die("Conexión fallida:" . $conexion->connect_error);
}
$nombre=$_POST['nombre'];

$email=$_POST['email'];

/*$edad=$_POST['edad'];*/
$contrasena=$_POST['contrasena'];
/*echo($nombre);*/

/*$conexion->query"INSERT INTO datos (nombre,apellido,telefono,email,direccion,edad)";*/
$sql = "INSERT INTO usuario(nombre,email,contrasena) values ('$nombre', '$email', '$contrasena')"; 

/*$sql = "INSERT INTO usuario(email,nombre) values ('$email','$nombre')"; */
$resultado = $conexion->query($sql);
echo("<h2>Se registraron correctamente</h2>");
/*echo($nombre."<br>");
echo($apellido."<br>");
echo($telefono."<br>");
echo($email."<br>");
echo($direccion."<br>");
echo($edad."<br>");*/







?>

<a href="login_registro.php">
  <button type="button">Ahora sí, Inicia Sesión</button>
</a>
 

<?php $conexion->close();
?>