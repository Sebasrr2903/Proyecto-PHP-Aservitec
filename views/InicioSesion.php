<?php
include_once 'General.php';

?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Proyecto web</title>
	<?php
	links();
	?>
	<link  href="dist/css/sign-in.css" rel="stylesheet">
	<script src="../js/LoginController.js"></script>

</head>

	<body>
		
	
		<form onsubmit="LoginRequest()" method="POST">
			

			<h1>Inicio Sesión</h1>
			<hr>
			<i class="fa-solid fa-user"></i>
			<label>Usuario</label>
			<input id='user' type="text" name="Usuario" placeholder="Nombre de Usuario" >

			<i class="fa-solid fa-unlock"></i>
			<label>Contraseña</label>
			<input  id='pass' type="password" name="Contraseña" placeholder="Contraseña">
			<hr>
			<button type="submit
				">Iniciar Sesión</button>
			<a href="CrearCuenta.php">Crear Cuenta</a>
		</form>
		
	</body>

</html>