<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convenios</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background: url('plantas.gif') no-repeat center center fixed;
            background-size: cover;
        }

        header, footer {
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 1rem;
        }

        main {
            flex-grow: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            overflow: hidden;
            width: 300px;
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card .imgBx {
            height: 200px;
            overflow: hidden;
        }

        .card .imgBx img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease-in-out;
        }

        .card:hover .imgBx img {
            transform: scale(1.1);
        }

        .card .content {
            padding: 1.5rem;
            color: white;
        }

        .card .content h2 {
            margin-bottom: 0.5rem;
        }

        @media (max-width: 768px) {
            .container {
                gap: 1rem;
            }

            .card {
                width: calc(50% - 1rem);
            }
        }

        @media (max-width: 480px) {
            .card {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <header>
        <!-- Header content -->
        <<?php
        include ("cabeza.php")
        ?>  
    </header>
    
    <main>
        <div class="container">
            <div class="card">
                <div class="imgBx">
                    <img src="convcomer.jpg" alt="Convenios Comerciales">
                </div>
                <div class="content">
                    <h2>Convenios Comerciales</h2>
                    <p>Acuerdos con proveedores y clientes para asegurar el suministro de materias primas o la distribución de productos.</p>
                </div>
            </div>
            <div class="card">
                <div class="imgBx">
                    <img src="convlabo.jpg" alt="Convenios Laborales">
                </div>
                <div class="content">
                    <h2>Convenios Laborales</h2>
                    <p>Acuerdos con sindicatos o empleados que establecen condiciones de trabajo, salarios y beneficios.</p>
                </div>
            </div>
            <div class="card">
                <div class="imgBx">
                    <img src="convtrans.jpg" alt="Convenios de Transporte">
                </div>
                <div class="content">
                    <h2>Convenios de Transporte</h2>
                    <p>Acuerdos con empresas de transporte o logística para optimizar la cadena de suministro.</p>
                </div>
            </div>
            <div class="card">
                <div class="imgBx">
                    <img src="convcola.jpg" alt="Convenios de Colaboración">
                </div>
                <div class="content">
                    <h2>Convenios de Colaboración</h2>
                    <p>Alianzas con otras empresas o instituciones para proyectos conjuntos o iniciativas de desarrollo.</p>
                </div>
            </div>
            <div class="card">
                <div class="imgBx">
                    <img src="convambi.jpg" alt="Convenios Ambientales">
                </div>
                <div class="content">
                    <h2>Convenios Ambientales</h2>
                    <p>Compromisos para seguir prácticas sostenibles y reducir el impacto ambiental.</p>
                </div>
            </div>
        </div>
    </main>
    
    <footer>
        <!-- Footer content -->
        <?php
        include ("footer.php")
        ?>  
    </footer>
</body>
</html>
