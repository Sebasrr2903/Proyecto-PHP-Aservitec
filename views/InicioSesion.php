<?php

include_once 'General.php';
include_once __DIR__ . '/../Model/UsuarioModel.php';

session_start();


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

</head>

	<body>
		
	
		<form action="" method="POST">
		

			<h1>Inicio Sesión</h1>
			<hr>
			<?php
			if (isset($_GET['error'])){
				?>
				<p class="erro"></p>
				<?php
				echo $_GET['error'];
			
		?>
		<?php
			}
			?>
			
			<hr>
			<i class="fa-solid fa-user"></i>
			<label>Usuario</label>
			<input type="text" name="username" placeholder="Nombre de Usuario" >

			<i class="fa-solid fa-unlock"></i>
			<label>Contraseña</label>
			<input type="password" name="password" placeholder="Contraseña">
			<hr>
			<button type="submit
				" value="Ingresar" name="btnIngresar">Iniciar Sesión</button>
			<a href="CrearCuenta.php">Crear Cuenta</a>
		</form>
		
	</body>

</html>