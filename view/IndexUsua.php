<?php
include_once 'generales.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Aservitec- Crear Cuenta</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/templatemo.css">
    <link rel="stylesheet" href="css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="css/fontawesome.min.css">

    <!-- Load map styles -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
<!--
    

</head>

<body>
    <!-- Start Top Nav -->
  <?php
  NavbarN();
  ?>
   <section class="bg-success py-5" >
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-md-8 text-white">
                    <h1>Usuario</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="img/Arsevitec_logo.png" alt="About Hero">
                </div>
            </div>
        </div>
    </section>
    <section class="container py-5">
            <div class="row text-center pt-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Categoria de maquinas</h1>
                    <p>
                        Para adquirir estos productos necesitas "INICIAR SESION"
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 p-5 mt-3">
                    <a href="Productos.php"><img src="img/Maquina1.jpg"
                            class="rounded-circle img-fluid border"></a>
                    <h5 class="text-center mt-3 mb-3">Maquina</h5>
                    <p class="text-center"><a class="btn btn-success">Ve a productos!</a></p>
                </div>
                <div class="col-12 col-md-4 p-5 mt-3">
                    <a href="Productos.php"><img src="img/Maquina1.jpg"
                            class="rounded-circle img-fluid border"></a>
                    <h2 class="h5 text-center mt-3 mb-3">maquina</h2>
                    <p class="text-center"><a class="btn btn-success">Ve a productos!</a></p>
                </div>
                <div class="col-12 col-md-4 p-5 mt-3">
                    <a href="Productos.php"><img src="img/Maquina1.jpg"
                            class="rounded-circle img-fluid border"></a>
                    <h2 class="h5 text-center mt-3 mb-3">Maquina</h2>
                    <p class="text-center"><a class="btn btn-success">Ve a productos!</a></p>
                </div>
            </div>
        </section>
 
  
  

    <!-- Start Footer -->
   <?php footer();?>
    <!-- End Footer -->

    <!-- Start Script -->
 <?php 
  scripts();
  ?>
    <!-- End Script -->
</body>

</html>