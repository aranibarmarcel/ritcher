

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notificación</title>
    <link rel="stylesheet" href="notificaciones.css">
  
</head>
<body>
<title>Notificación</title>
<style>
.notification {
    position: fixed;
    bottom: 20px; /* Posición desde el fondo */
    right: 20px; /* Posición desde la derecha */
    background-color: #d6f9c2;
    border: 1px solid rgb(248, 248, 248);
    padding: 15px;
    border-radius: 5px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    display: flex;
    align-items: center;
}
.close-btn {
    margin-left: auto;
    cursor: pointer;
    font-weight: bold;
    color: rgb(17, 11, 11);
}
</style>
</head>
<body>

<div class="notification">
    <span class="not">FELICIDADES GANASTE 1 MONEDA !!!</span>
    <span class="close-btn" onclick="this.parentElement.style.display='none';">X</span>
</div>

<button class="canvas-confetti-btn animate__animated">
      🎉
      <span class="tool-tip">Click me!</span>
    </button>
</body>
</html>
</body>
</html>