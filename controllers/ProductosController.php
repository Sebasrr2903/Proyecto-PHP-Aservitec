<?php
   $cn= mysqli_connect("localhost", "admin", "Palomo1995.", "aservitecdb");
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
    mysqli_close($cn);
 
?>
