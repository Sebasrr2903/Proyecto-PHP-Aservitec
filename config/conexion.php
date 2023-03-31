<?php
require_once "global.php";

class Conexion{
    public static function conectar(){
        try{
            $cn=new PDO("mysql:host=".
            ASERVITEC_PRE_DB_HOST_MYSQL.";dbname=".
            ASERVITEC_PRE_DB_NAME_MYSQL.";charset=utf8",
            ASERVITEC_PRE_DB_USER_MYSQL,
            ASERVITEC_PRE_DB_PASSWORD_MYSQL);
            $cn->setAttribute(PDO::ATTR_ERRMODE, PDO::
            ERRMODE_EXCEPTION);
            return $cn;
        }catch(PDOException $ex){
            die($ex->getMessage());
        }
    }
}
?>