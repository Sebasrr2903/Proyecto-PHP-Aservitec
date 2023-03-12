<?php
session_start();


include('conexion.php');



function test_input($data) {
     
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
    $username = test_input($_POST["Usuario"]);
    $password = test_input($_POST["Contraseña"]);
    $stmt = $conn->prepare("SELECT * FROM usuarios");
    $stmt->execute();
    $users = $stmt->fetchAll();
     
    foreach($users as $user) {
         
        if(($user['Usuario'] == $username) &&
            ($user['Contraseña'] == $password)) {
                header("location: view/InicioSesion.html");
        }
        else {
            echo "<script language='javascript'>";
            echo "alert('WRONG INFORMATION')";
            echo "</script>";
            die();
        }
    }
}
 
?>