<?php
include_once 'views/General.php';
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Proyecto web</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css"
		href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
		integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
		crossorigin="anonymous" referrerpolicy="no-referrer">
	<link rel="stylesheet" href="views/dist/css/index.css">



</head>



<body>
	<nav class="navbar navbar-expand-lg bg-body-tertiary">
		<div class="container-fluid">
			<a class="navbar-brand" href="#"><img src="views/dist/img/ASERVITEC.png" alt="20%" width="30%"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mx-auto ">
					<li class="nav-item">
						<a class="nav-link" href="index.php">Inicio</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="">Productos</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="views/Solicitud.php">Solicitud de Matenimiento</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href=""><i class="fa-solid fa-cart-shopping"></i>Carrito</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
							aria-expanded="false">
							Opciones
						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="views/Contactenos.php">Contactenos</a></li>
							<li><a class="dropdown-item" href="#">Quienes Somos?</a></li>

						</ul>
					</li>
				</ul>
				<hr>
				<div class="nav-item"> <button class="btn btn-outline-success me-2 boton" type="button"><a
							class="a_boton" href="views/InicioSesion.php">Iniciar sesión</a></button>
				</div>
			</div>
		</div>
	</nav>

	<div id="carouselExample" class="carousel slide">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="views/dist/img/wecare_logo (2).png" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="views/dist/img/wecare_logo (2).png" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="views/dist/img/wecare_logo (2).png" class="d-block w-100" alt="...">
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>




	<?php
	footer();
	?>


</body>

<?php
Scripts()
	?>

</html>