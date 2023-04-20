<?php
include_once '../Model/ProductosModel.php';
session_start();
  switch($_GET["op"]){
    case 'insertar':
      $tipo=$_FILES["imagen"]["type"];
      if(!(strpos($tipo, "png")||strpos($tipo, "jpeg")||strpos($tipo, "webp"))){
        echo 'null';
      }else{
        $resultado=Producto::contar();
        $i=1;
        if(strpos($tipo,"png")){
          $extencion=".png";
        }else if(strpos($tipo, "jpeg")){
          $extencion=".jpg";
        }else if(strpos($tipo, "webp")){
          $extencion=".webp";
        }
        if($resultado!=null){
          foreach($resultado as $row){
            $i=$row["id"];
          }
          $nombre_archivo="Producto".$i+1;
        }else{
          $nombre_archivo="Producto".$i;
        }
        $ruta='../view/img/'.$nombre_archivo.$extencion;
        move_uploaded_file($_FILES["imagen"]["tmp_name"],$ruta);
        Producto::insertar($_POST["nombre"],$_POST["cantidad"],$_POST["precio"],$_POST["descripcion"],$ruta);
      }
      break;
    case "lista":
      ListaProductos();
      break;
    case "eliminar":
      $producto=Producto::mostrar($_GET["id"]);
      foreach($producto as $row){
        $ruta=$row["imagen"];
      }
      unlink($ruta);
      Producto::eliminar($_GET["id"]);
      ListaProductos();
      break;
    case "actualizar":
      $producto=Producto::mostrar($_GET["id"]);
      foreach ($producto as $row){
        $nombre=$row["nombre"];
        $cantidad=$row["cantidad"];
        $descripcion=$row["descripcion"];
        $ruta=$row["imagen"];
        $precio=$row["precio"];
      }
      echo '<input type="hidden" name="id" value="'.$_GET["id"].'"/>'.
            '<input type="hidden" name="ruta" value="'.$ruta.'"/>'.
            '<div class="mb-3 form-group">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" class="form-control" name="nombre" required="true" value="'.$nombre.'"/>
            </div>
            <div class="mb-3 form-group">
              <label for="cantidad" class="form-label">Cantidad</label>
              <input type="number" class="form-control" name="cantidad" required="true" min="1" value="'.$cantidad.'"/>
            </div>            
            <div class="mb-3 form-group">
              <label for="precio" class="form-label">Precio</label>
              <input type="number" class="form-control" name="precio" required="true" min="5000" value="'.$precio.'"/>
            </div>           
            <div class="mb-3 form-group">
              <label for="descripcion" class="form-label">Descripción</label>
              <textarea name="descripcion" class="form-control" rows="3" required="true">'.$descripcion.'</textarea>
            </div>            
            <div class="mb-3 form-group">
              <label for="imagen" class="form-label">Imagen actual</label>
              <br>
              <img src="'.$ruta.'" width="100"/>
              <br>
              <br>
              <input type="file" id="imagen" name="imagen" value="0"/>
            <div>';
        break;
      case "editar":
        if($_FILES["imagen"]["name"]==null){
          Producto::actualizar($_POST["id"],$_POST["nombre"],$_POST["cantidad"],$_POST["precio"],$_POST["descripcion"]);
        }else{
          $tipo=$_FILES["imagen"]["type"];
          if(!(strpos($tipo, "png")||strpos($tipo, "jpeg")||strpos($tipo, "webp"))){
            echo 'null';
          }else{
            echo '1';
            unlink($ruta);
            move_uploaded_file($_FILES["imagen"]["tmp_name"],$_POST["ruta"]);
            Producto::actualizar($_POST["id"],$_POST["nombre"],$_POST["cantidad"],$_POST["precio"],$_POST["descripcion"]);
          }
        }
        break; 
      case "info":
        $producto=Producto::mostrar($_GET["id"]);
        foreach ($producto as $row){
          $nombre=$row["nombre"];
          $cantidad=$row["cantidad"];
          $descripcion=$row["descripcion"];
          $ruta=$row["imagen"];
          $precio=$row["precio"];
        }
        echo '<img src="'.$ruta.'" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">'.$nombre.'</h5>
                <p class="card-text">'.$descripcion.'</p>
                <p class="card-text">Cantidad: '.$cantidad.'</p>
                <p class="card-text">Precio: '.$precio.'</p>
              </div>';
              break; 
      case "infoProducto":
           $producto=Producto::contar();
           foreach ($producto as $row){
               
                echo '
                <div class="row">
                    <div class="col-12 col-md-4 p-5 mt-3">
                        <a href="#"><img src="'.$row["imagen"].'"
                              class="rounded-circle img-fluid border"></a>
                        <h5 class="text-center mt-3 mb-3">' .$row["nombre"].'</h5>
                        <p class="text-center">'.$row["descripcion"].'</p>
                        <p class="text-center">Precio: '.$row["precio"].'</p>
                        <p class="text-center"><a class="btn btn-success">Comprar!</a></p>
                    </div>';
                  }
  }
  function ListaProductos(){
    $lista=Producto::contar();
    $i=0;
    if($lista!=null){
      echo '<table class="table table-striped">
              <thead class="bg-primary text-white">
                <tr>
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Cantidad</th>
                  <th>Precio</th>
                  <th>Imagen</th>
                  <th>Eliminar</th>
                  <th>Actualizar</th>
                  <th>Informacion</th>
                </tr>
              </thead>
              <tbody>
                <tr>';
      foreach($lista as $row){
        $i=$i+1;
        $_SESSION["numero"]=$row["id"];
        echo '<td>'.$i.'</td>'.
        '<td>'.$row["nombre"].'</td>'.
        '<td>'.$row["cantidad"].'</td>'.
        '<td>'.$row["precio"].'</td>'.
        '<td><img src="'.$row["imagen"].'" width="100"/></td>'.
        '<td><a href="#" class="btn btn-danger" onclick="eliminar('.$row["id"].')"><i class="fas fa-trash"></i>Eliminar</a></td>'.
        '<td><a href="../view/ActualizarProducto.php" class="btn btn-success")"><i class="fas fa-pencil"></i>Actualizar</a></td>'.
        '<td><a role="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalInfo" onclick="info('.$row["id"].')">Ver Información</a></td>';
      }
    }else{
      echo 'No tenemos productos que mostrar';
    }
  }
  
  


