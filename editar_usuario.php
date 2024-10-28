<?php
$servidor ="localhost";
$usuario="root";
$contrasena="";
$baseDatos="ritcher";
$conexion=new mysqli($servidor,$usuario,$contrasena,$baseDatos);

if ($conexion->connect_error) {
    die("Conexión fallida:" . $conexion->connect_error);
} 

if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['telefono']) && isset($_POST['email']) && isset($_POST['direccion']) && isset($_POST['edad'])) {
    $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
    $apellido = mysqli_real_escape_string($conexion, $_POST['apellido']);
    $telefono = mysqli_real_escape_string($conexion, $_POST['telefono']);
    $email = mysqli_real_escape_string($conexion, $_POST['email']);
    $direccion = mysqli_real_escape_string($conexion, $_POST['direccion']);
    $edad = mysqli_real_escape_string($conexion, $_POST['edad']);


    $idusuario = $_POST['id'];

    $sql = "UPDATE usuario SET nombre=?, apellido=?, telefono=?, email=?, direccion=?, edad=? WHERE idusuario=?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("sssssii", $nombre, $apellido, $telefono, $email, $direccion, $edad, $idusuario);
    $stmt->execute();

   

    if ($stmt->affected_rows > 0) {
        $resultado = TRUE;
        echo "<h2>Se actualizaron correctamente  </h2>";
        header('Location: InformacionUsuario.php');
    } else {
        $resultado = FALSE;
        echo "<h2>Error al actualizar: " . $stmt->error . "</h2>";
    }
} else {
    echo "<h2>Error: Faltan datos en el formulario</h2>";
}
$conexion->close();
