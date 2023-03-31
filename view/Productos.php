<?php
include_once 'General.php';

session_start();

?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="es"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Contactenos">
    <meta name="description" content="">
    <title>Contacto</title>
    <link rel="stylesheet" href="dist/css/niceContactenos.css" media="screen">
    <link rel="stylesheet" href="dist/css/Contacto.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.6.16, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <?php

  links();
  ?>
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Contacto">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <?php

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
  
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <body class="u-body u-xl-mode" data-lang="es">


<?php
  navbar();
  ?>
<div class="u-align-center u-clearfix u-container-align-center u-gradient u-section-1"></br>

<div class="u-align-center u-clearfix u-container-align-center u-gradient u-section-1" >
    <h1 class="u-align-center u-text u-text-body-alt-color u-text-default u-text-1">Productos</h1>
    <div id="product-list" class="row"></div>
  </div>
  </div>
   <?php
  Footer();
  ?>

  
   
  </body>