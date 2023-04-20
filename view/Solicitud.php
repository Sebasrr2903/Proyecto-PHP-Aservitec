<?php
include_once 'generales.php';
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
</head>
<body>
    <!-- Start Top Nav -->
  <?php
  NavbarN();
  ?>
    <!-- Close Header -->

    <div class="container-contacto">
  <form id="solicitud" method="POST">
    <h2>Solicitud de Matenimiento</h2>
    <br>
    <input type="text" name="cliente" id="nombre" placeholder="Ingrese su Nombre" required>
    <input type="text" name="correo" id="correo" placeholder="Ingrese su Correo" required>
    <input type="text" name="celular" id="celular" placeholder="Ingrese su Telefonó" required>
    <textarea name="descripcion" placeholder="Escriba su Mensaje" required></textarea>
    <a>Subir imagen de la pieza/equipo(opcional)</a>
    <br>
    <br>
    <input class="text-light" type="file" id="imagen" name="imagen"/>
    <input type="submit" id="button-contacto" value="ENVIAR" class="button">
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