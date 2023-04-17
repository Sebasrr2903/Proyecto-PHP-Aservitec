<?php
function scripts(){
    echo '<script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/templatemo.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/Registro.js"></script>
    <script src="js/Producto.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
    crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.js" 
    integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
}


function NavbarN(){

    echo'    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
    <div class="container text-light">
        <div class="w-100 d-flex justify-content-between">
            <div>
                <i class="fa fa-envelope mx-2"></i>
                <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">Arsevitec@company.com</a>
                <i class="fa fa-phone mx-2"></i>
                <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
            </div>
            <div>
                <a class="text-light" href="https://fb.com/templatemo" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw"></i></a>
            </div>
        </div>
    </div>
</nav>
    
    
    <nav class="navbar navbar-expand-lg navbar-light shadow">
    <div class="container d-flex justify-content-between align-items-center">
        <a class="navbar-brand text-success logo h1 align-self-center" href="index.html">
        <img  src="img/Arsevitec_logo.png">
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
            <div class="flex-fill">
                <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="view/index.html">Inicio</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="view/shop.html">Productos</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="sobre.html">Solicitud de Matenimiento</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Opciones
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="contactar.php">Contactenos</a></li>
                            <li><a class="dropdown-item" href="sobre.php">Quienes Somos?</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="navbar align-self-center d-flex">
            <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">    
                <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i> Carrito
            
            </a>
            <div id="carrito" class="dropdown-menu">
            <table id="lista-carrito" class="table">
                <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th></th>
                    </tr>
                </thead>w
                <tbody></tbody>
            </table>
            <a href="#" id="vaciar-carrito" class="button-vaciar">Vaciar Carrito</a>
            <a href="#" id="procesar-pedido" class="button-pedido">Procesar Compra</a>
        </div>
        </div>
                <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                    <div class="input-group">
                        <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                        <div class="input-group-text">
                            <i class="fa fa-fw fa-search"></i>
                        </div>
                    </div>
                </div>
                <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                    <i class="fa fa-fw fa-search text-dark mr-2"></i>
                </a> 
                </li>
                <a class="nav-icon position-relative text-decoration-none" href="#">
                    <i class="fa fa-fw fa-user text-dark mr-3"></i> Iniciar Sesion
                    
                </a>
                
            </div>
        </div>
    </div>
</nav>';
}



function NavbarAdmin(){

    echo'  <nav class="navbar navbar-expand-lg navbar-light shadow">
    <div class="container d-flex justify-content-between align-items-center">
        <a class="navbar-brand text-success logo h1 align-self-center" href="indexAdmin.php">
        <img  src="img/Arsevitec_logo.png">
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
            <div class="flex-fill">
                <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">Usuarios</a>
                    <ul class="dropdown-menu">    
                        <li><a class="dropdown-item" href="../view/CrearCuentaAdmin.php">Crear usuario</a>
                        <li><a class="dropdown-item" role="button" data-bs-toggle="modal" data-bs-target="#modalID">Editar Usuario</a><li>
                    </ul>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">Productos</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../view/AgregraProducto.php">Agregar Producto</a></li>
                        <li><a class="dropdown-item" href="../view/ListaProducto.php">Lista de Productos</a></li>
                    </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="sobre.html">Solicitud de Matenimiento</a>
                    </li>
                </ul>
            </div>
            <div class="navbar align-self-center d-flex">
                <a class="nav-icon position-relative text-decoration-none" href="#" onclick="cerrar()">
                    <i class="fa fa-fw fa-user text-dark mr-3"></i> Cerrar Sesion
                </a>
            </div>
        </div>
    </div>
</nav>
<div class="modal fade" id="modalID" tabindex="-1" aria-labelledby="Consultar" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-white" style="background-color: #630909;">
                <h5 class="modal-title">Editar Usuario</h5>
                <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="cedula" method="post">
                    <div class="form-group">
                        <label for="ID" class="form-label">Ingrese la Identificación del usuario a editar:</label>
                        <input type="text" class="form-control" name="ID" id="ID" required="true"/>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button class="btn btn-primary" type="submit" name="editar">Editar</button>
                    </div> 
                </form>
            </div>
        </div>
    </div>
</div>';
}

