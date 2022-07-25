<?php
    $pg = "inicio";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="inicio" class="d-flex flex-column h-100">
    <header class="container pt-2">
    <?php include_once "menu.php"?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 mt-4 text-center div-cohete">
                <a href="proyectos.php">
                    <img src="images/cohete.svg" alt="" class="cohete"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 my-4 mt-sm-5 text-center offset-sm-3 mb-3">
                <div class="input-home py-2 ">
                    <p class="p-1">Bienvenid@ a mi sitio web sobre proyectos en sistemas.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <a href="proyectos.html" class="btn">Conoce mis proyectos</a>
            </div>
        </div>
    </main>
    <footer class="container mt-auto pt-5 pb-5">
        <div class="whatsapp">
            <a href="https://api.whatsapp.com/send?phone=541156339751" title="whatsapp" i
                class="fab fa-whatsapp"></i></a>
        </div>
        <div class="row">
            <div class="col-3">
                <a href="https://github.com" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com/in/agustin-nicolas-beloso8320901ab//" target="_blank"
                    title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-3">
                Sponsor: <a href="https://depcsuite.com/" target="_blank">DePc Suite</a>
            </div>
            <div class="col-3">
                Email: <a href="mailto:belosoan@gmail.com">belosoan@gmail.com</a>
            </div>
        </div>
        


</body>

</html>