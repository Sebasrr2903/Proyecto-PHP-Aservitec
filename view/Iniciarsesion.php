<?php


function test_input($data) {
     
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

try {
    $conn='';
    $servername = "localhost";
	$dbname = "aservitecdb";
	$username = "Prueba";
	$password = "Desarrollo2023";
  
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
    $username = test_input($_POST["Usuario"]);
    $password = test_input($_POST["Contraseña"]);
    $stmt = $conn->prepare("SELECT * FROM usuarios");
    $stmt->execute();
    $users = $stmt->fetchAll();
     
    foreach($users as $user) {
         
        if(($user['correo'] == $username) &&
            ($user['Contrasena'] == $password)) {
                header("location: General.php");
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