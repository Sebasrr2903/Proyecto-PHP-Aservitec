<?php
include_once '../Model/UsuarioModel.php';
include_once '../Model/RegistroModel.php';
switch($_GET["op"]){
    case "validar":
        $correo=$_POST["email"];
        $encontrado=User::mostrar($correo);
        if($encontrado!=null){
            echo 1;
        }else{
            echo 'null';
        }
        break;
    case "insertar":
        $pass=password_hash($_POST["pass"],PASSWORD_BCRYPT);
        User::insertar($_POST["correo"],$pass,2);
        $resultado=RegistroModel::mostrarID_Tipo($_POST["TipoId"]);
        foreach($resultado as $row){
            $tipoID=$row["Tipo_Identificacion_ID"];
        }
        $resultado2=RegistroModel::mostrarID_Provincia($_POST["Provincia"]);
        foreach($resultado2 as $row){
            $idProvincia=$row["Provincia_ID"];
        }
        $resultado3=RegistroModel::mostrarID_Canton($_POST["Canton"],$idProvincia);
        foreach($resultado3 as $row){
            $idCanton=$row["Canton_ID"];
        }
        $resultado4=RegistroModel::mostrarID_Distrito($_POST["Distrito"],$idCanton);
        foreach($resultado4 as $row){
            $idDistrito=$row["Distrito_ID"];
        }
        User::insertar_datos($_POST["Identificacion"],$tipoID,$_POST["nombre"],
        $_POST["correo"],$_POST["telefono"],$idProvincia,$idCanton,$idDistrito,$_POST["direccion"]);
        break;
}







function ListarUsuarios()
{
    $stmt= ListarUsuariosModel();

   
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<tr>';
            echo '<td>' . $row["Rol_ID"] . '</td>';
            echo '<td>' . $row["username"] . '</td>';
            echo '<td>' . $row["password"] . '</td>';
            echo '<td>' . $row["Usuario_ID"] . '</td>';
            echo '</tr>';
        }
    
}
