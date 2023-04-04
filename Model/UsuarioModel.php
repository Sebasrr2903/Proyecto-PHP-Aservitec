<?php
include_once '../Config/conexion.php';

if(isset($_SESSION['Rol_ID'])){
    switch($_SESSION['Rol_ID']){
        case 1:
            header('location: ../view/indexAdmin.php');
        break;

        case 2:
        header('location: ../index.php');
        break;

       
      default;
    }
}


if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $db = new Conexion();
    $query = $db->conectar()->prepare('SELECT *FROM usuarios WHERE username = :username AND password = :password');
    $query->execute(['username' => $username, 'password' => $password]);

    $row = $query->fetch(PDO::FETCH_NUM);
    
    if($row == true){
        $rol = $row[3];
        
        $_SESSION['Rol_ID'] = $rol;
        switch($rol){
            case 1:
                header('location: ../view/indexAdmin.php');
            break;

            case 2:
                header('location: ../view/indexUsua.php');
            break;

            case 3:
                header('location: ../view/indexTecno.php');


            default:
        }
    }else{
        // no existe el usuario
        header("location:InicioSesion.php?error=El usuario esta incorrecto o contraseña incorrecta");
     
        
    }
    

}

function ListarUsuariosModel()
{
    
    $conex = new conexion ();
  
    $getConection = $conex->conectar();
  
    $stmt = $getConection->prepare("SELECT *FROM usuarios");
    $stmt->execute();
  
    return $stmt;
    
}
