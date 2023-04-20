<?php
require_once '../Model/RegistroModel.php';
switch($_GET["op"]){
    case 'llenarID':
        $resultado=RegistroModel::mostrarID();
        echo "<option selected value='0'>--- Seleccione el tipo de identicación ---</option>";
        foreach($resultado as $row){
            echo "<option value='".$row['Tipo_Identificacion_ID']."'>".$row['Tipo']."</option>";
        }
        break;
    case 'llenarProvincias':
        $resultado=RegistroModel::mostrarProvincia();
        echo "<option selected value='0'>--- Seleccione la provincia ---</option>";
        foreach($resultado as $row){
            echo "<option value='".$row['Provincia_ID']."'>".$row['Nombre']."</option>";
        }
        break;
    case 'CambioProvincia':
        $resultado=RegistroModel::mostrarCanton($_GET["numero"]);
        echo "<option selected value='0'>--- Seleccione el canton ---</option>";
        foreach($resultado as $row){
            echo "<option value='".$row['Canton_ID']."'>".$row['Nombre']."</option>";
        }
        break;
    case 'CambioCanton':
        $resultado=RegistroModel::mostrarDistrito($_GET["numero"]);
        echo "<option selected value='0'>--- Seleccione el distrito ---</option>";
        foreach($resultado as $row){
            echo "<option value='".$row['Distrito_ID']."'>".$row['Nombre']."</option>";
        }
        break;
    case 'llenarRol':
        $resultado=RegistroModel::mostrarRol();
        echo "<option selected value='0'>--- Seleccione el Rol ---</option>";
        foreach($resultado as $row){
            echo "<option value='".$row["Rol_ID"]."'>".$row['Nombre']."</option>";
        }
        break;
}
?>