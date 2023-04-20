<?php
include_once __DIR__ . '\..\Model\SolicitudModel.php';
require_once '../Config/conexion.php';


    function ListarSolicitud()
    {
        
        $conex = new conexion ();
      
        $getConection = $conex->conectar();
      
        $stmt = $getConection->prepare("SELECT *FROM atenciones");
        $stmt->execute();
      
        return $stmt;
        
    }
   

?>