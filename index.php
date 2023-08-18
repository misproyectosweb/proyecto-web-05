<!DOCTYPE html>

<!-- Página principal del restaurante -->

<html lang="es">
    <head>
        <title>Inicio</title>
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

        <!-- Archivos css -->
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link rel="stylesheet" href="librerias/sweetalert2.min.css">

        <!-- Otros enlaces a archivos y librerías -->
        <link rel="shortcut icon" type="image/x-icon" href="imagenes/logoPizza_1.png"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    </head>
    <body>
        <?php
            if(isset($_POST['nombre'])) {
                $nombre = filter_input(INPUT_POST, 'nombre');
                $telcasa = filter_input(INPUT_POST, 'telcasa');
                $telcelular = filter_input(INPUT_POST, 'telcelular');
                $correo = filter_input(INPUT_POST, 'correo');
                $direccion = filter_input(INPUT_POST, 'direccion');
                $mensaje = filter_input(INPUT_POST, 'mensaje');
            }
        ?>
        <!-- Inicio sección del encabezado del sitio web -->
        <!-- Logo y menú principal -->
        <header class="sticky-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 navbar navbar-expand-lg navbar-light">
                        <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-2">
                            <a class="navbar-brand" href="#">
                                <img src="imagenes/logoPizzeria.png" class="img-fluid" alt="Logo de la empresa"/>
                            </a>
                        </div>

                        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <nav class="collapse navbar-collapse px-0" id="navbarNav">
                            <ul class="nav">
                                <li class="nav-item mx-5 rounded-pill" id="item_1" onmouseover="ResaltarOpcion('item_1', 'green');" onmouseout="noResaltarOpcion('item_1', 'transparent');">
                                    <a class="nav-link text-white m-3" href="#">Inicio</a>
                                </li>
                                <li class="nav-item mx-5 rounded-pill" id="item_2" onmouseover="ResaltarOpcion('item_2', 'green');" onmouseout="noResaltarOpcion('item_2', 'transparent');">
                                    <a class="nav-link text-white m-3" href="#especialidades">Especialidades</a>
                                </li>
                                <li class="nav-item mx-5 rounded-pill" id="item_3" onmouseover="ResaltarOpcion('item_3', 'green');" onmouseout="noResaltarOpcion('item_3', 'transparent');">
                                    <a class="nav-link text-white m-3" href="#historia">Historia</a>
                                </li>
                                <li class="nav-item mx-5 rounded-pill" id="item_4" onmouseover="ResaltarOpcion('item_4', 'green');" onmouseout="noResaltarOpcion('item_4', 'transparent');">
                                    <a class="nav-link text-white m-3" href="#comentarios">Comentarios</a>
                                </li>
                                <li class="nav-item mx-5 rounded-pill" id="item_5" onmouseover="ResaltarOpcion('item_5', 'green');" onmouseout="noResaltarOpcion('item_5', 'transparent');">
                                    <a class="nav-link text-white m-3" href="#contacto">Contáctenos</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- Fin sección del encabezado del sitio web -->

        <!-- Inicio sección principal del sitio web -->
        <!-- Pantalla de presentación -->
        <main>
            <div class="inicio imagenFondo" id="inicio">
                <div class="container-fluid border-bottom border-danger">
                    <div class="jumbotron jumbotron-fluid colorFondo border border-white rounded-pill">
                        <div class="container text-center text-white">
                          <h1 class="display-4 text-uppercase">¡¡bienvenidos!!</h1>
                          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tempor molestie mauris, ut pretium lectus ornare id</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 my-3">
                            <img src="imagenes/imgInicio_1.jpg" class="img-fluid img-thumbnail p-3 mb-3 border border-success bg-success" alt="Imagen de presentación del restaurante"/>
                            <img src="imagenes/imgInicio_2.jpg" class="img-fluid img-thumbnail p-3 mb-3 border border-danger bg-danger mx-auto d-block" alt="Imagen de presentación del restaurante"/>
                            <img src="imagenes/imgInicio_3.jpg" class="img-fluid img-thumbnail p-3 border border-success bg-success" alt="Imagen de presentación del restaurante"/>
                        </div>
                        <div class="col-6 my-3">
                            <img src="imagenes/imgInicio_4.jpg" class="img-fluid img-thumbnail p-3 mb-3 border border-success bg-success float-right" alt="Imagen de presentación del restaurante"/>
                            <img src="imagenes/imgInicio_5.jpg" class="img-fluid img-thumbnail p-3 mb-3 border border-danger bg-danger mx-auto d-block" alt="Imagen de presentación del restaurante"/>
                            <img src="imagenes/imgInicio_6.jpg" class="img-fluid img-thumbnail p-3 border border-success bg-success float-right" alt="Imagen de presentación del restaurante"/>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Menú de especialidades -->
            <div class="especialidades border-bottom border-danger bg-light" id="especialidades">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 row justify-content-around pt-4" >
                    <img src="imagenes/lineaDecorativa_1.png" class="img-fluid w-50" alt=""/>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 row justify-content-around">
