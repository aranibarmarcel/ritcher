<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="noti.css">
    <title>Botón de Ubicación</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
  <body>
      <header>
          <form class="buscador" action="/action_page.php" style="margin:auto;max-width:300px">
          <input type="text" placeholder="Search.." name="search2">
          <button type="submit"><i class="fa fa-search"></i></button>
          </form></h2>
          <nav class="nav">
          <ul class="barnav">
              <li class="menu"><a href="http://">PAGINA PRINCIPAL</a></li>
              <li class="menu"><a href="http://">TIENDA</a></li>           
              <li class="menu"><a href="http://">CONVENIOS</a></li>
              <li class="menu"><a href="http://">CALENDARIO</a></li>
          </ul>
      </nav>
  
</header>
<center>
    <ul class ="caja">
    <li><h1>NOTIFICACION</h1></li>
    <li>GANASTE 1 MONEDA!!!!</li>
    </ul>
    <ul class ="caja">
        <li><h1>NOTIFICACION</h1></li>
        <li>TU SOLICITUD DE INTERCAMBIO  DE ACEITE HA SIDO ACEPTADA</li>
        </ul>
    <ul class ="caja">
        <li><h1>NOTIFICACION</h1></li>
        <li>FELICIDADES POR TU COMPRA, GRACIAS POR CONTRIBUIR A UN AMBIENTE MAS SOSTENIBLE</li>
    
    </ul>
    <ul class ="caja">
        <li><h1>NOTIFICACION</h1></li>
        <li> TU SOLICITUD DE RECOJO HA SIDO ACEPTADA </li>
    </ul>
</center>
<footer>
    <div class="footer-content">
    <div class="footer-section about">
    <h3 class="te1">SOMOS RICHTER</h3>
      <p class="te1">Somos RITCHER una empresa dedicada a brindar soluciones tecnológicas de alta calidad. Nuestro objetivo es ayudar a nuestros clientes a alcanzar el éxito.</p>
      <div class="contact">
        <span class="te1"><i class="fas fa-phone"></i> +1 (555) 123-4567</span>
        <span class="te1"><i class="fas fa-envelope"></i> info@miempresa.com</span>
      </div>
      <div class="socials">
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-linkedin"></i></a>
      </div>
    </div>

    <div class="footer-section links">
      
    </div>

    <div class="footer-section contact-form">
      <h3 class="te1">COMENTARIOS</h3>
      <form action="index.html" method="post">
        <input  class="te1" type="email" name="email" class="text-input" placeholder="User@gmail.com">
        <textarea class="te1" rows="4" name="message" class="text-input" placeholder="Escribe...."></textarea>
        <button  class="te1" type="submit" class="btn">Enviar</button>
      </form>
    </div>
  </div>

  <div class="footer-bottom">
    &copy;  2024 | Diseñado por <a href="#">Mi Empresa</a>
  </div>




  <button class="location-button" onclick="irALocalizacion()">
        <i  class="fas fa-map-marker-alt"></i> Mi ubicación
    </button>

    <script>
        function irALocalizacion() {
            window.open("https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d238.02470882634046!2d-66.1960394739381!3d-17.34469945267272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93e375dae10a0e75%3A0xfe8cf9c9e3c0b6d6!2sIndustrias%20Richter!5e0!3m2!1ses!2sbo!4v1723837656008!5m2!1ses!2sbo", "_blank");
        }
    </script>
      </footer>
  </body>
  </html>

