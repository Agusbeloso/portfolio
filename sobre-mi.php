<?php
$pg = "sobre-mi";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Mi</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="sobre-mi" class="d-flex flex-column h-100">
    <header class="container pt-2">
        <?php include_once "menu.php" ?>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-sm-5 col-12 mt-4">
                    <h1 class="mt-sm-4 pb-sm-4">Sobre mi</h1>
                    <p class="pb-sm-5">Apasionado por la tecnología y viajar por el mundo. Soy estudiante de progrmacion
                        y busco
                        expandir mis conocimientos.</p>
                    <a href="contacto.php" class="btn btn-rojo">Enviar mensaje</a>
                </div>
                <div class="col-sm-3 col-12 mt-4 offset-sm-2">
                    <img src="images/agustin-beloso.jpg" alt="Agustin Nicolas Beloso" title="Agustin Nicolas Beloso" class="img-fluid img-circle">
                </div>
            </div>
        </div>
        <section id="tecnologias" class="pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="my-sm-5 text-white">Stack tecnológico</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>Javascript</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="images/javascript.jpg">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>PHP</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="images/php.jpg">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>HTML5</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="images/html.jpg">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>React.js</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="images/react.jpg">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>jQuery</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="images/jquery.jpg">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>Bootstrap</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="images/bootstrap.jpg">
                        </div>
                    </div>
                </div>
                <div class="row mt-sm-4 mt-0">
                    <div class="col-sm-2 col-6">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>Laravel</h3>
                            <img class="img-fluid d-block mx-auto" width="90" src="images/laravel.jpg">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>MySQL</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="images/mysql.jpg">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>CSS</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="images/css.jpg">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>Git</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="images/git.jpg">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>Apache</h3>
                            <img class="img-fluid d-block mx-auto" width="120" src="images/apache.jpg">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>Mercadopago</h3>
                            <img class="img-fluid d-block mx-auto" width="57" src="images/mercadopago.jpg">
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section id="experiencia" class="container">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2><i class="fas fa-briefcase"></i> Experiencia laboral</h2>
                </div>
            </div>
            <div class="row shadow bg-white rounded">

                <div class="col-12">
                    <div class="row">
                        <div class="col-2 p-5 my-auto d-none d-sm-block">
                            <img src="images/golosinasdelsur.jpg" class="img-fluid baw" title="golosinas del sur s.r.l">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Encargo de ventas</h3>
                            <h4>GOLOSINAS DEL SUR S.R.L</h4>
                            <h5>2022 - presente</h5>
                            <p>Lidero la venta a empresas como asi tambien para el consumidor final.
                                Buscamos la forma de generar una mayor venta de nuestros productos para el consumo del
                                personal minoritas como asi tambien para las grandes cadenas de autoservicios y
                                mayoristas
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 p-5 my-auto d-none d-sm-block">
                            <img src="images/buloneradelsur.jpg" class="img-fluid baw" title="Bulonera industrial">
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>Encargado de deposito</h3>
                            <h4>BULONERA DEL SUR</h4>
                            <h5>ago 2017 - ene 2020</h5>
                            <p>Coordinador de compras y entrega de mercaderia, manejo de grandes lineas de stock.
                                Venta al publico.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 p-5 my-auto d-none d-sm-block">
                            <img src="images/transporte.jpg" class="img-fluid baw" title="Transporte Beloso">
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>TRANSPORTE BELOSO S.R.L</h3>
                            <h4>TRANSPORTE</h4>
                            <h5>mar-2010 jun-2017</h5>
                            <p>Transporte de personal empresarial y ejecutiva</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="formacion" class="container">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2><i class="fas fa-graduation-cap"></i> Formación acádémica</h2>
                </div>
            </div>
            <div class="row shadow bg-white rounded p-1">
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 mt-4 my-auto d-none d-sm-block">
                            <img src="images/cedeba.jpg" class="img-fluid baw" title="cedeba">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Despachante de Aeronaves</h3>
                            <h4>Centro de estudios Buenos Aires</h4>
                            <h5>2019 – 2022</h5>
                            <p>https://cedeba.com.ar//</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/utn.jpg" class="img-fluid baw" title="Univesidad tecnologica Nacional">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Tecnico Aeronautico</h3>
                            <h4>Universidad Tecnologica Nacional</h4>
                            <h5>2010 – 2015</h5>
                            <p>https://www.frba.utn.edu.ar/</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section id="idiomas">
            <div class="container">
                <div class="row py-5 mx-0">
                    <div class="col-sm-6 col-12 pb-3 pb-sm-0">
                        <div class="row mr-sm-1 bg-white card-idioma shadow me-sm-1">
                            <div class="col-4 text-center card">
                                <i class="fas fa-comment-alt"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h2>IDIOMAS</h2>
                                <ul>
                                    <li>ESPAÑOL - Nativo</li>
                                    <li>INGLÉS - Intermediate B1</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="row ml-sm-2 bg-white card-idioma shadow ms-sm-1">
                            <div class="col-4 text-center card">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h2>HOBBIES</h2>
                                <ul>
                                    <li>Futbol</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>
    </main>
    </main>
    <footer class="container mt-5 pb-3">
        <div class="whatsapp">
            <a href="https://api.whatsapp.com/send?phone=541156339751" title="whatsapp" i class="fab fa-whatsapp"></i></a>
        </div>
        <div class="row">
            <div class="col-3 rounded">
                <a href="https://github.com" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com/in/agustin-nicolas-beloso8320901ab//" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
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