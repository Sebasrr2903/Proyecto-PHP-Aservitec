<?php
include_once 'generales.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Aservitec- Lista Tecnicos</title>
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
<div class="container">
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-9">
            <div id="calendar"></div>
            <br>
        </div>
        <div class="col-md-1">
        </div>
    </div>
</div>
<?php 
scripts();
?>
<script>
    calendarioTecnico(<?php echo $_SESSION["idTecnico"]?>);
    calendarioTec(<?php echo $_SESSION["lista"]?>);
</script>
</body>
</html>