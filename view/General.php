<?php
function links()
{
    echo '
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />';
}
function Scripts(){
  echo '
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
	crossorigin="anonymous"></script>';
}
function StyleEx()
{
    echo '<style>
    
   
.boton{
  border-radius: 20px;
  background-color: rgb(128, 42, 59);
  border-style: none;
}
.boton:hover{
  background-color: #ce5f64;
}
.a_boton{
  color: rgb(255, 255, 255);
  text-decoration: none;
}
#img{
	height: 10;
	width: 10;
} 

#mensajito{
	color: black;
	font-size: 17px;
	width: 40%;
	margin: 0px auto;
}
#img_footer2{
	height: 150px;
	width: 80%;
border-radius: 150px;
  transition: transform 0.5s;

}
#titulo{
	color: black;
}
#titulo2{
	color:black;
}
#mensajito2{
	color: black;
}
#cont{
	background-color: #F9305D;
}

</style>';

}

function navbar()
{
    echo '

    
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="color:blue;">
    <div class="container-fluid">
        <a class="navbar-brand me-auto" href="#"><img src="img/ASERVITEC.png" alt="20%"
                width="30%"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto ">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Inicio</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="">Productos</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="Solicitud.php">Solicitud de Matenimiento</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=""><i
                            class="fa-solid fa-cart-shopping"></i>Carrito</a>
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
            <div class="nav-item ms-auto"> <button class="btn btn-outline-success me-2 boton"
                    type="button"><a
                        class="a_boton" style=""
                        href="InicioSesion.php">Iniciar sesión</a></button>
            </div>
        </div>
    </div>
</nav>';
}



function Footer()
{
    echo '
    

  ';



}

?>