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
        <div class="col-md-2">
            <!--  Modal trigger button  -->
            <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modalEvento">
                Launch
            </button>
            <!-- Modal Body-->
            <div class="modal fade" id="modalEvento" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                            <div class="modal-header text-white" style="background-color: #630909;">
                                    <h5 class="modal-title" id="modalTitleId">Modal title</h5>
                                    <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <form id="calendarioFecha" method="post">
                                    <div id="infoCalendario"></div>
                                    <div class="form-group">
                                        <label for="hora" class="form-label">Hora asignada:</label>
                                        <input type="time" class="form-control" name="hora" id="hora" required="true"/>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div id="calendar"></div>
            <br>
        </div>
        <div class="col-md-2">
        </div>
    </div>
</div>
<?php 
scripts();
?>
<script>
    calendario(<?php echo $_SESSION["id_mant"]?>,<?php echo $_SESSION["idTecnico"]?>);
</script>
</body>
</html>