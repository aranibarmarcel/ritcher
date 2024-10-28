    <?php
    session_start();
if (!isset($_SESSION['idusuario'])) {
    header('Location: login_registro.php');
    exit();
}
    ?>

<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Entregas</title>
    <link rel="stylesheet" href="i_u.css">
    
</head>
<body>
    <h1>Nueva Entrega</h1>
    <form action="registroEntrega2.php" method="post">
        <label for="fecha">Fecha:</label>
        <input type="date" id="fecha" name="fecha" required>
        <br><br>
        <label for="cantidad">Cantidad:</label>
        <input type="number" id="cantidad" name="cantidad" required>        
        <br><br>
        
        <input type="submit" value="Enviar">

    </form>
    


</body>
</html>