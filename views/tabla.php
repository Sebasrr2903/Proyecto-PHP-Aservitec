<?php
if (session_status() == PHP_SESSION_NONE)
    session_start();
include_once __DIR__ . '\..\Controller\UsuarioController.php';
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Proyecto web</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="view/css/index.css">
	</head>
	<body>
    <table class="table table-bordered" style="background-color: #ffffff;">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Usuario</th>
                                <th>Contraseña</th>
                                <th>NombreCompleto</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                ListarUsuarios();
                            ?>
                        </tbody>
                    </table>
	</body>
</html>
