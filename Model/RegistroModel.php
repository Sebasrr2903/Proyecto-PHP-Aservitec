<?php
require_once '../Config/conexion.php';
class RegistroModel extends conexion
{
    protected static $cnx;

    public function __construct(){}

    public static function getConexion(){
        self::$cnx=conexion::conectar();
    }
    public static function desconectar(){
        self::$cnx=null;
    }
    public static function mostrarID(){
        $query="SELECT Tipo FROM Tipo_Identificacion";
        try{
            self::getConexion();
            $resultado=self::$cnx->prepare($query);
            $resultado->execute();
            self::desconectar();
            return $resultado->fetchAll(PDO::FETCH_ASSOC);
        }catch (PDOException $e){
            self::desconectar();
            $error="Error ".$e->getCode().": ".$e->getMessage();
            return $error; 
        }
    }
    public static function mostrarID_Tipo($tipo){
        $query="SELECT Tipo_Identificacion_ID FROM tipo_Identificacion WHERE Tipo=:tipo";
        try{
            self::getConexion();
            $resultado=self::$cnx->prepare($query);
            $resultado->bindParam(":tipo",$tipo,PDO::PARAM_STR);
            $resultado->execute();
            self::desconectar();
            return $resultado->fetchAll(PDO::FETCH_ASSOC);
        }catch (PDOException $e){
            self::desconectar();
            $error="Error ".$e->getCode().": ".$e->getMessage();
            return $error; 
        }
    }
    public static function mostrarProvincia(){
        $query="SELECT Nombre FROM Provincias";
        try{
            self::getConexion();
            $resultado=self::$cnx->prepare($query);
            $resultado->execute();
            self::desconectar();
            return $resultado->fetchAll(PDO::FETCH_ASSOC);
        }catch (PDOException $e){
            self::desconectar();
            $error="Error ".$e->getCode().": ".$e->getMessage();
            return $error; 
        }
    }
    public static function mostrarID_Provincia($name){
        $query="SELECT Provincia_ID FROM Provincias WHERE Nombre=:nombre";
        $nombre=$name;
        try{
            self::getConexion();
            $resultado=self::$cnx->prepare($query);
            $resultado->bindParam(":nombre",$nombre,PDO::PARAM_STR);
            $resultado->execute();
            self::desconectar();
            return $resultado->fetchAll(PDO::FETCH_ASSOC);
        }catch (PDOException $e){
            self::desconectar();
            $error="Error ".$e->getCode().": ".$e->getMessage();
            return $error; 
        }
    }
    public static function mostrarCanton($numero){
        $query="SELECT Nombre FROM Cantones WHERE Provincia_ID=:id";
        $id=$numero;
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
    public static function mostrarID_Canton($nombre,$id){
        $query="SELECT Canton_ID FROM Cantones WHERE Nombre=:canton AND Provincia_ID=:provincia";
        $canton=$nombre;
        $provincia=$id;
        try{
            self::getConexion();
            $resultado=self::$cnx->prepare($query);
            $resultado->bindParam(":canton",$canton,PDO::PARAM_STR);
            $resultado->bindParam(":provincia",$provincia,PDO::PARAM_INT);
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
        $query="SELECT Nombre FROM Distritos WHERE Canton_ID=:numero";
        $numero=$id;
        try{
            self::getConexion();
            $resultado=self::$cnx->prepare($query);
            $resultado->bindParam(":numero",$numero,PDO::PARAM_INT);
            $resultado->execute();
            self::desconectar();
            return $resultado->fetchAll(PDO::FETCH_ASSOC);
        }catch (PDOException $e){
            self::desconectar();
            $error="Error ".$e->getCode().": ".$e->getMessage();
            return $error; 
        }
    }
    public static function mostrarID_Distrito($nombre,$id){
        $query="SELECT Distrito_ID FROM distritos WHERE Nombre=:distrito AND Canton_ID=:canton";
        $distrito=$nombre;
        $canton=$id;
        try{
            self::getConexion();
            $resultado=self::$cnx->prepare($query);
            $resultado->bindParam(":distrito",$distrito,PDO::PARAM_STR);
            $resultado->bindParam(":canton",$canton,PDO::PARAM_INT);
            $resultado->execute();
            self::desconectar();
            return $resultado->fetchAll(PDO::FETCH_ASSOC);
        }catch (PDOException $e){
            self::desconectar();
            $error="Error ".$e->getCode().": ".$e->getMessage();
            return $error; 
        }
    }
}
?>