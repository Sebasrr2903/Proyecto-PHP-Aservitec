<?php
include_once 'generales.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Aservitec- Administrador</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/templatemo.css">
    <link rel="stylesheet" href="css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="css/fontawesome.min.css">

    <!-- Load map styles -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
<!--
    

</head>

<body>
<<<<<<< Updated upstream
	<nav class="navbar navbar-expand-lg bg-body-tertiary">
		<div class="container-fluid">
			<a class="navbar-brand" href="#"><img src="img/ASERVITEC.png" alt="20%" width="30%">BIENVENIDO ADMINISTRADOR</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mx-auto ">
					<li class="nav-item">
						<a class="nav-link" href="IndexAdmin.php">Inicio</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="">Productos</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="view/Solicitud.php">Solicitud de Matenimiento</a>
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
							<li><a class="dropdown-item" href="Contactenos.php">Contactenos</a></li>
							<li><a class="dropdown-item" href="#">Quienes Somos?</a></li>

						</ul>
					</li>
				</ul>
				<hr>
				<div class="nav-item"> <button class="btn btn-outline-success me-2 boton" type="button"><a
							class="a_boton" href="../index.php" onblur="closeSession();">Cerrar Sesion</a></button>
				</div>
			</div>
		</div>
	</nav>

	<div id="carouselExample" class="carousel slide">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="img/wecare_logo (2).png" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="img/wecare_logo (2).png" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="img/wecare_logo (2).png" class="d-block w-100" alt="...">
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
=======
    <!-- Start Top Nav -->
  <?php
  NavbarAdmin();
  ?>
    <section class="bg-success py-5" >
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-md-8 text-white">
                    <h1>Administrador</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="img/Arsevitec_logo.png" alt="About Hero">
                </div>
            </div>
        </div>
    </section>
>>>>>>> Stashed changes




    <!-- Start Footer -->
   <?php footer();?>
    <!-- End Footer -->

    <!-- Start Script -->
 <?php 
  scripts();
  ?>
    <!-- End Script -->
</body>

</html>