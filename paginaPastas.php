<!DOCTYPE html>

<!-- Menú de pastas que ofrece el restaurante -->

<html lang="es">
    <head>
        <title>Pastas</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        
        <!-- Utilizando google fonts -->        
        <link href="https://fonts.googleapis.com/css2?family=Source+Serif+4&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

        <!-- Iconos -->
        <link rel="shortcut icon" type="image/x-icon" href="imgInicio/logoPizza_1.png"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

        <!-- Archivos css -->
        <link rel="stylesheet" type="text/css" href="css/paginaPastas.css">       
    </head>
    <body>
        
        <!-- Inicio sección del encabezado del sitio web -->
        <!-- Logo y menú principal -->
        <header class="sticky-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 navbar navbar-expand-lg navbar-light p-3">
                        <div class="col-4 col-sm-4 col-md-4 col-lg-3 col-xl-3">
                            <a class="navbar-brand" href="index.php">
                                <img src="imgInicio/logoPizza_2.png" class="imgLogo img-fluid w-100" alt="Logo de la empresa"/>
                            </a>
                        </div>

                        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span><i class="btn bi bi-list text-white"></i></span>
                        </button>

                        <nav class="collapse navbar-collapse px-0" id="navbarNav">
                            <ul class="nav">
                                <li class="nav-item mx-4 px-4 rounded-pill" id="item_1" onmouseover="ResaltarOpcion('item_1', 'green');" onmouseout="noResaltarOpcion('item_1', 'transparent');">
                                    <a class="nav-link text-white" href="paginaAperitivos.php">Aperitivos</a>
                                </li>
                                <li class="nav-item mx-4 px-4 rounded-pill" id="item_2" onmouseover="ResaltarOpcion('item_2', 'green');" onmouseout="noResaltarOpcion('item_2', 'transparent');">
                                    <a class="nav-link text-white" href="paginaPizzas.php">Pizzas</a>
                                </li>
                                <li class="nav-item mx-4 px-4 rounded-pill" id="item_3" onmouseover="ResaltarOpcion('item_3', 'green');" onmouseout="noResaltarOpcion('item_3', 'transparent');">
                                    <a class="nav-link text-white" href="paginaHamburguesas.php">Hamburguesas</a>
                                </li>
                                <li class="nav-item mx-4 px-4 rounded-pill" id="item_4" onmouseover="ResaltarOpcion('item_4', 'green');" onmouseout="noResaltarOpcion('item_4', 'transparent');">
                                    <a class="nav-link text-white" href="paginaBebidas.php">Bebidas</a>
                                </li>
                                <li class="nav-item mx-4 px-4 rounded-pill" id="item_5" onmouseover="ResaltarOpcion('item_5', 'green');" onmouseout="noResaltarOpcion('item_5', 'transparent');">
                                    <a class="nav-link text-white" href="paginaPostres.php">Postres</a>
                                </li>                                
                                <li class="nav-item mx-4 px-4 rounded-pill" id="item_6" onmouseover="ResaltarOpcion('item_6', 'green');" onmouseout="noResaltarOpcion('item_6', 'transparent');">
                                    <a class="nav-link text-white" href="index.php">Salir</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- Fin encabezado de la página  -->

        <!-- Inicio sección principal de la página -->        
        <main>
            <div id="menuPastas" class="menuPastas colorFondo">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
                            <h1 class="mb-0 pt-3 display-4 text-white text-uppercase font-weight-bold">menú de pastas</h1>                            
                            <p class="mb-0 pt-3 pb-5 text-white">Consectetur adipiscing elit. Morbi luctus malesuada faucibus. Cras feugiat aliquet quam, sitamet<br>metus pellentesque vitae. Ut auctor sapien sed urna rhoncus, vel semper tortor pharetra</p>
                        </div>                            
                    </div>
                
                    <div class="row justify-content-around pb-4">   
                        <div class="col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5 border border-dark-50 rounded-lg" style="background-color: rgba(255, 255, 255, 0.5);">
                            <h3 class="text-center mx-auto text-dark mb-0 mt-4 py-2 border border border-warning rounded-pill bg-warning">Pastas</h3>
                            <img src="imgPastas/imgPasta_2.jpg" class="img-fluid mx-auto d-block my-5 img-thumbnail bg-danger border border-danger" alt="imagen de pasta">
                            <div class="d-flex flex-row justify-content-around text-white text-body font-weight-bold">
                                <p class="mb-1">Lorem ipsum dolor sit amet</p>
                                <p class="mb-1"><i class="fa-solid fa-cedi-sign mr-2"></i>00,000.00</p>
                            </div>
                            <div class="d-flex flex-row justify-content-around text-white text-body font-weight-bold">
                                <p class="mb-1">Lorem ipsum dolor sit amet</p>
                                <p class="mb-1"><i class="fa-solid fa-cedi-sign mr-2"></i>00,000.00</p>
                            </div>
                            <div class="d-flex flex-row justify-content-around text-white text-body font-weight-bold">
                                <p class="mb-1">Lorem ipsum dolor sit amet</p>
                                <p class="mb-1"><i class="fa-solid fa-cedi-sign mr-2"></i>00,000.00</p>
                            </div>
                            <div class="d-flex flex-row justify-content-around text-white text-body font-weight-bold">
                                <p class="mb-1">Lorem ipsum dolor sit amet</p>
                                <p class="mb-1"><i class="fa-solid fa-cedi-sign mr-2"></i>00,000.00</p>
                            </div>
                            <div class="d-flex flex-row justify-content-around text-white text-body font-weight-bold pb-3">
                                <p class="mb-1">Lorem ipsum dolor sit amet</p>
                                <p class="mb-1"><i class="fa-solid fa-cedi-sign mr-2"></i>00,000.00</p>
                            </div>                            
                        </div>
                                                
                        <div class="col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5 border border-dark-50 rounded-lg" style="background-color: rgba(255, 255, 255, 0.5);">
                            <h3 class="text-center mx-auto text-dark mb-0 mt-4 py-2 border border border-warning rounded-pill bg-warning">Canelones</h3>
                            <img src="imgPastas/imgCanelones_2.jpg" class="img-fluid mx-auto d-block my-5 img-thumbnail bg-danger border border-danger" alt="imagen de canelones">
                            <div class="d-flex flex-row justify-content-around text-white text-body font-weight-bold">
                                <p class="mb-1">Lorem ipsum dolor sit amet</p>
                                <p class="mb-1"><i class="fa-solid fa-cedi-sign mr-2"></i>00,000.00</p>
                            </div>
                            <div class="d-flex flex-row justify-content-around text-white text-body font-weight-bold">
                                <p class="mb-1">Lorem ipsum dolor sit amet</p>
                                <p class="mb-1"><i class="fa-solid fa-cedi-sign mr-2"></i>00,000.00</p>
                            </div>
                            <div class="d-flex flex-row justify-content-around text-white text-body font-weight-bold">
                                <p class="mb-1">Lorem ipsum dolor sit amet</p>
                                <p class="mb-1"><i class="fa-solid fa-cedi-sign mr-2"></i>00,000.00</p>
                            </div>
                            <div class="d-flex flex-row justify-content-around text-white text-body font-weight-bold">
                                <p class="mb-1">Lorem ipsum dolor sit amet</p>
                                <p class="mb-1"><i class="fa-solid fa-cedi-sign mr-2"></i>00,000.00</p>
                            </div>
                            <div class="d-flex flex-row justify-content-around text-white text-body font-weight-bold pb-3">
                                <p class="mb-1">Lorem ipsum dolor sit amet</p>
                                <p class="mb-1"><i class="fa-solid fa-cedi-sign mr-2"></i>00,000.00</p>
                            </div> 
                        </div>                                                                                                
                    </div>
                    
                    <div class="row justify-content-around pb-4">   
                        <div class="col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5 border border-dark-50 rounded-lg" style="background-color: rgba(255, 255, 255, 0.5);">
                            <h3 class="text-center mx-auto text-dark mb-0 mt-4 py-2 border border border-warning rounded-pill bg-warning">Lasagna</h3>
                            <img src="imgPastas/imgLasagna_2.jpg" class="img-fluid mx-auto d-block my-5 img-thumbnail bg-danger border border-danger" alt="imagen de pasta">
                            <div class="d-flex flex-row justify-content-around text-white text-body font-weight-bold">
                                <p class="mb-1">Lorem ipsum dolor sit amet</p>
                                <p class="mb-1"><i class="fa-solid fa-cedi-sign mr-2"></i>00,000.00</p>
                            </div>
                            <div class="d-flex flex-row justify-content-around text-white text-body font-weight-bold">
                                <p class="mb-1">Lorem ipsum dolor sit amet</p>
                                <p class="mb-1"><i class="fa-solid fa-cedi-sign mr-2"></i>00,000.00</p>
                            </div>
                            <div class="d-flex flex-row justify-content-around text-white text-body font-weight-bold">
                                <p class="mb-1">Lorem ipsum dolor sit amet</p>
                                <p class="mb-1"><i class="fa-solid fa-cedi-sign mr-2"></i>00,000.00</p>
                            </div>
                            <div class="d-flex flex-row justify-content-around text-white text-body font-weight-bold">
                                <p class="mb-1">Lorem ipsum dolor sit amet</p>
                                <p class="mb-1"><i class="fa-solid fa-cedi-sign mr-2"></i>00,000.00</p>
                            </div>
                            <div class="d-flex flex-row justify-content-around text-white text-body font-weight-bold pb-3">
                                <p class="mb-1">Lorem ipsum dolor sit amet</p>
                                <p class="mb-1"><i class="fa-solid fa-cedi-sign mr-2"></i>00,000.00</p>
                            </div>                            
                        </div>
                                                
                        <div class="col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5 border border-dark-50 rounded-lg" style="background-color: rgba(255, 255, 255, 0.5);">
                            <h3 class="text-center mx-auto text-dark mb-0 mt-4 py-2 border border border-warning rounded-pill bg-warning">...y además...</h3>
                            <img src="imgPastas/imgTornillos_2.jpg" class="img-fluid mx-auto d-block my-5 img-thumbnail bg-danger border border-danger" alt="imagen de canelones">
                            <div class="d-flex flex-row justify-content-around text-white text-body font-weight-bold">
                                <p class="mb-1">Lorem ipsum dolor sit amet</p>
                                <p class="mb-1"><i class="fa-solid fa-cedi-sign mr-2"></i>00,000.00</p>
                            </div>
                            <div class="d-flex flex-row justify-content-around text-white text-body font-weight-bold">
                                <p class="mb-1">Lorem ipsum dolor sit amet</p>
                                <p class="mb-1"><i class="fa-solid fa-cedi-sign mr-2"></i>00,000.00</p>
                            </div>
                            <div class="d-flex flex-row justify-content-around text-white text-body font-weight-bold">
                                <p class="mb-1">Lorem ipsum dolor sit amet</p>
                                <p class="mb-1"><i class="fa-solid fa-cedi-sign mr-2"></i>00,000.00</p>
                            </div>
                            <div class="d-flex flex-row justify-content-around text-white text-body font-weight-bold">
                                <p class="mb-1">Lorem ipsum dolor sit amet</p>
                                <p class="mb-1"><i class="fa-solid fa-cedi-sign mr-2"></i>00,000.00</p>
                            </div>
                            <div class="d-flex flex-row justify-content-around text-white text-body font-weight-bold pb-3">
                                <p class="mb-1">Lorem ipsum dolor sit amet</p>
                                <p class="mb-1"><i class="fa-solid fa-cedi-sign mr-2"></i>00,000.00</p>
                            </div> 
                        </div>                                                                                                
                    </div>
                </div>
            </div>                        
        </main>            
       
        <!-- Archivos JavaScript utilizados por Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
       
        <!-- Funciones javaScript -->
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