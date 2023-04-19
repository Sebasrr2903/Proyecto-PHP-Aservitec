<?php
require_once '../Config/conexion.php';
class mantenimiento extends conexion
{
    protected static $cnx;

    public function __construct(){}

    public static function getConexion(){
        self::$cnx=conexion::conectar();
    }
    public static function desconectar(){
        self::$cnx=null;
    }

    public static function insertar($nombre,$apellidos,$correo,$telefono,$descripcion){
        $query="INSERT INTO mantenimiento(nombre,apellidos,correo,telefono,descripcion) VALUES(:nombre,:apellidos,:correo,:telefono,:descripcion)";
        try{
            self::getConexion();
            $insert=self::$cnx->prepare($query);
            $insert->bindParam(":nombre",$nombre,PDO::PARAM_STR);
            $insert->bindParam(":apellidos",$apellidos,PDO::PARAM_STR);
            $insert->bindParam(":correo",$correo,PDO::PARAM_STR);
            $insert->bindParam(":correo",$correo,PDO::PARAM_STR);
            $insert->bindParam(":telefono",$telefono,PDO::PARAM_INT);
            $insert->bindParam(":descripcion",$descripcion,PDO::PARAM_STR);
            $insert->execute();
            self::desconectar();
        }catch (PDOException $e){
            self::desconectar();
            $error="Error ".$e->getCode().": ".$e->getMessage();
            return $error; 
        }
    }
}



    function ListarSolicitud()
    {
        
        $conex = new conexion ();
      
        $getConection = $conex->conectar();
      
        $stmt = $getConection->prepare("SELECT *FROM atenciones");
        $stmt->execute();
      
        return $stmt;
        
    }
   

?>