<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>
   
    <header>

        <h2> 
            <form class="buscador" action="/action_page.php" style="margin:auto;max-width:300px">
                <input type="text" placeholder="Search.." name="search2">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </h2>
    <center>    <nav>
            <ul class="barnav">
            <li  class="menu"><a class ="ar" href="ADMIN2.php">VOLVER</a></li>
            <li  class="menu"><a class ="ar" href="tienda.php">TIENDA</a></li>
            </ul>
        </nav></center>
    </header>

    <section id="uno">
        <h3 style="font-family: Algerian; font-size: 60px;"><center>BIENVENIDO</center></h3>
        <img id="user-image" src="" alt="Imagen del usuario" style="max-width: 210px; max-height: 100px;"> <br>
    <input type="file" id="image-input" accept="image/*">
    <button id="upload-button">Subir imagen</button>
    <script>
    const imageInput = document.getElementById('image-input');
    const uploadButton = document.getElementById('upload-button');
    const userImage = document.getElementById('user-image');

    uploadButton.addEventListener('click', () => {
        const file = imageInput.files[0];
        const reader = new FileReader();
        reader.onload = () => {
            const imageData = reader.result;
            const image = new Image();
            image.src = imageData;
            image.onload = () => {
                const width = image.naturalWidth;
                const height = image.naturalHeight;
                if (width > 850 || height > 950) {
                    alert('La imagen es demasiado grande. El tamaño máximo permitido es 800x900 píxeles');
                    return;
                }
                userImage.src = imageData;
            };
        };
        reader.readAsDataURL(file);
    });
</script>
    </section>
    <section id="dos"><a href="Recojos.php" class="boton" class="verde">VER SOLICITUDES DE RECOJO Y ENTREGA </a> <br> <br>  <br> </section>
    <section id="tres"><a href="Productos.php" class="boton" class="verde">VER PRODUCTOS</a></section>
    <section id="cuatro"><a href="restablecerContraseña.php" class="boton" class="verde">RESTABLECER CONTRASEÑA</a></section>
    <section id="cinco"><a href="Compras.php" class="boton" class="verde">VER SOLICITUDES DE COMPRA</a> <br> <br></section>
    <section id="seis"><a href="logout.php" class="boton" class="verde">CERRAR SESION</a></section>
    <footer>
    <?php
        include ("footer.php")
      ?> 
    </footer>
</body>
</html>