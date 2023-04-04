<?php

include_once 'generales.php';
include_once __DIR__ . '/../Model/UsuarioModel.php';

session_start();


?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aservitec-Inicio Sesion</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    
	<link  href="css/sign-in.css" rel="stylesheet">

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
			<a href="crearCuenta.php">Crear Cuenta</a>
		</form>
		
	</body>

</html>