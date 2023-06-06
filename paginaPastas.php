<!DOCTYPE html>

<!-- Menú de pastas que ofrece el restaurante -->

<html lang="es">
    <head>
        <title>Pastas</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="pizzería, Especialidades, Buzón, Aperitivos, Pizzas, Pastas, Hamburguesas, Postres, Bebidas"/>
        <meta name="description" content="Bienvenidos a la página web de la pizzería Costa Rica, donde encontrará un amplio y variado menú de platillos para que disfrute con su familia y amigos"/>
        
        <!-- Utilizando google fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Source+Serif+4&display=swap" rel="stylesheet">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

        <!-- Bootstrap icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

        <!-- Estilos css personalizados -->
        <link rel="stylesheet" type="text/css" href="css/paginaPastas.css">

        <!-- Efecto animaciones para los elementos  -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <link rel="shortcut icon" type="image/x-icon" href="imagenes/logoPizza_1.png"/>
    </head>
    <body>
        <!-- Inicio sección del encabezado de la página -->
        <!-- Logo y menú principal -->
        <header class="sticky-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 navbar navbar-expand-lg navbar-light">
                        <div class="col-2">
                            <a class="navbar-brand" href="index.php">
                                <img src="imagenes/logoPizzeria.png" class="imgLogo img-fluid" alt="Logo de la empresa"/>
                            </a>
                        </div>
                        
                        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <nav class="collapse navbar-collapse px-0" id="navbarNav">
                            <ul class="nav">
                                <li class="nav-item mx-5 rounded-pill" id="item_1" onmouseover="ResaltarOpcion('item_1', 'green');" onmouseout="noResaltarOpcion('item_1', 'transparent');">
                                    <a class="nav-link text-white m-3" href="paginaAperitivos.php">Aperitivos</a>
                                </li>
                                <li class="nav-item mx-5 rounded-pill" id="item_2" onmouseover="ResaltarOpcion('item_2', 'green');" onmouseout="noResaltarOpcion('item_2', 'transparent');">
                                    <a class="nav-link text-white m-3" href="paginaPizzas.php">Pizzas</a>
                                </li>
                                <li class="nav-item mx-5 rounded-pill" id="item_3" onmouseover="ResaltarOpcion('item_3', 'green');" onmouseout="noResaltarOpcion('item_3', 'transparent');">
                                    <a class="nav-link text-white m-3" href="paginaHamburguesas.php">Hamburguesas</a>
                                </li>
                                <li class="nav-item mx-5 rounded-pill" id="item_4" onmouseover="ResaltarOpcion('item_4', 'green');" onmouseout="noResaltarOpcion('item_4', 'transparent');">
                                    <a class="nav-link text-white m-3" href="paginaBebidas.php">Bebidas</a>
                                </li>
                                <li class="nav-item mx-5 rounded-pill" id="item_5" onmouseover="ResaltarOpcion('item_5', 'green');" onmouseout="noResaltarOpcion('item_5', 'transparent');">
                                    <a class="nav-link text-white m-3" href="paginaPostres.php">Postres</a>
                                </li>
                                <li class="nav-item mx-5 rounded-pill" id="item_6" onmouseover="ResaltarOpcion('item_6', 'green');" onmouseout="noResaltarOpcion('item_6', 'transparent');">
                                    <a class="nav-link text-white m-3" href="index.php">Salir</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- Fin sección del encabezado de la página  -->

        <!-- Inicio sección principal de la página -->
        <!-- Menú de pastas -->
        <main>
            <div class="menuPastas colorFondo pb-3" id="menuPastas">
                <h1 class="font-weight-bold text-white text-center text-uppercase py-5 mb-0 ">Menú de pastas</h1>
                <p class="text-white text-center pb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, cras tempor molestie mauris, ut pretium lectus ornare id</p>
                <div class="container-fluid">
                    <div class="row justify-content-center">                         
                        <div class="col-5 mr-4 border border-white border-bottom-0 rounded-top">
                            <h3 class="text-center text-dark mb-0 mt-4 py-2 border border border-white rounded-pill bg-warning">Pastas</h3>
                            <img src="imgPastas/imgPastas_2.jpg" class="img-fluid mx-auto d-block my-5 img-thumbnail bg-danger border border-danger" alt="imagen de pasta">
                        </div>
                        <div class="col-5 border border-white border-bottom-0 rounded-top">
                            <h3 class="text-center text-dark mb-0 mt-4 py-2 border border border-white rounded-pill bg-warning">Canelones</h3>
                            <img src="imgPastas/imgCanelones_2.jpg" class="img-fluid mx-auto d-block my-5 img-thumbnail bg-success border border-success" alt="imagen de canelones">
                        </div>                        
                    </div>
                    <div class="row justify-content-center">                                                 
                        <div class="col-5 mr-4 text-white text-center border border-white border-bottom border-top-0 rounded-bottom">                              
                            <div class="d-flex flex-row justify-content-between">
                                <p class="pl-5">Lorem ipsum dolor sit amet</p>
                                <p class="pr-5">¢&nbsp;&nbsp;XX,XXX.XX</p>
                            </div>
                            <div class="d-flex flex-row justify-content-between">
                                <p class="pl-5">Lorem ipsum dolor sit amet</p>
                                <p class="pr-5">¢&nbsp;&nbsp;XX,XXX.XX</p>
                            </div>
                            <div class="d-flex flex-row justify-content-between">
                                <p class="pl-5">Lorem ipsum dolor sit amet</p>
                                <p class="pr-5">¢&nbsp;&nbsp;XX,XXX.XX</p>
                            </div>
                            <div class="d-flex flex-row justify-content-between">
                                <p class="pl-5">Lorem ipsum dolor sit amet</p>
                                <p class="pr-5">¢&nbsp;&nbsp;XX,XXX.XX</p>
                            </div>
                            <div class="d-flex flex-row justify-content-between">
                                <p class="pl-5">Lorem ipsum dolor sit amet</p>
                                <p class="pr-5">¢&nbsp;&nbsp;XX,XXX.XX</p>
                            </div>
                            <div class="d-flex flex-row justify-content-between">
                                <p class="pl-5">Lorem ipsum dolor sit amet</p>
                                <p class="pr-5">¢&nbsp;&nbsp;XX,XXX.XX</p>
                            </div>
                        </div>

                        <div class="col-5 mr-0 text-white text-center border border-white border-bottom border-top-0 rounded-bottom">                            
                            <div class="d-flex flex-row justify-content-between">
                                <p class="pl-5">Lorem ipsum dolor sit amet</p>
                                <p class="pr-5">¢&nbsp;&nbsp;XX,XXX.XX</p>
                            </div>
                            <div class="d-flex flex-row justify-content-between">
                                <p class="pl-5">Lorem ipsum dolor sit amet</p>
                                <p class="pr-5">¢&nbsp;&nbsp;XX,XXX.XX</p>
                            </div>
                            <div class="d-flex flex-row justify-content-between">
                                <p class="pl-5">Lorem ipsum dolor sit amet</p>
                                <p class="pr-5">¢&nbsp;&nbsp;XX,XXX.XX</p>
                            </div>
                            <div class="d-flex flex-row justify-content-between">
                                <p class="pl-5">Lorem ipsum dolor sit amet</p>
                                <p class="pr-5">¢&nbsp;&nbsp;XX,XXX.XX</p>
                            </div>
                            <div class="d-flex flex-row justify-content-between">
                                <p class="pl-5">Lorem ipsum dolor sit amet</p>
                                <p class="pr-5">¢&nbsp;&nbsp;XX,XXX.XX</p>
                            </div>
                            <div class="d-flex flex-row justify-content-between">
                                <p class="pl-5">Lorem ipsum dolor sit amet</p>
                                <p class="pr-5">¢&nbsp;&nbsp;XX,XXX.XX</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid my-5">
                    <div class="row justify-content-center">                         
                        <div class="col-5 mr-4 border border-white border-bottom-0 rounded-top">
                            <h3 class="text-center text-dark mb-0 mt-4 py-2 border border border-white rounded-pill bg-warning">Lasagnas</h3>
                            <img src="imgPastas/imgLasagna_2.jpg" class="img-fluid mx-auto d-block my-5 img-thumbnail bg-danger border border-danger" alt="imagen de pasta">
                        </div>
                        <div class="col-5 border border-white border-bottom-0 rounded-top">
                            <h3 class="text-center text-dark mb-0 mt-4 py-2 border border border-white rounded-pill bg-warning">...o si lo prefiere disfrute de...</h3>
                            <img src="imgPastas/imgTornillos_2.jpg" class="img-fluid mx-auto d-block my-5 img-thumbnail bg-success border border-success" alt="imagen de canelones">
                        </div>
                    </div>
                    <div class="row justify-content-center">                         
                        <div class="col-5 mr-4 text-white text-center border border-white border-bottom border-top-0 rounded-bottom">                            
                            <div class="d-flex flex-row justify-content-between">
                                <p class="pl-5">Lorem ipsum dolor sit amet</p>
                                <p class="pr-5">¢&nbsp;&nbsp;XX,XXX.XX</p>
                            </div>
                            <div class="d-flex flex-row justify-content-between">
                                <p class="pl-5">Lorem ipsum dolor sit amet</p>
                                <p class="pr-5">¢&nbsp;&nbsp;XX,XXX.XX</p>
                            </div>
                            <div class="d-flex flex-row justify-content-between">
                                <p class="pl-5">Lorem ipsum dolor sit amet</p>
                                <p class="pr-5">¢&nbsp;&nbsp;XX,XXX.XX</p>
                            </div>
                            <div class="d-flex flex-row justify-content-between">
                                <p class="pl-5">Lorem ipsum dolor sit amet</p>
                                <p class="pr-5">¢&nbsp;&nbsp;XX,XXX.XX</p>
                            </div>
                            <div class="d-flex flex-row justify-content-between">
                                <p class="pl-5">Lorem ipsum dolor sit amet</p>
                                <p class="pr-5">¢&nbsp;&nbsp;XX,XXX.XX</p>
                            </div>
                            <div class="d-flex flex-row justify-content-between">
                                <p class="pl-5">Lorem ipsum dolor sit amet</p>
                                <p class="pr-5">¢&nbsp;&nbsp;XX,XXX.XX</p>
                            </div>
                        </div>
                        
                        <div class="col-5 mr-0 text-white text-center border border-white border-bottom border-top-0 rounded-bottom">                            
                            <div class="d-flex flex-row justify-content-between">
                                <p class="pl-5">Lorem ipsum dolor sit amet</p>
                                <p class="pr-5">¢&nbsp;&nbsp;XX,XXX.XX</p>
                            </div>
                            <div class="d-flex flex-row justify-content-between">
                                <p class="pl-5">Lorem ipsum dolor sit amet</p>
                                <p class="pr-5">¢&nbsp;&nbsp;XX,XXX.XX</p>
                            </div>
                            <div class="d-flex flex-row justify-content-between">
                                <p class="pl-5">Lorem ipsum dolor sit amet</p>
                                <p class="pr-5">¢&nbsp;&nbsp;XX,XXX.XX</p>
                            </div>
                            <div class="d-flex flex-row justify-content-between">
                                <p class="pl-5">Lorem ipsum dolor sit amet</p>
                                <p class="pr-5">¢&nbsp;&nbsp;XX,XXX.XX</p>
                            </div>
                            <div class="d-flex flex-row justify-content-between">
                                <p class="pl-5">Lorem ipsum dolor sit amet</p>
                                <p class="pr-5">¢&nbsp;&nbsp;XX,XXX.XX</p>
                            </div>
                            <div class="d-flex flex-row justify-content-between">
                                <p class="pl-5">Lorem ipsum dolor sit amet</p>
                                <p class="pr-5">¢&nbsp;&nbsp;XX,XXX.XX</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- Archivos JavaScript utilizados por Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

        <!-- Enlace y método JavaScript para utilizar las animaciones -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>

        <!-- JavaScript -->
        <script>            
            function ResaltarOpcion(id, color) {
                document.getElementById(id).style.background = color;
            }

            function noResaltarOpcion(id, color) {
                document.getElementById(id).style.background = color;
            }
        </script> 
                
        <?php
        // put your code here
        ?>
    </body>
</html>
