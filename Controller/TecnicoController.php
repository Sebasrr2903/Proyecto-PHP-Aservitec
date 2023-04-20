<?php
include_once '../Model/TecnicoModel.php';
session_start();
switch($_GET["op"]){
    case "lista":
        ListaTecnicos();
        break;
    case "listaC":
        ListaTecnicosC();
        break;
    case "info":
        $usuario=Tecnico::consultar($_GET["id"]);
        foreach($usuario as $row){
            $correo=$row["username"];
        }
        $datos=Tecnico::datos($correo);
        foreach($datos as $row){
            $nombre=$row["Nombre"];
        }
        echo '<div class="form-group">
                <label for="IDMante" class="form-label">ID del mantenimiento:</label>
                <input type="number" class="form-control" name="IDMante" id="IDMante" value="'.$_GET["numero"].'" disabled/>
            </div>';
        echo '<div class="form-group">
                <label for="tecnico" class="form-label">Tecnico:</label>
                <input type="text" class="form-control" name="tecnico" id="tecnico" value="'.$nombre.'" disabled/>
            </div>';
        echo '<div class="form-group">
                <label for="fecha" class="form-label">Fecha Asignada:</label>
                <input type="text" class="form-control" name="fecha" id="fecha" value="'.$_GET["date"].'" disabled/>
            </div>';
        break;
    case "calendario":
        $calendario=Tecnico::calendario($_GET["id"]);
        if($calendario!=null){
            header("Content-Type: application/json");
            $_SESSION["lista"]=(json_encode($calendario));
        }else{
            $_SESSION["lista"]=" ";
        }
        break;
}
function ListaTecnicos(){
    $lista=Tecnico::tecnicos();
    if($lista!=null){
        echo '<table class="table table-striped">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>Identificación</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Calendario de Trabajo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>';
        foreach($lista as $row){
            $_SESSION["idTecnico"]=$row["Usuario_ID"];
            $datos=Tecnico::datos($row["username"]);
            foreach($datos as $row2){
                echo '<td>'.$row2["Identificacion"].'</td>'.
                '<td>'.$row2["Nombre"].'</td>'.
                '<td>'.$row2["Correo"].'</td>';
            }
            echo '<td><a href="../view/Calendario.php" class="btn btn-success">Asignar Mantenimiento</a></td>';
        }
    }else{
        echo 'No hay tecnicos registrados';
    }
}
function ListaTecnicosC(){
    $lista=Tecnico::tecnicos();
    if($lista!=null){
        echo '<table class="table table-striped">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>Identificación</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Calendario de Trabajo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>';
        foreach($lista as $row){
            $_SESSION["idTecnico"]=$row["Usuario_ID"];
            $datos=Tecnico::datos($row["username"]);
            foreach($datos as $row2){
                echo '<td>'.$row2["Identificacion"].'</td>'.
                '<td>'.$row2["Nombre"].'</td>'.
                '<td>'.$row2["Correo"].'</td>';
            }
            echo '<td><a href="../view/CalendarioTecnico.php" class="btn btn-primary">Ver Calendario de trabajo</a></td>';
        }
    }else{
        echo 'No hay tecnicos registrados';
    }
}
?>