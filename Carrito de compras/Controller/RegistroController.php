<?php
require_once '../Model/RegistroModel.php';
switch($_GET["op"]){
    case 'llenarID':
        $resultado=RegistroModel::mostrarID();
        echo "<option selected value='0'>--- Seleccione el tipo de identicación ---</option>";
        foreach($resultado as $row){
            echo "<option>".$row['Tipo']."</option>";
        }
        break;
    case 'llenarProvincias':
        $resultado=RegistroModel::mostrarProvincia();
        echo "<option selected value='0'>--- Seleccione la provincia ---</option>";
        foreach($resultado as $row){
            echo "<option>".$row['Nombre']."</option>";
        }
        break;
    case 'CambioProvincia':
        $resultado=RegistroModel::mostrarID_Provincia($_GET["name"]);
        foreach($resultado as $row){
            $id=$row["Provincia_ID"];
        }
        $resultado2=RegistroModel::mostrarCanton($id);
        echo "<option selected value='0'>--- Seleccione el canton ---</option>";
        foreach($resultado2 as $row){
            echo "<option>".$row['Nombre']."</option>";
        }
        break;
    case 'CambioCanton':
        $resultado=RegistroModel::mostrarID_Provincia($_GET["id"]);
        foreach($resultado as $row){
            $id=$row["Provincia_ID"];
        }
        $resultado2=RegistroModel::mostrarID_Canton($_GET["name"],$id);
        foreach($resultado2 as $row){
            $id_canton=$row["Canton_ID"];
        }
        $resultado3=RegistroModel::mostrarDistrito($id_canton);
        echo "<option selected value='0'>--- Seleccione el distrito ---</option>";
        foreach($resultado3 as $row){
            echo "<option>".$row['Nombre']."</option>";
        }
}
?>