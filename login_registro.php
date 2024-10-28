<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTROS DE INICIO DE SESIÓN</title>

    <!--Boxicons CDN-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' 
    rel='stylesheet'>

    <!-- CSS-->
    <link rel="stylesheet" href="Login_Registrer.css">

</head> 
<body>
    <!-- FOR SOURCE CODE COMMENT "CODE" -->
    <div class="wrapper">
        <span class="rotate-bg"></span>
        <span class="rotate-bg2"></span>

        <div class="form-box login">
            <h2 class="title animation" style="--i:0; --j:21">Iniciar Sesión</h2>
            <form id="form1" action="autenticate.php" method="POST">

            <div class="input-box animation" style="--i:19; --j:2">
            <input type="text" name="email" required>
            <label for="email">Correo electrónico</label>     
           
            
            <i class='bx bxs-envelope'></i>
            </div>

                <div class="input-box animation" style="--i:2; --j:23">
                <input type="contrasena" name="contrasena" required><br><br>
                <label for="contrasena">Contraseña:</label>
                
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <button type="submit" class="btn animation" style="--i:3; --j:24">INICIAR SESIÓN</button>
                <div class="linkTxt animation" style="--i:5; --j:25">
                    <p>No tienes una cuenta? <a href="#" class="register-link">Crear cuenta</a></p>
                </div>
            </form>
        </div>

        <div class="info-text login">
            <h2 class="animation" style="--i:0; --j:20">Hola &#128154;!</h2>
            <p class="animation" style="--i:1; --j:21">Bienvenido a nuestra Empresa RICHTER &#128154; </p>
        </div>


        <div class="form-box register">

            <h2 class="title animation" style="--i:17; --j:0">Crear cuenta</h2>

            <form method="POST" id="form2" action="guardar_usuario.php">

                <div class="input-box animation" style="--i:18; --j:1">
                    <input type="text" name="nombre" required>
                    <label for="nombre">Nombre de usuario</label>
                    <i class='bx bxs-user'></i>
                </div>

                <div class="input-box animation" style="--i:19; --j:2">
                    <input type="email" name="email" required>
                    <label for="email">Email</label>
                    <i class='bx bxs-envelope'></i>
                </div>

                <div class="input-box animation" style="--i:20; --j:3">
                    <input type="password" name="contrasena" required>
                    <label for="contrasena">Contraseña</label>
                    <i class='bx bxs-lock-alt'></i>
                </div>




                <button type="submit" class="btn animation" style="--i:21;--j:4">Crear cuenta</button>

                <div class="linkTxt animation" style="--i:22; --j:5">
                    <p>Ya tienes una cuenta? <a href="#" class="login-link">Inciar Sesión</a></p>
                </div>

            </form>
        </div>

        <div class="info-text register">
            <h2 class="animation" style="--i:17; --j:0;">Hola, Un gusto conocerte</h2>
            <p class="animation" style="--i:18; --j:1;">Bienvenido a nuestra Empresa RICHTER</p>
        </div>

    </div>

    <!--Script.js-->
    <script src="Login_Registrer.js"></script>
</body>
</html> 