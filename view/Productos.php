<?php
include_once 'generales.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Aservitec- Contactatenos</title>
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
   
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
      $.ajax({
        url: "../controller/ProductosController.php", 
        type: "POST",
        dataType:"JSON",
        success: function(resultado) {
          mostrarProductos(resultado);
        },
        error: function(xhr, status, error) {
          console.log("Error al cargar los productos: " + error);
          alert(error);
        }
      });
    });

    function mostrarProductos(productos) {
      var listaProductos = $("#lista-productos");
      const productList = document.getElementById('product-list');
      var prueba=$("#container");
      listaProductos.empty();
      $.each(productos, function(i, producto) {
        const productCard = `
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
              <a href="#"><img class="card-img-top" src="https://www.zebra.com/content/dam/zebra_new_ia/en-us/solutions-verticals/product/Printers/Industrial%20Printers/zt600-industrial-printer/photograph-web/zt610-photography-website-left-touch-screen-1x1-350x350.jpg"></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">${producto.Nombre}</a>
                  </h4>
                  <h5>Precio: ${producto.Precio}</h5><br>
                  <h5>Descripción</h5>
                  <p class="card-text">${producto.Descripcion}</p>
                </div>
                <div class="card-footer">
                  <button type="button" class="btn btn-primary">Agregar al carrito</button>
                </div>
              </div>
            </div>
          `;
          productList.innerHTML += productCard;
        });
      }
  </script>
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