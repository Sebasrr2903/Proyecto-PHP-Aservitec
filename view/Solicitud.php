<?php
include_once 'General.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Proyecto web</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
		integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link  href="css/Solicitud.css" rel="stylesheet">

</head>

<body>
  <div> 
<?php
navBarUni();
?>
  
</div>

<h1 class="titulo">Solicitud</h1>
  <div class="form-floating mb-1">
    <input type="email" class="form-control" id="floatingInputDisabled" placeholder="name@example.com">
    <label for="floatingInputDisabled">Email:</label>
  </div>

  <div class="form-floating mb-1">
    <input type="email" class="form-control" id="floatingInputDisabled" placeholder="name@example.com">
    <label for="floatingInputDisabled">Nombre:</label>
  </div>
  <div class="form-floating mb-1">
    <input type="email" class="form-control" id="floatingInputDisabled" placeholder="name@example.com">
    <label for="floatingInputDisabled">Apellidos:</label>
  </div>
  <div class="form-floating mb-1">
    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2Disabled"
      style="height: 100px"></textarea>
    <label for="floatingTextarea2Disabled">Informacion:</label>
  </div>
  <div class="form-floating">
    <select class="form-select" id="floatingSelectDisabled" aria-label="Floating label disabled select example">
      <option value="1">Matenimiento</option>
      <option value="2">Revision</option>
    </select>
    <label for="floatingSelectDisabled">Seleccione tipo que solicita:</label>
  </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>