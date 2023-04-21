<?php
include_once 'generales.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Aservitec</title>
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
    
   </head>

<body>
    <!-- Start Top Nav -->
  <?php
  NavbarUsua();
  ?>
        <section class="container py-5">
            <div class="row text-center pt-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Categoria de maquinas</h1>
                    <p>
                        Para adquirir estos productos necesitas "INICIAR SESION"
                    </p>
                </div>
            </div>
            <div class="row" id="Productos">

               
                
            </div>
        </section>
    <!-- Start Con
  
    <!-- Start Footer -->
   <?php footer();?>
    <!-- End Footer -->

    <!-- Start Script -->
 <?php 
  scripts();
  ?>
  <script>
    infoProducto();
</script>
    <!-- End Script -->
</body>

</html>