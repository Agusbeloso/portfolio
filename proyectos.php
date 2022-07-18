<?php
    $pg = "proyectos";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="proyectos" class="d-flex flex-column h-100">
    <header class="container pt-2">
         <?php include_once "menu.php"?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 mt-3 mb-5">
                <h1>Proyectos</h1>
            </div>
        </div>
        <div class="row-proyecto">
            <div class="col-12 pb-0">
                <p>Los siguientes son algunos de los trabajos que he realizado:</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-12 p-sm-4 px-4 py-2 d-inline">
                <div class="row card">
                    <div class="col-12 pt-0">
                        <img src="images/abmclientes.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 px-0 pt-0 py-3">
                        <h2>ABM CLIENTES</h2>
                    </div>
                    <div class="col-12 pt-4 pb-2">
                        <p class="py-2 px-3">Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP,
                            Bootstrap
                            y Json.</p>
                    </div>
                    <div class="row py-5">
                        <div class="col-6">
                            <a href="sistema/abmclientes" class="btn btn-rojo" target="_blank">Ver online</a>
                        </div>
                        <div class="col-6 link-rojo text-center">
                            <a href="">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-12 p-sm-4 px-4 py-2">
                <div class="row card">
                    <div class="col-12 p-0">
                        <img src="images/abmventas.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 color-gradiente px-0 pt-0 py-3">
                        <h2>SISTEMA DE GESTIÓN DE VENTAS</h2>
                    </div>
                    <div class="col-12 py-3">
                        <p class="py-2 px-3">Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC,
                            Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
                    </div>
                    <div class="row py-5">
                        <div class="col-6">
                            <a href="sistema/login" class="btn btn-rojo" target="_blank">Ver online</a>
                        </div>
                        <div class="col-6 link-rojo text-center">
                            <a href="">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-12 p-sm-4 px-4 py-2">
                <div class="row card">
                    <div class="col-12 p-0">
                        <img src="images/proyecto-integrador.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 color-gradiente px-0 pt-0 py-3">
                        <h2>PROYECTO INTEGRADOR</h2>
                    </div>
                    <div class="col-12 py-3">
                        <p class="py-2 px-3" >Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS,
                            Mercadopago con panel administrador, gestor de usuarios, módulo de permisos y
                            funcionalidades a fines.</p>
                    </div>
                    <div class="row py-5">
                        <div class="col-6">
                            <a href="" class="btn btn-rojo">Ver online</a>
                        </div>
                        <div class="col-6 link-rojo text-center">
                            <a href="">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="container mt-5 pb-3">
        <div class="whatsapp">
            <a href="https://api.whatsapp.com/send?phone=541156339751" title="whatsapp" i
                class="fab fa-whatsapp"></i></a>
        </div>
        <div class="row">
            <div class="col-3 rounded">
                <a href="https://github.com" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com/in/agustin-nicolas-beloso8320901ab//" target="_blank"
                    title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-3 datos">
                Sponsor: <a href="https://depcsuite.com/" target="_blank">DePc Suite</a>
            </div>
            <div class="col-3 datos">
                Email: <a href="mailto:belosoan@gmail.com">belosoan@gmail.com</a>
            </div>
        </div>
    </footer>

</body>

</html>