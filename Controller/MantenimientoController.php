<?php
include_once '../Model/MantenimientoModel.php';
include_once '../Model/UsuarioModel.php';
session_start();
switch($_GET["op"]){
    case "insertar":
        $usuario=User::mostrar($_POST["correo"]);
        $fecha=date("d-m-Y h:i:s");
        if($usuario==null){
            echo 1;
        }else{
            if($_FILES["imagen"]["name"]==null){
                Mantenimiento::insertar($_POST["cliente"],$_POST["correo"],
                $_POST["celular"],$_POST["descripcion"],"vacio",false,$fecha,0,"sin asignar","sin asignar");
                echo 2;
            }else{
                $tipo=$_FILES["imagen"]["type"];
                if(!(strpos($tipo, "png")||strpos($tipo, "jpeg")||strpos($tipo, "webp"))){
                    echo 3;
                }else{
                    if(strpos($tipo,"png")){
                        $extencion=".png";
                    }else if(strpos($tipo, "jpeg")){
                        $extencion=".jpg";
                    }else if(strpos($tipo, "webp")){
                        $extencion=".webp";
                    }
                    $ruta='../view/img/'.$fecha.$extencion;
                    move_uploaded_file($_FILES["imagen"]["tmp_name"],$ruta);
                    Mantenimiento::insertar($_POST["cliente"],$_POST["correo"],
                    $_POST["celular"],$_POST["descripcion"],$ruta,false,$fecha,0,"sin asignar","sin asignar");
                    echo 2;
                }
            }
        }
        break;
    case "lista":
        listaSolocitud();
        break;
    case "aprobar":
        Mantenimiento::aprobar($_GET["numero"]);
        listaSolocitud();
        break;
}
function listaSolocitud(){
    $lista=Mantenimiento::noAprobado();
    $i=0;
    if($lista!=null){
        echo '<table class="table table-striped">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>#</th>
                        <th>Cliente</th>
                        <th>Correo</th>
                        <th>Descripción</th>
                        <th>Fecha</th>
                        <th>Imagen</th>
                        <th>Aprobar</th>
                        <th>Rechazar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>';
        foreach($lista as $row){
            $i=$i+1;
            $_SESSION["id_mant"]=$row["id"];
            echo '<td>'.$i.'</td>'.
                '<td>'.$row["nombre"].'</td>'.
                '<td>'.$row["correo"].'</td>'.
                '<td>'.$row["title"].'</td>'.
                '<td>'.$row["fecha"].'</td>';
            if($row["imagen"]=="vacio"){
                echo '<td>No subio</td>';
            }else{
                echo '<td><img src="'.$row["imagen"].'" width="100"/></td>';
            }
            echo '<td><a href="../view/ListaTecnicos.php" class="btn btn-primary">Aprobar</a></td>'.
            '<td><a href="#" class="btn btn-danger">Rechazar</a></td>';
        }
    }else{
        echo 'No hay solicitudes sin aprobar';
    }
}
?>