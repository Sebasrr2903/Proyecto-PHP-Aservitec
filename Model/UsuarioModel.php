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
            return $resultado->fetchAll(PDO::FETCH_ASSOC);
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
    public static function consultar($id){
        $query="SELECT * FROM datos_usuario WHERE Identificacion=:id";
        try{
            self::getConexion();
            $resultado=self::$cnx->prepare($query);
            $resultado->bindParam(":id",$id,PDO::PARAM_STR);
            $resultado->execute();
            self::desconectar();
            return $resultado->fetchAll(PDO::FETCH_ASSOC);
        }catch (PDOException $e){
            self::desconectar();
            $error="Error ".$e->getCode().": ".$e->getMessage();
            return $error; 
        }
    }
    public static function mostrarRol($rol){
        $query="SELECT Nombre FROM roles WHERE Rol_ID=:id";
        try{
            self::getConexion();
            $resultado=self::$cnx->prepare($query);
            $resultado->bindParam(":id",$rol,PDO::PARAM_INT);
            $resultado->execute();
            self::desconectar();
            return $resultado->fetchAll(PDO::FETCH_ASSOC);
        }catch (PDOException $e){
            self::desconectar();
            $error="Error ".$e->getCode().": ".$e->getMessage();
            return $error; 
        }
    }
    public static function mostrarProvincia($id){
        $query="SELECT Nombre FROM provincias WHERE Provincia_ID=:id";
        try{
            self::getConexion();
            $resultado=self::$cnx->prepare($query);
            $resultado->bindParam(":id",$id,PDO::PARAM_INT);
            $resultado->execute();
            self::desconectar();
            return $resultado->fetchAll(PDO::FETCH_ASSOC);
        }catch (PDOException $e){
            self::desconectar();
            $error="Error ".$e->getCode().": ".$e->getMessage();
            return $error; 
        }
    }
    public static function mostrarCanton($id){
        $query="SELECT Nombre FROM cantones WHERE Canton_ID=:id";
        try{
            self::getConexion();
            $resultado=self::$cnx->prepare($query);
            $resultado->bindParam(":id",$id,PDO::PARAM_INT);
            $resultado->execute();
            self::desconectar();
            return $resultado->fetchAll(PDO::FETCH_ASSOC);
        }catch (PDOException $e){
            self::desconectar();
            $error="Error ".$e->getCode().": ".$e->getMessage();
            return $error; 
        }
    }
    public static function mostrarDistrito($id){
        $query="SELECT Nombre FROM distritos WHERE Distrito_ID=:id";
        try{
            self::getConexion();
            $resultado=self::$cnx->prepare($query);
            $resultado->bindParam(":id",$id,PDO::PARAM_INT);
            $resultado->execute();
            self::desconectar();
            return $resultado->fetchAll(PDO::FETCH_ASSOC);
        }catch (PDOException $e){
            self::desconectar();
            $error="Error ".$e->getCode().": ".$e->getMessage();
            return $error; 
        }
    }
    public static function actualizar($correo,$rol,$id){
        $query="UPDATE usuarios SET username=:correo,Rol_ID=:rol WHERE Usuario_ID=:id";
        try{
            self::getConexion();
            $update=self::$cnx->prepare($query);
            $update->bindParam(":correo",$correo,PDO::PARAM_STR);
            $update->bindParam(":rol",$rol,PDO::PARAM_INT);
            $update->bindParam(":id",$id,PDO::PARAM_INT);
            $update->execute();
            self::desconectar();
        }catch (PDOException $e){
            self::desconectar();
            $error="Error ".$e->getCode().": ".$e->getMessage();
            return $error; 
        }
    }
    public static function actualizarDatos($nombre,$correo,$tel,$provincia,$canton,$distrito,$dir,$id){
        $query="UPDATE datos_usuario SET Nombre=:nombre,Correo=:correo,Telefono=:tel,
        Provincia_ID=:provincia,Canton_ID=:canton,Distrito_ID=:distrito,Direccion_Exacta=:dir WHERE Identificacion=:id";
        try{
            self::getConexion();
            $update=self::$cnx->prepare($query);
            $update->bindParam(":nombre",$nombre,PDO::PARAM_STR);
            $update->bindParam(":correo",$correo,PDO::PARAM_STR);
            $update->bindParam(":tel",$tel,PDO::PARAM_STR);
            $update->bindParam(":provincia",$provincia,PDO::PARAM_INT);
            $update->bindParam(":canton",$canton,PDO::PARAM_INT);
            $update->bindParam(":distrito",$distrito,PDO::PARAM_INT);
            $update->bindParam(":dir",$dir,PDO::PARAM_STR);
            $update->bindParam(":id",$id,PDO::PARAM_STR);
            $update->execute();
            self::desconectar();
            return "actualizado";
        }catch (PDOException $e){
            self::desconectar();
            $error="Error ".$e->getCode().": ".$e->getMessage();
            return $error; 
        }
    }
    public static function eliminar($id){
        $query="DELETE FROM usuarios WHERE Usuario_ID=:id";
        try{
            self::getConexion();
            $delete=self::$cnx->prepare($query);
            $delete->bindParam(":id",$id,PDO::PARAM_INT);
            $delete->execute();
            self::desconectar();
        }catch (PDOException $e){
            self::desconectar();
            $error="Error ".$e->getCode().": ".$e->getMessage();
            return $error; 
        }
    }
    public static function eliminarDatos($id){
        $query="DELETE FROM datos_usuario WHERE Identificacion=:id";
        try{
            self::getConexion();
            $delete=self::$cnx->prepare($query);
            $delete->bindParam(":id",$id,PDO::PARAM_STR);
            $delete->execute();
            self::desconectar();
        }catch (PDOException $e){
            self::desconectar();
            $error="Error ".$e->getCode().": ".$e->getMessage();
            return $error; 
        }
    }
}
