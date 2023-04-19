<?php
include_once 'generales.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Aservitec- Agregar Producto</title>
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
<div>
    <form id="productos" method="post">
        <div id="details">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <h4>Nuevo Producto</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" name="nombre" required="true"/>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="cantidad" class="form-label">Cantidad</label>
                                    <input type="number" class="form-control" name="cantidad" required="true" min="1" value="1"/>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="precio" class="form-label">Precio</label>
                                    <input type="number" class="form-control" name="precio" required="true" min="5000" value="5000"/>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="descripcion" class="form-label">Descripción</label>
                                    <textarea name="descripcion" class="form-control" rows="3" required="true"></textarea>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="imagen" class="form-label">Imagen</label>
                                    <br>
                                    <input type="file" id="imagen" name="imagen" required="true"/>
                                </div>
                            </div>
                        </div>
                    </div>
                <div>
            </div>
        </div>
        <div id="actions" class="py-4 mb-4 bg-light">
            <div class="container">
                <div class="row">
                    <div class="d-grid col-md-2 mx-auto">
                        <a class="btn btn-secondary btn-block" href="IndexAdmin.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                            </svg> Regresar
                        </a>
                    </div>
                    <div class="d-grid col-md-2 mx-auto">
                        <button class="btn btn-success btn-block" type="submit" name="guadar">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                            </svg> Guardar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<?php 
scripts();
?>
</body>
</html>    