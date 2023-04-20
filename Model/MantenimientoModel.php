<?php
include_once '../Config/conexion.php';
include_once '../Config/global.php';
class Mantenimiento extends conexion{
    protected static $cnx;

    public function __construct(){}

    public static function getConexion(){
        self::$cnx=conexion::conectar();
    }
    public static function desconectar(){
        self::$cnx=null;
    }

    public static function insertar($nombre,$correo,$tel,$des,$img,$estado,$fecha,$tec,$fecha_asig,$terminado){
        $query="INSERT INTO mantenimiento(nombre,correo,telefono,title,imagen,aprobada,fecha,tecnico,start,end)
        VALUES(:nombre,:correo,:tel,:descripcion,:img,:estado,:fecha,:tec,:fecha_asig,:terminado)";
        try{
            self::getConexion();
            $insert=self::$cnx->prepare($query);
            $insert->bindParam(":nombre",$nombre,PDO::PARAM_STR);
            $insert->bindParam(":correo",$correo,PDO::PARAM_STR);
            $insert->bindParam(":tel",$tel,PDO::PARAM_STR);
            $insert->bindParam(":descripcion",$des,PDO::PARAM_STR);
            $insert->bindParam(":img",$img,PDO::PARAM_STR);
            $insert->bindParam(":estado",$estado,PDO::PARAM_BOOL);
            $insert->bindParam(":fecha",$fecha,PDO::PARAM_STR);
            $insert->bindParam(":tec",$tec,PDO::PARAM_INT);
            $insert->bindParam(":fecha_asig",$fecha_asig,PDO::PARAM_STR);
            $insert->bindParam(":terminado",$terminado,PDO::PARAM_STR);
            $insert->execute();
            self::desconectar();
        }catch (PDOException $e){
            self::desconectar();
            $error="Error ".$e->getCode().": ".$e->getMessage();
            return $error; 
        }
    }
    public static function noAprobado(){
        $query="SELECT * FROM mantenimiento WHERE aprobada=0";
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
    public static function aprobar($id){
        $query="UPDATE mantenimiento SET aprobada=1 WHERE id=:id";
        try{
            self::getConexion();
            $update=self::$cnx->prepare($query);
            $update->bindParam(":id",$id,PDO::PARAM_INT);
            $update->execute();
            self::desconectar();
        }catch (PDOException $e){
            self::desconectar();
            $error="Error ".$e->getCode().": ".$e->getMessage();
            return $error; 
        }
    }
}
?>