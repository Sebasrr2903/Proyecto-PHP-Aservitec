<?php
include_once '../Config/conexion.php';
include_once '../Config/global.php';
class Tecnico extends conexion{
    protected static $cnx;

    public function __construct(){}

    public static function getConexion(){
        self::$cnx=conexion::conectar();
    }
    public static function desconectar(){
        self::$cnx=null;
    }

    public static function tecnicos(){
        $query="SELECT * FROM usuarios WHERE Rol_ID=3";
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
    public static function datos($id){
        $query="SELECT * FROM datos_usuario WHERE Correo=:id";
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
    public static function consultar($id){
        $query="SELECT * FROM usuarios where Usuario_ID=:id";
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
    public static function calendario($id){
        $query="SELECT * FROM mantenimiento WHERE tecnico=:numero";
        try{
            self::getConexion();
            $resultado=self::$cnx->prepare($query);
            $resultado->bindParam(":numero",$id,PDO::PARAM_INT);
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