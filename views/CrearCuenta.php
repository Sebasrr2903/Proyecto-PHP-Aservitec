<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Formulario de Registro Usuario</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="dist/css/Registro.css">
    </head>
    <body>
        <div class="banner">
            <a href="../index.php"><img class="logo" src="dist/img/wecare_logo (2).png"/><a>
        </div>
        <div class="formulario">
            <form name="datos" method="post" class="was_validated">
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
                                            <input type="email" class="form-control" name="correo" required="true"/>
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
                                            <select class="form_select" name ="Provincia" id="Provincia" onfocus="llenarProvincias()" onclick="cambiarProvincia(this.value)">
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
                                            <label for="Distrto" class="form-label">Distrito</label>
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
                                <a class="btn btn-secondary btn-block">
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
                            <div class="modal-header text-white banner" >
                                <h5 class="modal-title">Establecer Contraseña</h5>
                                <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="contrasenna" class="form-label">Contraseña</label>
                                    <input type="password" class="form-control" name="contrasenna" required="true"/>
                                </div>
                                <div class="form-group">
                                    <label for="Rcontrasenna" class="form-label">Repitir Contraseña</label>
                                    <input type="password" class="form-control" name="Rcontrasenna" required="true"/>
                                </div>
                                <div class="modal-footer">
                                <button class="btn btn-primary" type="sumit" name="guadar">
                                    Listo
                                </button>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
        crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.js" 
        integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" 
        crossorigin="anonymous"></script>
        <script src='dist/js/Registro.js'></script>                                        
    </body>
</html>