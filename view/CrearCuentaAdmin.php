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
    <link rel="stylesheet" href="./css/custom.css">
    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- Load map styles -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
</head>
<body>
<!-- Start Top Nav -->
<?php NavbarAdmin();?>
<hr>
<div>
    <form id="datosAdmin" method="post">
        <div id="details">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <h4>Nuevo Usuario</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="Rol" class="form-label">Rol</label>
                                    <br>
                                    <select class="form_select" name="Rol" id="Rol" onfocus="llenarRol()">
                                        <option selected value='0'>--- Seleccione el Rol ---</option>
                                    </select>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="TipoId" class="form-label">Tipo de Identificación</label>
                                    <br>
                                    <select class="form_select" name="TipoId" id="TipoId" onfocus="llenarID()">
                                        <option selected value='0'>--- Seleccione el tipo de identicación ---</option>
                                    </select>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="Identificacion" class="form-label">Identificación</label>
                                    <input type="text" class="form-control" name="Identificacion" required="true"/>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" name="nombre" required="true"/>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="correo" class="form-label">Correo</label>
                                    <input type="email" class="form-control" name="correo" id="correo" required="true"/>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="telefono" class="form-label">Telefono</label>
                                    <input type="tel" class="form-control" name="telefono" required="true"/>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="Provincia" class="form-label">Provincia</label>
                                    <br>
                                    <select class="form_select" name="Provincia" id="Provincia" onfocus="llenarProvincias()" onclick="cambiarProvincia(this.value)">
                                        <option selected value='0'>--- Seleccione la provincia ---</option>
                                    </select>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="Canton" class="form-label">Canton</label>
                                    <br>
                                    <select class="form_select" name ="Canton" id="Canton" onclick="cambiarCanton(this.value)">
                                        <option selected value='0'>--- Seleccione el canton ---</option>
                                    </select>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="Distrito" class="form-label">Distrito</label>
                                    <br>
                                    <select class="form_select" name ="Distrito" id="Distrito">
                                        <option selected value='0'>--- Seleccione el distrito ---</option>
                                    </select>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="direccion" class="form-label">Dirección exacta</label>
                                    <textarea name="direccion" class="form-control" rows="3" required="true"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="actions" class="py-4 mb-4 bg-light">
            <div class="container">
                <div class="row">
                    <div class="d-grid col-md-2 mx-auto">
                        <a class="btn btn-secondary btn-block" href="../view/IndexAdmin.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                            </svg> Regresar
                        </a>
                    </div>
                    <div class="d-grid col-md-2 mx-auto">
                        <button type="button" class="btn btn-success btn-block" data-bs-toggle="modal" data-bs-target="#modalContra">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                            </svg> Guardar
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalContra" tabindex="-1" aria-labelledby="Guardar" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-white" style="background-color: #630909;">
                        <h5 class="modal-title">Establecer Contraseña</h5>
                        <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="contrasenna" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" name="pass" id="pass" required="true"/>
                        </div>
                        <div class="form-group">
                            <label for="Rcontrasenna" class="form-label">Repitir Contraseña</label>
                            <input type="password" class="form-control" name="pass2" id="pass2" required="true"/>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" type="submit" name="guadar">
                                Listo
                            </button>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
    <!-- Start Content Page -->
    <!-- End Contact -->
    <!-- Start Script -->
 <?php 
  scripts();
  ?>
    <!-- End Script -->
</body>
</html>