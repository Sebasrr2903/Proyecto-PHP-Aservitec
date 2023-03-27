<?php
require_once "global.php";


        try{
            $cn= mysqli_connect("localhost", "admin", "Palomo1995.", "aservitecdb");
            if (!$cn) {
             die("Connection failed: " . mysqli_connect_error());
             }
        }catch(PDOException $ex){
            die($ex->getMessage());
            echo "Error de conexión: " . $e->getMessage();
        }

?>