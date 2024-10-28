<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<title>Document</title>
    <link rel="stylesheet" href="admin2.css">

</head>

<body> 








<header>
     <!-- <button id=fafa class="fa fa-bars" ></button>
       <form class="buscador" action="/action_page.php" style="margin:auto;max-width:300px">
           <input type="text" placeholder="Search.." name="search2">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form></h2>-->
       
    </header>
    
    <nav class="nav">
        <ul class="barnav">
            <li  class="menu"><a class ="ar" href="administrador.php">MÁS OPCIONES</a></li>
            <li  class="menu"><a class ="ar" href="tienda.php">TIENDA</a></li>
          <!--  <li  class="menu"><a class ="ar" href="">MONEDA VIRTUAL</a></li>
            <li  class="menu"><a class ="ar" href="">AMBIENTE</a></li>
            <li  class="menu"><a class ="ar" href="">INICIAR SESION</a></li>-->
           
        </ul>
    </nav>
    <section id="uno"><h1 class ="boton" class ="verde">BIENVENIDO ADMIN2 </h1>
    <center> <img src="https://static.vecteezy.com/system/resources/previews/019/879/186/non_2x/user-icon-on-transparent-background-free-png.png" id="imau" alt="50"></center>


</section>
 
    <section id="dos"><a href="listar_usuarios.php" class ="boton" class ="verde">INFORMACION DEL USUARIO</a> <?php include("listar_usuarios.php") ?> </section>
    <section id="tres"><a href="Productos.php"  class ="boton" class ="verde">AGREGAR PRODUCTOS</a>  </section>
  <!--  <img src="https://cdn-icons-png.flaticon.com/512/3144/3144456.png "--> <a href="Productos.php" id ="ima3" alt="50"></a>
 </section>
 <section id="cuatro"><a href="Productos.php"  class ="boton" class ="verde">PRODUCTOS DE INTERCAMBIO</a></section>

 <footer>
 <?php
     include ("foot.php")
      ?> 
    </footer>

</body>
</html>





