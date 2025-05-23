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
        <link href="https://fonts.googleapis.com/css2?family=Source+Serif+4&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

        <!-- Iconos -->
        <link rel="shortcut icon" type="image/x-icon" href="imgInicio/logoPizza_1.png"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

        <!-- Archivos css -->
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link rel="stylesheet" href="librerias/sweetalert2.min.css">

        <!-- Efecto animaciones para los elementos  -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
                
        <!-- Logo y menú principal -->
        <header class="sticky-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 navbar navbar-expand-lg navbar-light p-4">
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">                            
                            <a class="navbar-brand" href="#">
                                <img src="imgInicio/logoPizza_2.png" class="imgLogo img-fluid w-100" alt="Logo de la empresa"/>
                            </a>
                        </div>

                        <button id="btnMenu" class="btnMenu navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span><i class="icono btn bi bi-list text-white"></i></span>
                        </button>

                        <nav class="menu collapse navbar-collapse px-0" id="navbarNav">
                            <ul class="nav">
                                <li class="nav-item rounded-pill" id="item_1" onmouseover="ResaltarOpcion('item_1', 'green');" onmouseout="noResaltarOpcion('item_1', 'transparent');">
                                    <a class="nav-link text-white" href="#"><i class="fa-solid fa-flag-checkered mr-2"></i>Inicio</a>
                                </li>
                                <li class="nav-item rounded-pill" id="item_2" onmouseover="ResaltarOpcion('item_2', 'green');" onmouseout="noResaltarOpcion('item_2', 'transparent');">
                                    <a class="nav-link text-white" href="#especialidades"><i class="fa-solid fa-pizza-slice mr-2"></i>Especialidades</a>
                                </li>
                                <li class="nav-item rounded-pill" id="item_3" onmouseover="ResaltarOpcion('item_3', 'green');" onmouseout="noResaltarOpcion('item_3', 'transparent');">
                                    <a class="nav-link text-white" href="#historia"><i class="bi bi-vector-pen mr-2"></i>Historia</a>
                                </li>
                                <li class="nav-item rounded-pill" id="item_4" onmouseover="ResaltarOpcion('item_4', 'green');" onmouseout="noResaltarOpcion('item_4', 'transparent');">
                                    <a class="nav-link text-white" href="#comentarios"><i class="bi bi-chat-text mr-2"></i>Comentarios</a>
                                </li>
                                <li class="nav-item rounded-pill" id="item_5" onmouseover="ResaltarOpcion('item_5', 'green');" onmouseout="noResaltarOpcion('item_5', 'transparent');">
                                    <a class="nav-link text-white" href="#contacto"><i class="bi bi-telephone mr-2"></i>Contáctenos</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        
        <!-- Sección de presentación -->
        <main>
            <div id="inicio" class="inicio imagenFondo">
                <div class="container-fluid border-bottom border-danger">
                    <div class="row">
                        <div class="jumbotron jumbotron-fluid colorFondo border border-white rounded-pill text-center text-white mb-5">
                          <h1 class="mb-3 display-4 text-uppercase font-weight-bold">¡¡bienvenidos!!</h1>
                          <p class="mb-0 lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tempor molestie mauris, ut pretium lectus ornare id</p>
                        </div>
                    </div>
                    <div class="row justify-content-around mt-3">
                        <div class="col-11 col-sm-11 col-md-6 col-lg-6 col-xl-6 mb-3 text-center">
                            <img src="imgInicio/imgPresentacion_1.jpg" class="img-fluid img-thumbnail p-3 border border-success bg-success" alt="Imagen de presentación del restaurante"/>                            
                        </div>
                        <div class="col-11 col-sm-11 col-md-6 col-lg-6 col-xl-6 text-center">
                            <img src="imgInicio/imgPresentacion_2.jpg" class="img-fluid img-thumbnail p-3 border border-danger bg-danger" alt="Imagen de presentación del restaurante"/>                            
                        </div>
                    </div>
                    <div class="row justify-content-around my-3">
                        <div class="col-11 col-sm-11 col-md-6 col-lg-6 col-xl-6 mb-3 text-left">
                            <img src="imgInicio/imgPresentacion_3.jpg" class="img-fluid img-thumbnail p-3 border border-success bg-success" alt="Imagen de presentación del restaurante"/>                            
                        </div>
                        <div class="col-11 col-sm-11 col-md-6 col-lg-6 col-xl-6 text-right">                            
                            <img src="imgInicio/imgPresentacion_4.jpg" class="img-fluid img-thumbnail p-3 border border-success bg-success" alt="Imagen de presentación del restaurante"/>
                        </div>
                    </div>
                    <div class="row justify-content-around mb-3">
                        <div class="col-11 col-sm-11 col-md-6 col-lg-6 col-xl-6 mb-3 text-center">
                            <img src="imgInicio/imgPresentacion_5.jpg" class="img-fluid img-thumbnail p-3 border border-danger bg-danger" alt="Imagen de presentación del restaurante"/>                            
                        </div>
                        <div class="col-11 col-sm-11 col-md-6 col-lg-6 col-xl-6 text-center">                            
                            <img src="imgInicio/imgPresentacion_6.jpg" class="img-fluid img-thumbnail p-3 border border-success bg-success" alt="Imagen de presentación del restaurante"/>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Menú de especialidades -->
            <div id="especialidades" class="especialidades border-bottom border-danger bg-light">
                <div class="row col-9 col-sm-7 col-md-6 col-lg-5 col-xl-5 justify-content-center mx-auto pt-4" >
                    <img src="imgInicio/lineaDecorativa_1.png" class="img-fluid" alt=""/>
                </div>
                
                <div class="row col-9 col-sm-7 col-md-6 col-lg-5 col-xl-5 justify-content-center mx-auto" >
                    <h1 class="mb-0 font-weight-bold text-center text-danger">Nuestras especialidades</h1>
                </div>
                                
                <div class="row col-9 col-sm-7 col-md-6 col-lg-5 col-xl-5 justify-content-center mx-auto pb-4">
                    <img src="imgInicio/lineaDecorativa_2.png" class="img-fluid" alt=""/>
                </div>
                <div class="container-fluid">
                    <div class="row justify-content-around">
                        <div class="card border-danger m-2 p-2">
                            <img src="imgInicio/imgEspecialidades_1.jpg" class="card-img-top img-fluid mx-auto d-block rounded-lg" alt="Imagen menú de aperitivos">
                            <div class="card-body px-2">
                                <h5 class="card-title">Aperitivos</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer bg-white border-top-0 px-2">
                                <a href="paginaAperitivos.php" class="btn btn-outline-danger font-weight-bold">Ir al menú</a>
                            </div>
                        </div>
                        <div class="card border-danger m-2 p-2">
                            <img src="imgInicio/imgEspecialidades_2.jpg" class="card-img-top img-fluid mx-auto d-block rounded-lg" alt="Imagen menú de pizzas">
                            <div class="card-body px-2">
                                <h5 class="card-title">Pizzas</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer bg-white border-top-0 px-2">
                                <a href="paginaPizzas.php" class="btn btn-outline-danger font-weight-bold">Ir al menú</a>
                            </div>
                        </div>
                        <div class="card border-danger m-2 p-2">
                            <img src="imgInicio/imgEspecialidades_3.jpg" class="card-img-top img-fluid mx-auto d-block rounded-lg" alt="Imagen menú de pastas">
                            <div class="card-body px-2">
                                <h5 class="card-title">Pastas</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer bg-white border-top-0 px-2">
                                <a href="paginaPastas.php" class="btn btn-outline-danger font-weight-bold">Ir al menú</a>
                            </div>
                        </div>
                        <div class="card border-danger m-2 p-2">
                            <img src="imgInicio/imgEspecialidades_4.jpg" class="card-img-top img-fluid mx-auto d-block rounded-lg" alt="Imagen menú de hamburguesas">
                            <div class="card-body px-2">
                                <h5 class="card-title">Hamburguesas</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer bg-white border-top-0 px-2">
                                <a href="paginaHamburguesas.php" class="btn btn-outline-danger font-weight-bold">Ir al menú</a>
                            </div>
                        </div>
                        <div class="card border-danger m-2 p-2">
                            <img src="imgInicio/imgEspecialidades_5.jpg" class="card-img-top img-fluid mx-auto d-block rounded-lg" alt="Imagen menú de bebidas">
                            <div class="card-body px-2">
                                <h5 class="card-title">Bebidas</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer bg-white border-top-0 px-2">
                                <a href="paginaBebidas.php" class="btn btn-outline-danger font-weight-bold">Ir al menú</a>
                            </div>
                        </div>
                        <div class="card border-danger m-2 p-2">
                            <img src="imgInicio/imgEspecialidades_6.jpg" class="card-img-top img-fluid mx-auto d-block rounded-lg" alt="Imagen menú de postres">
                            <div class="card-body px-2">
                                <h5 class="card-title">Postres</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer bg-white border-top-0 px-2">
                                <a href="paginaPostres.php" class="btn btn-outline-danger font-weight-bold">Ir al menú</a>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-around align-items-center py-3">
                        <div class="d-none d-lg-block col-sm-2 col-md-2 col-lg-1 col-xl-1 text-center">
                            <img src="imgInicio/dbjEnsalada_1.png" class="img-fluid" alt=""/>
                        </div>
                        <div class="d-none d-lg-block col-sm-2 col-md-2 col-lg-1 col-xl-1 text-center">
                            <img src="imgInicio/dbjPizza_1.png" class="img-fluid" alt=""/>
                        </div>
                        <div class="d-none d-lg-block col-sm-2 col-md-2 col-lg-1 col-xl-1 text-center">
                            <img src="imgInicio/dbjPastas_1.png" class="img-fluid" alt=""/>
                        </div>
                        <div class="d-none d-lg-block col-sm-2 col-md-2 col-lg-1 col-xl-1 text-center">
                            <img src="imgInicio/dbjHamburguesa_1.png" class="img-fluid" alt=""/>
                        </div>
                        <div class="d-none d-lg-block col-sm-2 col-md-2 col-lg-1 col-xl-1 text-center">
                            <img src="imgInicio/dbjBebida_1.png" class="img-fluid" alt=""/>
                        </div>
                        <div class="d-none d-lg-block col-sm-2 col-md-2 col-lg-1 col-xl-1 text-center">
                            <img src="imgInicio/dbjPostre_1.png" class="img-fluid" alt=""/>
                        </div>                                                
                    </div>
                </div>                
            </div>

            <!-- Historia del restaurante -->
            <div id="historia" class="historia border-bottom border-danger">
                <div class="row col-9 col-sm-7 col-md-6 col-lg-5 col-xl-5 justify-content-center mx-auto pt-4" >
                    <img src="imgInicio/lineaDecorativa_3.png" class="img-fluid" alt=""/>
                </div>
                
                <div class="row col-9 col-sm-7 col-md-6 col-lg-5 col-xl-5 justify-content-center mx-auto" >
                    <h1 class="mb-0 font-weight-bold text-center text-white">Conozca nuestra historia</h1>
                </div>
                                                
                <div class="row col-9 col-sm-7 col-md-6 col-lg-5 col-xl-5 justify-content-center mx-auto pb-4">
                    <img src="imgInicio/lineaDecorativa_4.png" class="img-fluid" alt=""/>
                </div>
                                                
                <div class="container-fluid">
                    <div class="row justify-content-around">                                                
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-5">
                            <figure class="figure text-center pt-3">
                                <img src="imgInicio/fotoHistoria_1.jpg" class="imgHistoria figure-img img-fluid rounded img-thumbnail" alt="imagen historia del restaurante">
                                <figcaption class="figure-caption text-center text-white mb-5">A caption for the above image</figcaption>
                            </figure>
                            <figure class="figure text-center">
                                <img src="imgInicio/fotoHistoria_2.jpg" class="imgHistoria figure-img img-fluid rounded img-thumbnail" alt="imagen historia del restaurante">
                                <figcaption class="figure-caption text-center text-white mb-5">A caption for the above image</figcaption>
                            </figure>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 p-3">
                            <h2 class="mb-3 text-white">Lorem ipsum dolor sit amet</h2>
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
            <div class="tcomentarios container-fluid border-bottom border-danger">
                <h1 class="mb-0 py-4 text-danger text-center font-weight-bold">Comentarios y sugerencias</h1>
                <h4 class="mb-0 pb-4 text-center">Coméntanos tu experiencia en nuestro restaurante</h4>
                
                <div class="row align-items-center">
                    <div id="comentarios" class="comentarios col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <form id="frmContacto" class="frmContacto needs-validation" novalidate>
                            
                            <!-- Nombre -->
                            <div class="form-row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-2">
                                    <label class="font-weight-bold" for="nombre">Nombre:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text" id="validatedInputGroupPrepend"><i class="bi bi-person-fill"></i></span></div>
                                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                                        <div class="valid-feedback"><small>¡OK. Es válido!</small></div>
                                        <div class="invalid-feedback"><small>Complete el campo. Recuerde colocar solamente letras</small></div>
                                    </div>                                        
                                </div>
                            </div>
                            
                            <!-- Números telefónicos del cliente -->
                            <div class="form-row">                                     
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-2">
                                    <label class="font-weight-bold" for="telcasa">Teléfono casa:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text" id="validatedInputGroupPrepend"><i class="bi bi-telephone-fill"></i></span></div>
                                        <input type="text" class="form-control" id="telcasa" name="telcasa" required>
                                        <div class="valid-feedback"><small>¡OK. Es válido!</small></div>
                                        <div class="invalid-feedback"><small>Complete el campo. Recuerde colocar solamente números</small></div>
                                    </div>                                        
                                </div>                                     
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-2">
                                    <label class="font-weight-bold" for="telcelular">Teléfono celular:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text" id="validatedInputGroupPrepend"><i class="bi bi-phone-fill"></i></span></div>
                                        <input type="text" class="form-control" id="telcelular" name="telcelular" required>
                                        <div class="valid-feedback"><small>¡OK. Es válido!</small></div>
                                        <div class="invalid-feedback"><small>Complete el campo. Recuerde colocar solamente números</small></div>
                                    </div>                                        
                                </div>
                            </div>
                            
                            <!-- Correo electrónico -->
                            <div class="form-row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-2">
                                    <label class="font-weight-bold" for="correo">Correo:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text" id="validatedInputGroupPrepend"><i class="bi bi-envelope-fill"></i></span></div>
                                        <input type="text" class="form-control" id="correo" name="correo" required>
                                        <div class="valid-feedback"><small>¡OK. Es válido!</small></div>
                                        <div class="invalid-feedback"><small>Complete el campo. Recuerde no colocar espacios</small></div>
                                    </div>                                        
                                </div>
                            </div>
                            
                            <!-- Dirección de la casa -->
                            <div class="form-row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-2">
                                    <label class="font-weight-bold" for="direccion">Dirección casa:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text" id="validatedInputGroupPrepend"><i class="bi bi-geo-alt-fill"></i></span></div>
                                        <input type="text" class="form-control" id="direccion" name="direccion" required>
                                        <div class="valid-feedback"><small>¡OK. Es válido!</small></div>
                                        <div class="invalid-feedback"><small>Complete el campo</small></div>
                                    </div>                                        
                                </div>
                            </div>
                            
                            <!-- Comentarios -->
                            <div class="form-row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-2">
                                    <label class="font-weight-bold" for="mensaje">Escribe tu comentario:</label>
                                    <textarea cols="30" rows="5" class="form-control" id="mensaje" name="mensaje" required></textarea>
                                    <div class="valid-feedback"><small>¡OK. Es válido!</small></div>
                                    <div class="invalid-feedback"><small>Complete el campo</small></div>
                                </div>                                    
                            </div>
                            
                            <div class="row px-3">
                                <input type="submit" id="boton" class="boton btn btn-outline-primary btn-block col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 font-weight-bold my-3" data-toggle="modal" data-target="#confirmacion">
                            </div>

                            <?php
                                require 'validaciones.php';
                            ?>
                            
                        </form>                                                
                    </div>
                    <div class="d-none d-lg-block col-lg-6 col-xl-6">
                        <div class="mb-2">
                            <img src="imgInicio/imgFamilia_1.jpg" class="img-fluid img-thumbnail p-2 bg-success mx-auto d-block" alt=""/>
                        </div>                        
                    </div>
                </div>
                
                <!-- Comentarios -->
                <div class="row justify-content-center">
                    <div class="carrusel d-none d-md-block col-sm-12 col-md-12 col-lg-9 col-xl-8 py-5">
                        <div id="carouselCaptions" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselCaptions" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselCaptions" data-slide-to="1"></li>
                                <li data-target="#carouselCaptions" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="imgInicio/imgCarrusel_1.jpg" class="img-fluid img-thumbnail mx-auto d-block w-75" alt="">
                                    <div class="fondoCaption carousel-caption">
                                        <img src="imgInicio/persona_1.png" class="imgPersona img-fluid img-thumbnail bg-success rounded-circle my-4">
                                        <h5 class="">First slide label</h5>
                                        <p class="mb-0 font-italic">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tempor molestie mauris, ut pretium lectus ornare id. Vestibulum condimentum, ligula et lacinia pulvinar, urna tellus viverra justo, a auctor purus metus et orci."</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="imgInicio/imgCarrusel_2.jpg" class="img-fluid img-thumbnail mx-auto d-block w-75" alt="">
                                    <div class="fondoCaption carousel-caption">
                                        <img src="imgInicio/persona_2.png" class="imgPersona img-fluid img-thumbnail bg-success rounded-circle my-4">
                                        <h5 class="">Second slide label</h5>
                                        <p class="mb-0 font-italic">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tempor molestie mauris, ut pretium lectus ornare id. Vestibulum condimentum, ligula et lacinia pulvinar, urna tellus viverra justo, a auctor purus metus et orci."</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="imgInicio/imgCarrusel_3.jpg" class="img-fluid img-thumbnail mx-auto d-block w-75" alt="">
                                    <div class="fondoCaption carousel-caption">
                                        <img src="imgInicio/persona_3.png" class="imgPersona img-fluid img-thumbnail bg-success rounded-circle my-4">
                                        <h5 class="">Third slide label</h5>
                                        <p class="mb-0 font-italic">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tempor molestie mauris, ut pretium lectus ornare id. Vestibulum condimentum, ligula et lacinia pulvinar, urna tellus viverra justo, a auctor purus metus et orci."</p>
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
        </main>

        <!-- Información de contacto -->
        <footer>                                               
            <div class="container-fluid bg-secondary" id="contacto">
                <div class="row p-4 justify-content-center">
                    
                    <!-- Enlaces a las páginas de los productos -->
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                        <h5 class="mb-2 text-white text-left font-weight-bold">Aquí le ofrecemos:</h5>
                        <div class="list-group list-group-flush">
                            <a href="paginaAperitivos.php" class="list-group-item text-white text-decoration-none bg-secondary border-0 py-1 px-0"><i class="fa-solid fa-bowl-rice text-white mr-3"></i>Aperitivos</a>
                            <a href="paginaPizzas.php" class="list-group-item text-white text-decoration-none bg-secondary border-0 py-1 px-0"><i class="fa-solid fa-pizza-slice text-white mr-3"></i>Pizzas</a>
                            <a href="paginaPastas.php" class="list-group-item text-white text-decoration-none bg-secondary border-0 py-1 px-0"><i class="fa-solid fa-bowl-rice text-white mr-3"></i>Pastas</a>
                            <a href="paginaHamburguesas.php" class="list-group-item text-white text-decoration-none bg-secondary border-0 py-1 px-0"><i class="fa-solid fa-burger text-white mr-3"></i>Hamburguesas</a>
                            <a href="paginaBebidas.php" class="list-group-item text-white text-decoration-none bg-secondary border-0 py-1 px-0"><i class="fa-solid fa-martini-glass-citrus text-white mr-3"></i>Bebidas</a>
                            <a href="paginaPostres.php" class="list-group-item text-white text-decoration-none bg-secondary border-0 py-1 px-0"><i class="fa-solid fa-ice-cream text-white mr-3"></i>Postres</a>
                        </div>
                    </div>
                    
                    <!-- Redes sociales -->
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                        <h5 class="mb-2 text-white text-left font-weight-bold">Síganos en redes:</h5>
                        <div class="list-group list-group-flush">
                            <a href="https://www.facebook.com/" target="_blank" class="list-group-item text-white text-decoration-none bg-secondary border-0 py-1 px-0"><i class="bi bi-facebook text-white mr-3"></i>pizzeriaCR</a>
                            <a href="https://twitter.com/" target="_blank" class="list-group-item text-white text-decoration-none bg-secondary border-0 py-1 px-0"><i class="fa-brands fa-x-twitter mr-3"></i>pizzeriaCR</a>                            
                            <a href="http://instagram.com/" target="_blank" class="list-group-item text-white text-decoration-none bg-secondary border-0 py-1 px-0"><i class="bi bi-instagram text-white mr-3"></i>pizzeriaCR</a>
                            <a href="http://www.youtube.com/" target="_blank" class="list-group-item text-white text-decoration-none bg-secondary border-0 py-1 px-0"><i class="bi bi-youtube text-white mr-3"></i>pizzeriaCR</a>                            
                        </div>
                    </div>
                    
                    <!-- Localización -->
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-3">
                        <h5 class="mb-2 text-white text-left font-weight-bold">Contáctenos:</h5>
                        <div class="list-group list-group-flush">
                            <a href="https://www.waze.com/es" target="_blank" class="list-group-item text-white text-decoration-none bg-secondary border-0 py-1 px-0"><i class="fa-brands fa-waze mr-3"></i>Av. 1, st. 1, Lorem ipsum dolor</a>                            
                            <a href="#" class="list-group-item text-white text-decoration-none bg-secondary border-0 py-1 px-0"><i class="bi bi-headset text-white mr-3"></i>800-123-pizzeriacr</a>
                            <a href="https://web.whatsapp.com/" target="_blank" class="list-group-item text-white text-decoration-none bg-secondary border-0 py-1 px-0"><i class="bi bi-whatsapp text-white mr-3"></i>(+000) 1234-7890</a>  
                            <a href="#" class="list-group-item text-white text-decoration-none bg-secondary border-0 py-1 px-0"><i class="bi bi-envelope-fill text-white mr-3"></i>lorem_ipsum@mail.com</a>                            
                        </div>
                    </div>
                </div>
                
                <div>
                    <div class="row justify-content-center border-white border-top text-center py-3 mx-0">        
                        <div class="copyright text-white mb-0"><i class="far fa-copyright text-white mr-2"></i>Lorem ipsum dolor sit amet 2022 - consectetur elit adipiscing</div>
                    </div>   
                </div>                                                                                
            </div>
        </footer>
        
        <!-- Archivos JavaScript utilizados por Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

        <!-- Enlaces a librerías de javaScript -->
        <script src="librerias/sweetalert2.all.js" type="text/javascript"></script>
        
        <!-- Archivos y librerías de javaScript -->
        <script src="js/mensaje.js" type="text/javascript"></script>
        
        <!-- Enlaces y métodos para utilizar las animaciones -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
                        
        <script>
            AOS.init();
        </script>
        
        <!-- Funciones javaScript -->
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
            // put your code here
        ?>
    </body>
</html>