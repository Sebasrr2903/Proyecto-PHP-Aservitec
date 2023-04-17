<?php
include_once '../Config/conexion.php';
include_once '../Config/global.php';
class Producto extends conexion
{
    protected static $cnx;

    public function __construct(){}

    public static function getConexion(){
        self::$cnx=conexion::conectar();
    }
    public static function desconectar(){
        self::$cnx=null;
    }
    public static function contar(){
        $query="SELECT * FROM productos";
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
    public static function insertar($nombre,$cantidad,$precio,$descripcion,$imagen){
        $query="INSERT INTO productos(nombre,cantidad,descripcion,imagen,precio)
        VALUES(:nombre,:cantidad,:descripcion,:imagen,:precio)";
        try{
            self::getConexion();
            $insert=self::$cnx->prepare($query);
            $insert->bindParam(":nombre",$nombre,PDO::PARAM_STR);
            $insert->bindParam(":cantidad",$cantidad,PDO::PARAM_INT);
            $insert->bindParam(":descripcion",$descripcion,PDO::PARAM_STR);
            $insert->bindParam(":imagen",$imagen,PDO::PARAM_STR);
            $insert->bindParam(":precio",$precio,PDO::PARAM_INT);
            $insert->execute();
            self::desconectar();
        }catch (PDOException $e){
            self::desconectar();
            $error="Error ".$e->getCode().": ".$e->getMessage();
            return $error; 
        }
    }
    public static function mostrar($numero){
        $query="SELECT * FROM productos WHERE id=:id";
        try{
            self::getConexion();
            $resultado=self::$cnx->prepare($query);
            $resultado->bindParam(":id",$numero,PDO::PARAM_INT);
            $resultado->execute();
            self::desconectar();
            return $resultado->fetchAll(PDO::FETCH_ASSOC);
        }catch (PDOException $e){
            self::desconectar();
            $error="Error ".$e->getCode().": ".$e->getMessage();
            return $error; 
        }
    }
    public static function eliminar($numero){
        $query="DELETE FROM productos WHERE id=:id";
        try{
            self::getConexion();
            $delete=self::$cnx->prepare($query);
            $delete->bindParam(":id",$numero,PDO::PARAM_INT);
            $delete->execute();
            self::desconectar();
        }catch (PDOException $e){
            self::desconectar();
            $error="Error ".$e->getCode().": ".$e->getMessage();
            return $error; 
        }
    }
    public static function actualizar($id,$nombre,$cantidad,$precio,$descripcion){
        $query="UPDATE productos SET nombre=:nombre,cantidad=:cantidad,descripcion=:descripcion,precio=:precio WHERE id=:id";
        try{
            self::getConexion();
            $update=self::$cnx->prepare($query);
            $update->bindParam(":nombre",$nombre,PDO::PARAM_STR);
            $update->bindParam(":cantidad",$cantidad,PDO::PARAM_INT);
            $update->bindParam(":descripcion",$descripcion,PDO::PARAM_STR);
            $update->bindParam(":precio",$precio,PDO::PARAM_INT);
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



/*
   $cn= mysqli_connect(ASERVITEC_PRE_DB_HOST_MYSQL, ASERVITEC_PRE_DB_USER_MYSQL, ASERVITEC_PRE_DB_PASSWORD_MYSQL, ASERVITEC_PRE_DB_NAME_MYSQL);
   if (!$cn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT * FROM aservitecdb.productos";
    $result = mysqli_query($cn, $sql);
    // realizar la operación GET en la base de datos
     $resultado =array();
     while($row = mysqli_fetch_assoc($result)) {
        $resultado[] = $row;
    }
    // devolver el resultado en formato JSON
    header('Content-Type: application/json');
    echo json_encode($resultado);
    mysqli_close($cn);*/
 
?>