<!DOCTYPE html>

<!-- Menú de postres que ofrece el restaurante -->

<html lang="es">
    <head>
        <title>Postres</title>
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
        <link rel="stylesheet" type="text/css" href="css/paginaPostres.css">
    </head>
    <body>
        
        <!-- Logo y menú principal -->
        <header class="sticky-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 navbar navbar-expand-lg navbar-light p-4">
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                            <a class="navbar-brand" href="index.php">
                                <img src="imgInicio/logoPizza_2.png" class="imgLogo img-fluid" alt="Logo de la empresa"/>
                            </a>
                        </div>

                        <button class="btnMenu navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span><i class="btn bi bi-list text-white"></i></span>
                        </button>

                        <nav class="menu collapse navbar-collapse px-0" id="navbarNav">
                            <ul class="nav">
                                <li class="nav-item rounded-pill" id="item_1" onmouseover="ResaltarOpcion('item_1', 'green');" onmouseout="noResaltarOpcion('item_1', 'transparent');">
                                    <a class="nav-link text-white" href="paginaAperitivos.php"><i class="fa-solid fa-bowl-rice mr-2"></i>Aperitivos</a>
                                </li>
                                <li class="nav-item rounded-pill" id="item_2" onmouseover="ResaltarOpcion('item_2', 'green');" onmouseout="noResaltarOpcion('item_2', 'transparent');">
                                    <a class="nav-link text-white" href="paginaPizzas.php"><i class="fa-solid fa-pizza-slice mr-2"></i>Pizzas</a>
                                </li>
                                <li class="nav-item rounded-pill" id="item_3" onmouseover="ResaltarOpcion('item_3', 'green');" onmouseout="noResaltarOpcion('item_3', 'transparent');">
                                    <a class="nav-link text-white" href="paginaPastas.php"><i class="fa-solid fa-bowl-rice mr-2"></i>Pastas</a>
                                </li>
                                <li class="nav-item rounded-pill" id="item_4" onmouseover="ResaltarOpcion('item_4', 'green');" onmouseout="noResaltarOpcion('item_4', 'transparent');">
                                    <a class="nav-link text-white" href="paginaHamburguesas.php"><i class="fa-solid fa-burger mr-2"></i>Hamburguesas</a>
                                </li>
                                <li class="nav-item rounded-pill" id="item_5" onmouseover="ResaltarOpcion('item_5', 'green');" onmouseout="noResaltarOpcion('item_5', 'transparent');">
                                    <a class="nav-link text-white" href="paginaBebidas.php"><i class="fa-solid fa-martini-glass-citrus mr-2"></i>Bebidas</a>
                                </li>                                
                                <li class="nav-item rounded-pill" id="item_6" onmouseover="ResaltarOpcion('item_6', 'green');" onmouseout="noResaltarOpcion('item_6', 'transparent');">
                                    <a class="nav-link text-white" href="index.php"><i class="fa-solid fa-door-open mr-2"></i>Salir</a>
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
            <div id="menuPostres" class="menuPostres colorFondo">
                <div class="container-fluid">                                                        
                    <div class="row justify-content-center">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
                            <h1 class="mb-0 pt-4 display-4 text-white text-uppercase font-weight-bold">menú de postres</h1>                            
                            <p class="mb-0 pt-3 pb-5 text-white">Consectetur adipiscing elit. Morbi luctus malesuada faucibus. Cras feugiat aliquet quam, sitamet<br>metus pellentesque vitae. Ut auctor sapien sed urna rhoncus, vel semper tortor pharetra</p>
                        </div>                            
                    </div>
                    
                    <div class="row justify-content-start">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-9 d-flex flex-row justify-content-start align-items-center text-white border-dark-50 border-bottom p-3">
                            <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                <img src="imgPostres/postre_1.png" class="img-fluid w-100 mx-auto d-block" alt="imagen pastel de chocolate"/>
                            </div>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-5 col-xl-4 pt-3">
                                <h6 class="font-weight-bold text-uppercase">Lorem ipsum dolor sit amet</h6>                                
                                <p class="mb-0 text-justify">Cras tempor molestie mauris, ut pretium lectus ornare id. Vestibulum condimentum, ligula et lacinia pulvinar, urna tellus viverra justo.</p>
                            </div>
                            <div class="col-3 col-sm-3 col-md-3 col-lg-2 col-xl-2 text-white text-center">
                                <p class="precio mb-0"><i class="fa-solid fa-cedi-sign mr-2"></i>00,000</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row justify-content-end">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-9 d-flex flex-row justify-content-end align-items-center text-white border-dark-50 border-bottom p-3">
                            <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                <img src="imgPostres/postre_2.png" class="img-fluid w-100 mx-auto d-block" alt="imagen waffles"/>
                            </div>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-5 col-xl-4 pt-3">
                                <h6 class="font-weight-bold text-uppercase">Lorem ipsum dolor sit amet</h6>                                
                                <p class="mb-0 text-justify">Cras tempor molestie mauris, ut pretium lectus ornare id. Vestibulum condimentum, ligula et lacinia pulvinar, urna tellus viverra justo.</p>
                            </div>
                            <div class="col-3 col-sm-3 col-md-3 col-lg-2 col-xl-2 text-white text-center">
                                <p class="precio mb-0"><i class="fa-solid fa-cedi-sign mr-2"></i>00,000</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row justify-content-start">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-9 d-flex flex-row justify-content-start align-items-center text-white border-dark-50 border-bottom p-3">
                            <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                <img src="imgPostres/postre_3.png" class="img-fluid w-100 mx-auto d-block" alt="imagen flan de caramelo"/>
                            </div>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-5 col-xl-4 pt-3">
                                <h6 class="font-weight-bold text-uppercase">Lorem ipsum dolor sit amet</h6>                                
                                <p class="mb-0 text-justify">Cras tempor molestie mauris, ut pretium lectus ornare id. Vestibulum condimentum, ligula et lacinia pulvinar, urna tellus viverra justo.</p>
                            </div>
                            <div class="col-3 col-sm-3 col-md-3 col-lg-2 col-xl-2 text-white text-center">
                                <p class="precio mb-0"><i class="fa-solid fa-cedi-sign mr-2"></i>00,000</p>
                            </div>
                        </div>
                    </div>
                   
                    <div class="row justify-content-end">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-9 d-flex flex-row justify-content-end align-items-center text-white border-dark-50 border-bottom p-3">
                            <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                <img src="imgPostres/postre_4.png" class="img-fluid w-100 mx-auto d-block" alt="imagen copa de helados con frutas"/>
                            </div>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-5 col-xl-4 pt-3">
                                <h6 class="font-weight-bold text-uppercase">Lorem ipsum dolor sit amet</h6>                                
                                <p class="mb-0 text-justify">Cras tempor molestie mauris, ut pretium lectus ornare id. Vestibulum condimentum, ligula et lacinia pulvinar, urna tellus viverra justo.</p>
                            </div>
                            <div class="col-3 col-sm-3 col-md-3 col-lg-2 col-xl-2 text-white text-center">
                                <p class="precio mb-0"><i class="fa-solid fa-cedi-sign mr-2"></i>00,000</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row justify-content-start">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-9 d-flex flex-row justify-content-start align-items-center text-white border-dark-50 border-bottom p-3">
                            <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                <img src="imgPostres/postre_5.png" class="img-fluid w-100 mx-auto d-block" alt="imagen copa de helados"/>
                            </div>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-5 col-xl-4 pt-3">
                                <h6 class="font-weight-bold text-uppercase">Lorem ipsum dolor sit amet</h6>                                
                                <p class="mb-0 text-justify">Cras tempor molestie mauris, ut pretium lectus ornare id. Vestibulum condimentum, ligula et lacinia pulvinar, urna tellus viverra justo.</p>
                            </div>
                            <div class="col-3 col-sm-3 col-md-3 col-lg-2 col-xl-2 text-white text-center">
                                <p class="precio mb-0"><i class="fa-solid fa-cedi-sign mr-2"></i>00,000</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row justify-content-end">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-9 d-flex flex-row justify-content-end align-items-center text-white border-dark-50 border-bottom p-3">
                            <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                <img src="imgPostres/postre_6.png" class="img-fluid w-100 mx-auto d-block" alt="imagen porción de tres leches"/>
                            </div>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-5 col-xl-4 pt-3">
                                <h6 class="font-weight-bold text-uppercase">Lorem ipsum dolor sit amet</h6>                                
                                <p class="mb-0 text-justify">Cras tempor molestie mauris, ut pretium lectus ornare id. Vestibulum condimentum, ligula et lacinia pulvinar, urna tellus viverra justo.</p>
                            </div>
                            <div class="col-3 col-sm-3 col-md-3 col-lg-2 col-xl-2 text-white text-center">
                                <p class="precio mb-0"><i class="fa-solid fa-cedi-sign mr-2"></i>00,000</p>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-start">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-9 d-flex flex-row justify-content-start align-items-center text-white p-3">
                            <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                <img src="imgPostres/postre_7.png" class="img-fluid w-100 mx-auto d-block" alt="imagen frappé oreo"/>
                            </div>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-5 col-xl-4 pt-3">
                                <h6 class="font-weight-bold text-uppercase">Lorem ipsum dolor sit amet</h6>                                
                                <p class="mb-0 text-justify">Cras tempor molestie mauris, ut pretium lectus ornare id. Vestibulum condimentum, ligula et lacinia pulvinar, urna tellus viverra justo.</p>
                            </div>
                            <div class="col-3 col-sm-3 col-md-3 col-lg-2 col-xl-2 text-white text-center">
                                <p class="precio mb-0"><i class="fa-solid fa-cedi-sign mr-2"></i>00,000</p>
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