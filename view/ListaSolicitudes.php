<?php
include_once 'generales.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Aservitec- Lista Solicitudes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/templatemo.css">
    <link rel="stylesheet" href="./css/custom.css">
    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- Load map styles -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
</head>
<body>
<?php
NavbarAdmin();
?>
<hr>
<section>
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-body">
                            <h5>Lista de solicitudes no aprobadas</h5>
                        </div>
                        <div id="listaSolocitud">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
scripts();
?>
<script>
    listaSolocitud();
</script>
</body>
</html>