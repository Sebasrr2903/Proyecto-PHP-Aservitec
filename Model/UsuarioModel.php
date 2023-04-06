<?php
include_once '../Config/conexion.php';

class User extends conexion
{
    protected static $cnx;

    public function __construct(){}

    public static function getConexion(){
        self::$cnx=conexion::conectar();
    }
    public static function desconectar(){
        self::$cnx=null;
    }

    public static function mostrar($correo){
        $query="SELECT * FROM usuarios WHERE username=:username";
        $username=$correo;
        try{
            self::getConexion();
            $resultado=self::$cnx->prepare($query);
            $resultado->bindParam(":username",$username,PDO::PARAM_STR);
            $resultado->execute();
            self::desconectar();
            return $resultado->fetch();
        }catch (PDOException $e){
            self::desconectar();
            $error="Error ".$e->getCode().": ".$e->getMessage();
            return $error; 
        }
    }

    public static function insertar($correo,$contra,$rol){
        $query="INSERT INTO usuarios(username,password,Rol_ID) VALUES(:correo,:contra,:rol)";
        try{
            self::getConexion();
            $insert=self::$cnx->prepare($query);
            $insert->bindParam(":correo",$correo,PDO::PARAM_STR);
            $insert->bindParam(":contra",$contra,PDO::PARAM_STR);
            $insert->bindParam(":rol",$rol,PDO::PARAM_INT);
            $insert->execute();
            self::desconectar();
        }catch (PDOException $e){
            self::desconectar();
            $error="Error ".$e->getCode().": ".$e->getMessage();
            return $error; 
        }
    }
    
    public static function insertar_datos($id,$tipoId,$nombre,$correo,$tel,$idProvincia,$idCanton,$idDistrito,$direccion){
        $query="INSERT INTO datos_usuario(Identificacion,Tipo_Identificacion_ID,Nombre,Correo,Telefono,Provincia_ID,Canton_ID,Distrito_ID,Direccion_Exacta) 
        VALUES(:id,:tipoId,:nombre,:correo,:tel,:idProvincia,:idCanton,:idDistrito,:direccion)";
        try{
            self::getConexion();
            $insert=self::$cnx->prepare($query);
            $insert->bindParam(":id",$id,PDO::PARAM_STR);
            $insert->bindParam(":tipoId",$tipoId,PDO::PARAM_INT);
            $insert->bindParam(":nombre",$nombre,PDO::PARAM_STR);
            $insert->bindParam(":correo",$correo,PDO::PARAM_STR);
            $insert->bindParam(":tel",$tel,PDO::PARAM_STR);
            $insert->bindParam(":idProvincia",$idProvincia,PDO::PARAM_INT);
            $insert->bindParam(":idCanton",$idCanton,PDO::PARAM_INT);
            $insert->bindParam(":idDistrito",$idDistrito,PDO::PARAM_INT);
            $insert->bindParam(":direccion",$direccion,PDO::PARAM_STR);
            $insert->execute();
            self::desconectar();
        }catch (PDOException $e){
            self::desconectar();
            $error="Error ".$e->getCode().": ".$e->getMessage();
            return $error; 
        }
    }
}



if(isset($_SESSION['Rol_ID'])){
    switch($_SESSION['Rol_ID']){
        case 1:
            header('location: ../view/IndexAdmin.php');
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
                header('location: ../view/IndexAdmin.php');
            break;

            case 2:
                header('location: ../view/IndexUsua.php');
            break;

            default:
        }
    }else{
        // no existe el usuario
        header("location:InicioSesion.php?error=El usuario esta incorrecto o contraseña incorrecta");
     
        
    }
    

}

function ListarUsuariosModel()
{
    
    $conex = new Database();
  
    $getConection = $conex->Connect();
  
    $stmt = $getConection->prepare("SELECT *FROM usuarios");
    $stmt->execute();
  
    return $stmt;
    
}
