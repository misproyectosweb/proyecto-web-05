<!DOCTYPE html>

<!-- Menú de postres que ofrece el restaurante -->

<html lang="es">
    <head>
        <title>Postres</title>
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
        <link rel="stylesheet" type="text/css" href="css/paginaPostres.css">

        <!-- Otros enlaces a archivos y librerías -->
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
                                    <a class="nav-link text-white m-3" href="paginaPastas.php">Pastas</a>
                                </li>
                                <li class="nav-item mx-5 rounded-pill" id="item_4" onmouseover="ResaltarOpcion('item_4', 'green');" onmouseout="noResaltarOpcion('item_4', 'transparent');">
                                    <a class="nav-link text-white m-3" href="paginaHamburguesas.php">Hamburguesas</a>
                                </li>
                                <li class="nav-item mx-5 rounded-pill" id="item_5" onmouseover="ResaltarOpcion('item_5', 'green');" onmouseout="noResaltarOpcion('item_5', 'transparent');">
                                    <a class="nav-link text-white m-3" href="paginaBebidas.php">Bebidas</a>
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
        <!-- Menú de postres -->
        <main>
            <div class="menuPostres colorFondo pb-3" id="menuPostres">
                <h1 class="font-weight-bold text-white text-center text-uppercase py-5 mb-0 ">Menú de postres</h1>
                <p class="text-white text-center pb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, cras tempor molestie mauris, ut pretium lectus ornare id</p>
                
                <div class="container ml-2">
                    <div class="row border border-white rounded-pill align-items-center mb-4">
                        <div class="col-2">
                            <img src="imgPostres/postre_1.png" class="img-fluid w-75 mx-auto d-block" alt="imagen pastel de chocolate"/>
                        </div>
                        <div class="col-8 text-white pt-3">
                            <h6 class="font-weight-bold text-uppercase">Lorem ipsum dolor sit amet</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tempor molestie mauris, ut pretium lectus ornare id. Vestibulum condimentum, ligula et lacinia pulvinar, urna tellus viverra justo, a auctor purus metus et orci. Aenean porta, lacus rhoncus tincidunt egestas, lectus lorem varius est, et rhoncus sapien ante sed massa.
                        </div>
                        <div class="col-2 text-white text-center">
                            <p class="">¢&nbsp;&nbsp;XX,XXX.XX</p>
                        </div>
                    </div>
                </div>

                <div class="container mr-2">
                    <div class="row border border-white rounded-pill align-items-center mb-4">
                        <div class="col-2">
                            <img src="imgPostres/postre_2.png" class="img-fluid w-75 mx-auto d-block" alt="imagen waffles"/>
                        </div>
                        <div class="col-8 text-white pt-3">
                            <h6 class="font-weight-bold text-uppercase">Lorem ipsum dolor sit amet</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tempor molestie mauris, ut pretium lectus ornare id. Vestibulum condimentum, ligula et lacinia pulvinar, urna tellus viverra justo, a auctor purus metus et orci. Aenean porta, lacus rhoncus tincidunt egestas, lectus lorem varius est, et rhoncus sapien ante sed massa.
                        </div>
                        <div class="col-2 text-white text-center">
                            <p class="">¢&nbsp;&nbsp;XX,XXX.XX</p>
                        </div>
                    </div>
                </div>

                <div class="container ml-2">
                    <div class="row border border-white rounded-pill align-items-center mb-4">
                        <div class="col-2">
                            <img src="imgPostres/postre_3.png" class="img-fluid w-75 mx-auto d-block" alt="imagen flan de caramelo"/>
                        </div>
                        <div class="col-8 text-white pt-3">
                            <h6 class="font-weight-bold text-uppercase">Lorem ipsum dolor sit amet</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tempor molestie mauris, ut pretium lectus ornare id. Vestibulum condimentum, ligula et lacinia pulvinar, urna tellus viverra justo, a auctor purus metus et orci. Aenean porta, lacus rhoncus tincidunt egestas, lectus lorem varius est, et rhoncus sapien ante sed massa.
                        </div>
                        <div class="col-2 text-white text-center">
                            <p class="">¢&nbsp;&nbsp;XX,XXX.XX</p>
                        </div>
                    </div>
                </div>

                <div class="container mr-2">
                    <div class="row border border-white rounded-pill align-items-center mb-4">
                        <div class="col-2">
                            <img src="imgPostres/postre_4.png" class="img-fluid w-75 mx-auto d-block" alt="imagen copa de helados con frutas"/>
                        </div>
                        <div class="col-8 text-white pt-3">
                            <h6 class="font-weight-bold text-uppercase">Lorem ipsum dolor sit amet</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tempor molestie mauris, ut pretium lectus ornare id. Vestibulum condimentum, ligula et lacinia pulvinar, urna tellus viverra justo, a auctor purus metus et orci. Aenean porta, lacus rhoncus tincidunt egestas, lectus lorem varius est, et rhoncus sapien ante sed massa.
                        </div>
                        <div class="col-2 text-white text-center">
                            <p class="">¢&nbsp;&nbsp;XX,XXX.XX</p>
                        </div>
                    </div>
                </div>

                <div class="container ml-2">
                    <div class="row border border-white rounded-pill align-items-center mb-4">
                        <div class="col-2">
                            <img src="imgPostres/postre_5.png" class="img-fluid w-75 mx-auto d-block" alt="imagen flan de caramelo"/>
                        </div>
                        <div class="col-8 text-white pt-3">
                            <h6 class="font-weight-bold text-uppercase">Lorem ipsum dolor sit amet</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tempor molestie mauris, ut pretium lectus ornare id. Vestibulum condimentum, ligula et lacinia pulvinar, urna tellus viverra justo, a auctor purus metus et orci. Aenean porta, lacus rhoncus tincidunt egestas, lectus lorem varius est, et rhoncus sapien ante sed massa.
                        </div>
                        <div class="col-2 text-white text-center">
                            <p class="">¢&nbsp;&nbsp;XX,XXX.XX</p>
                        </div>
                    </div>
                </div>

                <div class="container mr-2">
                    <div class="row border border-white rounded-pill align-items-center mb-4">
                        <div class="col-2">
                            <img src="imgPostres/postre_6.png" class="img-fluid w-75 mx-auto d-block" alt="imagen copa de helados con frutas"/>
                        </div>
                        <div class="col-8 text-white pt-3">
                            <h6 class="font-weight-bold text-uppercase">Lorem ipsum dolor sit amet</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tempor molestie mauris, ut pretium lectus ornare id. Vestibulum condimentum, ligula et lacinia pulvinar, urna tellus viverra justo, a auctor purus metus et orci. Aenean porta, lacus rhoncus tincidunt egestas, lectus lorem varius est, et rhoncus sapien ante sed massa.
                        </div>
                        <div class="col-2 text-white text-center">
                            <p class="">¢&nbsp;&nbsp;XX,XXX.XX</p>
                        </div>
                    </div>
                </div>                
                
                <div class="container ml-2">
                    <div class="row border border-white rounded-pill align-items-center mb-4">
                        <div class="col-2">
                            <img src="imgPostres/postre_7.png" class="img-fluid w-75 mx-auto d-block" alt="imagen frapuccino"/>
                        </div>
                        <div class="col-8 text-white pt-3">
                            <h6 class="font-weight-bold text-uppercase">Lorem ipsum dolor sit amet</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tempor molestie mauris, ut pretium lectus ornare id. Vestibulum condimentum, ligula et lacinia pulvinar, urna tellus viverra justo, a auctor purus metus et orci. Aenean porta, lacus rhoncus tincidunt egestas, lectus lorem varius est, et rhoncus sapien ante sed massa.
                        </div>
                        <div class="col-2 text-white text-center">
                            <p class="">¢&nbsp;&nbsp;XX,XXX.XX</p>
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
