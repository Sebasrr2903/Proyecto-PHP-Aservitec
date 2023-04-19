<?php
include_once 'generales.php';
include_once __DIR__ . '\..\Controller\SolicitudController.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Aservitec- Solicitud de Matenimiento</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/templatemo.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/style.css">

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
    <!-- Close Header -->

    <div class="container-contacto">
  <form action="#" id="form" method="POST">
    <h2>Solicitud de Mantenimiento</h2>
    <br>
    <input type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre" onkeypress="return sololetras(event)" onpaste="return false" required>
    <input type="text" name="apellidos" id="apellidos" placeholder="Ingrese su apellido" required>
    <input type="email" name="correo" id="correo" placeholder="Ingrese su correo electronico" required>
    <input type="telephone" name="telefono" id="telefono" placeholder="Ingrese su telefono" required>
    <textarea name="descripcion" id="descripcion" placeholder="Escriba la descripcion de la Atencion" required></textarea>
    <input type="submit" id="btnGuardar" name="btnGuardar"value="Guadar" class="button" >
  </form>
  </div>

    <!-- End Contact -->


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