function NavbarUsua(){

    echo'  <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
    <div class="container text-light">
        <div class="w-100 d-flex justify-content-between">
            <div>
                <i class="fa fa-envelope mx-2"></i>
                <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">Arsevitec@company.com</a>
                <i class="fa fa-phone mx-2"></i>
                <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
            </div>
            <div>
                <a class="text-light" href="https://fb.com/templatemo" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw"></i></a>
            </div>
        </div>
    </div>
</nav>
    
    
    <nav class="navbar navbar-expand-lg navbar-light shadow">
    <div class="container d-flex justify-content-between align-items-center">
        <a class="navbar-brand text-success logo h1 align-self-center" href="index.html">
        <img  src="img/Arsevitec_logo.png">
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
            <div class="flex-fill">
                <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="view/index.html">Inicio</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="view/shop.html">Productos</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="sobre.html">Solicitud de Matenimiento</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Opciones
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="contactar.php">Contactenos</a></li>
                            <li><a class="dropdown-item" href="sobre.php">Quienes Somos?</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="navbar align-self-center d-flex">
            <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">    
                <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i> Carrito
            
            </a>
            <div id="carrito" class="dropdown-menu">
            <table id="lista-carrito" class="table">
                <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th></th>
                    </tr>
                </thead>w
                <tbody></tbody>
            </table>
            <a href="#" id="vaciar-carrito" class="button-vaciar">Vaciar Carrito</a>
            <a href="#" id="procesar-pedido" class="button-pedido">Procesar Compra</a>
        </div>
        </div>
                <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                    <div class="input-group">
                        <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                        <div class="input-group-text">
                            <i class="fa fa-fw fa-search"></i>
                        </div>
                    </div>
                </div>
                <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                    <i class="fa fa-fw fa-search text-dark mr-2"></i>
                </a>
                </li>
                <a class="nav-icon position-relative text-decoration-none" href="#">
                    <i class="fa fa-fw fa-user text-dark mr-3"></i> Iniciar Sesion
                    
                </a>
                
            </div>
        </div>
    </div>
</nav>';
}


function NavbarTecno(){

    echo'  <nav class="navbar navbar-expand-lg navbar-light shadow">
    <div class="container d-flex justify-content-between align-items-center">
        <a class="navbar-brand text-success logo h1 align-self-center" href="index.html">
        <img  src="img/Arsevitec_logo.png">
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
            <div class="flex-fill">
                <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Inicio</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="listasSolicitud.php">Listas de Matenimiento</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Opciones
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="Contactenos.php">Contactenos</a></li>
                            <li><a class="dropdown-item" href="#">Quienes Somos?</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="navbar align-self-center d-flex">
                <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                    <div class="input-group">
                        <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                        <div class="input-group-text">
                            <i class="fa fa-fw fa-search"></i>
                        </div>
                    </div>
                </div>
                <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                    <i class="fa fa-fw fa-search text-dark mr-2"></i>
                </a>
                <a class="nav-icon position-relative text-decoration-none" href="#">
                    <i class="fa fa-fw fa-user text-dark mr-3"></i> Cerrar Sesion
                    
                </a>
                
            </div>
        </div>
    </div>
</nav>';
}

function Footer(){

    echo ' <footer class="bg-dark" id="tempaltemo_footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 pt-5">
                <h2 class="h2 text-success border-bottom pb-3 border-light logo">Aservitec</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li>
                        <i class="fas fa-map-marker-alt fa-fw"></i>
                        123 Consectetur at ligula 10660
                    </li>
                    <li>
                        <i class="fa fa-phone fa-fw"></i>
                        <a class="text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
                    </li>
                    <li>
                        <i class="fa fa-envelope fa-fw"></i>
                        <a class="text-decoration-none" href="mailto:info@company.com">Aservitec@company.com</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 pt-5">
                <h2 class="h2 text-light border-bottom pb-3 border-light">Productos</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li><a class="text-decoration-none" href="#">Maquina Impresora</a></li>
                    <li><a class="text-decoration-none" href="#">Maquina Impresora</a></li>
                    <li><a class="text-decoration-none" href="#">Maquina Impresora</a></li>
                    <li><a class="text-decoration-none" href="#">Maquina Impresora</a></li>
                    <li><a class="text-decoration-none" href="#">Maquina Impresora</a></li>
                    <li><a class="text-decoration-none" href="#">Maquina Impresora</a></li>
                    <li><a class="text-decoration-none" href="#">Maquina Impresora</a></li>
                </ul>
            </div>
            <div class="col-md-4 pt-5">
                <h2 class="h2 text-light border-bottom pb-3 border-light">Info</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li><a class="text-decoration-none" href="#">Incio</a></li>
                    <li><a class="text-decoration-none" href="#">Quienes Somos?</a></li>
                    <li><a class="text-decoration-none" href="#"></a></li>
                    <li><a class="text-decoration-none" href="#">FAQs</a></li>
                    <li><a class="text-decoration-none" href="#">Contactenos</a></li>
                </ul>
            </div>
    <div class="w-100 bg-black py-3">
        <div class="container">
            <div class="row pt-2">
                <div class="col-12">
                    <p class="text-center text-light">
                        Copyright &copy; 2023 Aservitec
                        | Designed by <a rel="sponsored" href="" target="_blank">Grupo 9</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->';
}



function links(){

    echo'<
    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/templatemo.css">
    <link rel="stylesheet" href="css/custom.css">
    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="css/fontawesome.min.css">';
}
?>