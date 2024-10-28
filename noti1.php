<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notificación Cerrable</title>
    <style>
        .notificacion {
            display: none; /* Oculta la notificación por defecto */
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #b1967a; /* Color de fondo */
            color: white; /* Color de texto */
            padding: 15px; /* Espaciado */
            border-radius: 5px; /* Bordes redondeados */
            cursor: pointer; /* Cursor tipo puntero */
            transition: opacity 0.5s; /* Transición suave */
            opacity: 0; /* Inicialmente transparente */
            transition: background-color 0.3s ease;
           
        }
        .notificacion:hover {
            background-color: green; /* Color al pasar el mouse */
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.5); /* Sombra al pasar el mouse */
            transform: translateY(-5px); /* Levanta la caja al pasar el mouse */
        }
      
       .im{
             width:20px;
            height:18px;
        }
    </style>
</head>
<body>

    <div class="notificacion" id="notificacion">
        FELICIDADES GANASTE UNA MONEDA!!!!!
        <img  class = "im" src ="https://static.vecteezy.com/system/resources/previews/012/598/179/non_2x/currency-coin-cartoon-png.png">
    </div>

    <script>
        // Función para mostrar la notificación
        function mostrarNotificacion() {
            const notificacion = document.getElementById("notificacion");
            notificacion.style.display = "block"; // Muestra la notificación
            notificacion.style.opacity = "1"; // Hace visible la notificación
        }

        // Redirigir a otra carpeta al hacer clic en la notificación
        document.getElementById("notificacion").onclick = function() {
            window.location.href = "noti.php"; // Cambia la URL a la carpeta deseada
        };
        // Llama a la función para mostrar la notificación después de 2 segundos
        setTimeout(mostrarNotificacion, 2000);
    </script>
</body>
</html>