<!--                    <img src="imagenes/dbjPapas_4.png" class="img-fluid dibujos" alt=""/>
                    <img src="imagenes/dbjHamburguesa_1.png" class="img-fluid dibujos" alt=""/>-->
                    <h1 class="font-weight-bold text-danger mb-0">Nuestras especialidades</h1>
<!--                    <img src="imagenes/dbjPastas_2.png" class="img-fluid dibujos" alt=""/>
                    <img src="imagenes/dbjPostre_3.png" class="img-fluid dibujos" alt=""/>-->
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 row justify-content-around pb-4">
                    <img src="imagenes/lineaDecorativa_2.png" class="img-fluid w-50" alt=""/>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="card-deck m-2">
                            <div class="card border-danger">
                                <img src="imgAperitivos/imgAperitivo.jpg" class="imgMenu card-img-top img-fluid mx-auto d-block rounded-lg" alt="Imagen menú de aperitivos">
                                <div class="card-body">
                                    <h5 class="card-title">Aperitivos</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer bg-white border-top-0">
                                    <a href="paginaAperitivos.php" class="btn btn-outline-danger font-weight-bold">Ir al menú</a>
                                </div>
                            </div>
                            <div class="card border-danger">
                                <img src="imgPizzas/imgPizza.jpg" class="imgMenu card-img-top img-fluid mx-auto d-block rounded-lg" alt="foto de personal de la empresa">
                                <div class="card-body">
                                    <h5 class="card-title">Pizzas</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer bg-white border-top-0">
                                    <a href="paginaPizzas.php" class="btn btn-outline-danger font-weight-bold">Ir al menú</a>
                                </div>
                            </div>
                            <div class="card border-danger">
                                <img src="imgPastas/imgPasta.jpg" class="imgMenu card-img-top img-fluid mx-auto d-block rounded-lg" alt="foto de personal de la empresa">
                                <div class="card-body">
                                    <h5 class="card-title">Pastas</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer bg-white border-top-0">
                                    <a href="paginaPastas.php" class="btn btn-outline-danger font-weight-bold">Ir al menú</a>
                                </div>
                            </div>
                            <div class="card border-danger">
                                <img src="imgHamburguesas/imgHamburguesas_1.jpg" class="imgMenu card-img-top img-fluid mx-auto d-block rounded-lg" alt="Imagen menú de aperitivos">
                                <div class="card-body">
                                    <h5 class="card-title">Hamburguesas</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer bg-white border-top-0">
                                    <a href="paginaHamburguesas.php" class="btn btn-outline-danger font-weight-bold">Ir al menú</a>
                                </div>
                            </div>
                        <div class="card border-danger">
                                <img src="imgBebidas/imgBebida.jpg" class="imgMenu card-img-top img-fluid mx-auto d-block rounded-lg" alt="foto de personal de la empresa">
                                <div class="card-body">
                                    <h5 class="card-title">Bebidas</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer bg-white border-top-0">
                                    <a href="paginaBebidas.php" class="btn btn-outline-danger font-weight-bold">Ir al menú</a>
                                </div>
                            </div>
                            <div class="card border-danger">
                                <img src="imgPostres/imgPostre.jpg" class="imgMenu card-img-top img-fluid mx-auto d-block rounded-lg" alt="foto de personal de la empresa">
                                <div class="card-body">
                                    <h5 class="card-title">Postres</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer bg-white border-top-0">
                                    <a href="paginaPostres.php" class="btn btn-outline-danger font-weight-bold">Ir al menú</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-around my-4">
                    <img src="imagenes/dbjEnsalada_2.png" class="img-fluid dibujos" alt=""/>
                    <img src="imagenes/dbjPizza_3.png" class="img-fluid dibujos" alt=""/>
                    <img src="imagenes/dbjPastas_3.png" class="img-fluid dibujos" alt=""/>
                    <img src="imagenes/dbjEmparedado_1.png" class="img-fluid dibujos" alt=""/>
                    <img src="imagenes/dbjBebida_4.png" class="img-fluid dibujos" alt=""/>
                    <img src="imagenes/dbjPostre_4.png" class="img-fluid dibujos" alt=""/>
                </div>
            </div>

            <!-- Historia del restaurante -->
            <div class="historia border-bottom py-4 border-danger" id="historia">
                <img src="imagenes/lineaDecorativa_3.png" class="img-fluid mx-auto d-block w-50" alt=""/>
                <h1 class="font-weight-bold text-white text-center mb-0">Conozca nuestra historia</h1>
                <img src="imagenes/lineaDecorativa_4.png" class="img-fluid mx-auto d-block pb-4 w-50" alt=""/>
                <div class="container-fluid">
                    <div class="row">                                                
                        <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                            <figure class="figure text-center">
                                <img src="imagenes/fotoHistoria_1.jpg" class="imgHistoria figure-img img-fluid rounded img-thumbnail w-75" alt="imagen historia del restaurante">
                                <figcaption class="figure-caption text-center text-white mb-5">A caption for the above image</figcaption>
                            </figure>
                            <figure class="figure text-center">
                                <img src="imagenes/fotoHistoria_2.jpg" class="imgHistoria figure-img img-fluid rounded img-thumbnail w-75" alt="imagen historia del restaurante">
                                <figcaption class="figure-caption text-center text-white mb-5">A caption for the above image</figcaption>
                            </figure>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                            <h5>Lorem ipsum dolor sit amet</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tempor molestie mauris, ut pretium lectus ornare id. Vestibulum condimentum, ligula et lacinia pulvinar, urna tellus viverra justo, a auctor purus metus et orci. Aenean porta, lacus rhoncus tincidunt egestas, lectus lorem varius est, et rhoncus sapien ante sed massa. Donec tincidunt risus magna, non ultricies lorem sodales id. Suspendisse vel libero vel sapien ultricies ultricies. Suspendisse sed commodo dolor. Quisque et suscipit massa. Duis sed condimentum metus.</p>
                            <p>Nunc sit amet lacus urna. Vivamus eget eros quam. Curabitur aliquam augue in lacus lobortis, et tempus nunc semper. Vivamus eleifend feugiat ex finibus gravida. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nulla augue quam, tincidunt a lectus vitae, blandit gravida magna. Donec et risus fermentum dui elementum dignissim. Aenean scelerisque auctor nisi in blandit. Aliquam non nunc vel felis vestibulum consectetur sit amet in tortor. Suspendisse posuere dui id dictum tincidunt. Suspendisse sodales orci a rhoncus rhoncus. Maecenas molestie venenatis lorem, sit amet faucibus elit consectetur at. Nullam vel tempor sem. Sed sit amet malesuada nibh. Ut dapibus convallis dictum. Quisque vitae lectus eros.</p>
                            <p>Morbi pretium augue sit amet nulla posuere, id rhoncus magna maximus. Nulla facilisi. Praesent sagittis nunc lectus, et convallis tortor ullamcorper non. Duis in volutpat tellus, eget rutrum sem. In hac habitasse platea dictumst. Vestibulum a auctor lectus. Aliquam placerat tellus et felis egestas, eu vulputate sapien porttitor. Phasellus at turpis efficitur, semper lorem id, pulvinar ligula. Duis iaculis, sapien id placerat pretium, sem nisl egestas turpis, eget tincidunt nisi orci ut mauris. Suspendisse eu orci libero. Aenean tellus dolor, congue in leo scelerisque, viverra eleifend mauris. Cras pellentesque ullamcorper augue sed tincidunt.</p>
                            <p>Duis sagittis libero in tortor dictum, ac ornare metus pretium. Suspendisse potenti. Integer et dui in augue pulvinar aliquam non et mi. Etiam at lacinia lectus, id sagittis ipsum. Morbi turpis nisl, blandit nec congue vel, finibus a augue. Morbi luctus, elit non malesuada ultricies, metus massa feugiat mauris, ac cursus risus augue ac nisl. Pellentesque commodo, lorem at convallis tempor, purus est vestibulum ex, id lobortis lacus nisl at metus. Integer vel sem consectetur, mollis sapien nec, viverra tellus. Sed quam lectus, tempor nec est non, fringilla dapibus eros. Praesent ultricies ligula id viverra placerat.</p>
                            <p>Nullam dapibus orci sit amet nibh sagittis, a molestie arcu sodales. Quisque euismod auctor libero, ac tristique ante vestibulum a. Phasellus sodales ullamcorper risus nec tristique. Cras condimentum magna auctor, sagittis augue in, cursus ex. Pellentesque neque urna, luctus a commodo nec, vehicula nec enim. Vivamus fringilla, diam eu ullamcorper dapibus, turpis nulla dictum velit, sit amet facilisis nulla augue eget metus. Integer auctor sit amet nisi ac hendrerit. Donec maximus ex sit amet odio elementum tristique.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Formulario para comentarios y sugerencias -->
            <div class="comentarios border-bottom mt-5 pb-5 border-danger" id="comentarios">
                <h1 class="font-weight-bold text-danger pb-4 mb-0 text-center">Comentarios y sugerencias</h1>
                <h4 class="text-center pb-4 mb-0">Coméntanos tu experiencia en nuestro restaurante</h4>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-5">
                            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" id="frmContacto" class="frmContacto needs-validation" novalidate>

                                <!-- Nombre -->
                                <div class="form-row justify-content-center">
                                    <div class="col-sm-12 col-md-10 col-lg-10 col-xl-12 mb-2">
                                        <label for="nombre"><small>Nombre:</small></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text" id="validatedInputGroupPrepend"><i class="bi bi-person-fill"></i></span></div>
                                            <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="" value="" required>
                                            <div class="valid-feedback"><small>¡OK. Es válido!</small></div>
                                            <div class="invalid-feedback"><small>Complete el campo. Recuerde colocar solamente letras</small></div>
                                        </div>
                                        
                                    </div>
                                </div>

                                <!-- Números telefónicos de la casa -->
                                <div class="form-row justify-content-center">
                                    <!-- Casa de habitación -->
                                    <div class="col-sm-6 col-md-5 col-lg-5 col-xl-6 mb-2">
                                        <label for="telcasa"><small>Teléfono casa:</small></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text" id="validatedInputGroupPrepend"><i class="bi bi-telephone-fill"></i></span></div>
                                            <input type="text" class="form-control" id="telcasa" name="telcasa" aria-describedby="" value="" required>
                                            <div class="valid-feedback"><small>¡OK. Es válido!</small></div>
                                            <div class="invalid-feedback"><small>Complete el campo. Recuerde colocar solamente números</small></div>
                                        </div>                                        
                                    </div>
                                    <!-- Celular -->
                                    <div class="col-sm-6 col-md-5 col-lg-5 col-xl-6 mb-2">
                                        <label for="telcelular"><small>Teléfono celular:</small></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text" id="validatedInputGroupPrepend"><i class="bi bi-phone-fill"></i></span></div>
                                            <input type="text" class="form-control" id="telcelular" name="telcelular" aria-describedby="" value="" required>
                                            <div class="valid-feedback"><small>¡OK. Es válido!</small></div>
                                            <div class="invalid-feedback"><small>Complete el campo. Recuerde colocar solamente números</small></div>
                                        </div>                                        
                                    </div>
                                </div>

                                <!-- Correo electrónico -->
                                <div class="form-row justify-content-center">
                                    <div class="col-sm-12 col-md-10 col-lg-10 col-xl-12 mb-2">
                                        <label for="correo"><small>Correo:</small></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text" id="validatedInputGroupPrepend"><i class="bi bi-envelope-fill"></i></span></div>
                                            <input type="text" class="form-control" id="correo" name="correo" aria-describedby="" value="" required>
                                            <div class="valid-feedback"><small>¡OK. Es válido!</small></div>
                                            <div class="invalid-feedback"><small>Complete el campo. Recuerde no colocar espacios</small></div>
                                        </div>                                        
                                    </div>
                                </div>

                                <!-- Dirección de la casa de habitación -->
                                <div class="form-row justify-content-center">
                                    <div class="col-sm-12 col-md-10 col-lg-10 col-xl-12 mb-2">
                                        <label for="direccion"><small>Dirección casa:</small></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text" id="validatedInputGroupPrepend"><i class="bi bi-geo-alt-fill"></i></span></div>
                                            <input type="text" class="form-control" id="direccion" name="direccion" aria-describedby="" value="" required>
                                            <div class="valid-feedback"><small>¡OK. Es válido!</small></div>
                                            <div class="invalid-feedback"><small>Complete el campo</small></div>
                                        </div>                                        
                                    </div>
                                </div>

                                <!-- Comentario -->
                                <div class="form-row justify-content-center">
                                    <div class="col-sm-12 col-md-10 col-lg-10 col-xl-12 mb-2">
                                        <label for="mensaje"><small>Escribe tu comentario:</small></label>
                                        <textarea cols="30" rows="5" class="form-control" id="mensaje" name="mensaje" value="" required></textarea>
                                        <div class="valid-feedback"><small>¡OK. Es válido!</small></div>
                                        <div class="invalid-feedback"><small>Complete el campo</small></div>
                                    </div>                                    
                                </div>
                                
                                <div class="row justify-content-center px-3">
                                    <input type="submit" id="boton" class="boton btn btn-outline-success btn-block col-md-10 col-xl-12 font-weight-bold mt-3" data-toggle="modal" data-target="#confirmacion">
                                </div>
                                
                                <?php
                                    require 'validaciones.php';
                                ?>

                            </form>
                        </div>
                        
                        <!-- Carrusel de imagenes con opiniones de clientes -->
                        <div class="carrusel col-sm-12 col-md-10 col-lg-10 col-xl-7 mt-5 pt-4">
                            <div id="carouselCaptions" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselCaptions" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselCaptions" data-slide-to="1"></li>
                                    <li data-target="#carouselCaptions" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="imgHamburguesas/imgHamburguesas_2.jpg" class="img-fluid img-thumbnail mx-auto d-block w-75" alt="">
                                        <div class="fondoCaption carousel-caption d-none d-md-block">
                                            <img src="imagenes/persona_1.png" class="imgPersona img-fluid img-thumbnail bg-success rounded-circle mb-4">
                                            <h5>First slide label</h5>
                                            <p class="font-italic">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tempor molestie mauris, ut pretium lectus ornare id. Vestibulum condimentum, ligula et lacinia pulvinar, urna tellus viverra justo, a auctor purus metus et orci."</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="imgPizzas/fondoPizzas_2.jpg" class="img-fluid img-thumbnail mx-auto d-block w-75" alt="">
                                        <div class="fondoCaption carousel-caption d-none d-md-block">
                                            <img src="imagenes/persona_2.png" class="imgPersona img-fluid img-thumbnail bg-success rounded-circle mb-4">
                                            <h5>Second slide label</h5>
                                            <p class="font-italic">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tempor molestie mauris, ut pretium lectus ornare id. Vestibulum condimentum, ligula et lacinia pulvinar, urna tellus viverra justo, a auctor purus metus et orci."</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="imgPastas/fondoPastas_2.jpg" class="img-fluid img-thumbnail mx-auto d-block w-75" alt="">
                                        <div class="fondoCaption carousel-caption d-none d-md-block">
                                            <img src="imagenes/persona_3.png" class="imgPersona img-fluid img-thumbnail bg-success rounded-circle mb-4">
                                            <h5>Third slide label</h5>
                                            <p class="font-italic">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tempor molestie mauris, ut pretium lectus ornare id. Vestibulum condimentum, ligula et lacinia pulvinar, urna tellus viverra justo, a auctor purus metus et orci."</p>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-target="#carouselCaptions" data-slide="prev">
                                    <span class="text-dark" aria-hidden="true"><i class="control-prev bi bi-caret-left-fill" style="font-size: 3rem"></i></span>
                                    <span class="sr-only">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-target="#carouselCaptions" data-slide="next">
                                    <span class="text-dark" aria-hidden="true"><i class="control-next bi bi-caret-right-fill" style="font-size: 3rem"></i></span>
                                    <span class="sr-only">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <footer>
            <!-- Información de contacto -->
            <div class="contacto border-bottom pt-4 border-danger" id="contacto">
                <div class="container-fluid d-flex justify-content-around">
                    <div class="row">
                        <div class="col-6 col-sm-6 d-flex flex-column mb-3">
                            <h6 class="text-white text-left font-weight-bold my-3">Siganos en redes sociales:</h6>
                            <div class="d-flex flex-row pb-2">
                                <i class="bi bi-facebook text-white"></i>&nbsp;&nbsp;&nbsp;
                                <a href="#" target="_blank" class="text-white">pizzeriaCR</a>
                            </div>
                            <div class="d-flex flex-row pb-2">
                                <i class="bi bi-twitter text-white"></i>&nbsp;&nbsp;&nbsp;
                                <a href="#" target="_blank" class="text-white">pizzeriaCR</a>
                            </div>
                            <div class="d-flex flex-row pb-2">
                                <i class="bi bi-instagram text-white"></i>&nbsp;&nbsp;&nbsp;
                                <a href="#" target="_blank" class="text-white">pizzeriaCR</a>
                            </div>
                            <div class="d-flex flex-row pb-2">
                                <i class="bi bi-youtube text-white"></i>&nbsp;&nbsp;&nbsp;
                                <a href="#" target="_blank" class="text-white">pizzeriaCR</a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 d-flex flex-column mb-3">
                            <h6 class="text-white text-left font-weight-bold my-3">Información de contacto:</h6>
                            <div class="d-flex flex-row pb-2">
                                <i class="bi bi-geo-alt-fill text-white"></i>&nbsp;&nbsp;&nbsp;
                                <p class="text-white text-left m-0">Av. 1, st. 1, Lorem ipsum dolor, consectetur elit adipiscing</p>
                            </div>
                            <div class="d-flex flex-row pb-2">
                                <i class="bi bi-headset text-white"></i>&nbsp;&nbsp;&nbsp;
                                <p class="text-white m-0">800-123-pizzeria</p>
                            </div>
                            <div class="d-flex flex-row pb-2">
                                <i class="bi bi-whatsapp text-white"></i>&nbsp;&nbsp;&nbsp;
                                <p class="text-white m-0">(+000) 1234-5678</p>
                            </div>
                            <div class="d-flex flex-row pb-2">
                                <i class="bi bi-envelope-fill text-white"></i>&nbsp;&nbsp;&nbsp;
                                <p class="text-white m-0">lorem_ipsum@mail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row d-flex flex-row justify-content-center border-white border-top text-center py-3">
                        <p class="text-white mb-0">&copy;&nbsp;Lorem ipsum dolor sit amet 2022 - consectetur elit adipiscing</p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Archivos JavaScript utilizados por Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

        <!-- Enlaces a librerías de javaScript -->
        <script src="librerias/sweetalert2.all.js" type="text/javascript"></script>
        
        <!-- Archivos y librerías de javaScript -->        
        <script src="js/mensaje.js" type="text/javascript"></script>
        
        <!-- Ejecución funciones de javaScript -->
        <script>
            function ResaltarOpcion(id, color) {
                document.getElementById(id).style.background = color;
            }

            function noResaltarOpcion(id, color) {
                document.getElementById(id).style.background = color;
            }
        </script>

        <script>
            // Función que permite la deshabilitación del envío de datos en formularios si hay campos no válidos
            (function() {
                'use strict';

                // Esta función utiliza este evento para registrar un objeto específico. En este caso, el load
                // carga todos los elementos del DOM
                window.addEventListener('load', function() {

                    // Busca la clase y la almacena en una variable
                    var forms = document.getElementsByClassName('needs-validation');

                    // Recorre el formulario y evita que los datos del form se envíe de forma inmediata, hasta
                    // que sean todos los campos válidos
                    var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                        form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();
        </script>
                
       <?php

        ?>
    </body>
</html>