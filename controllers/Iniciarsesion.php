<?php
session_start();


include('conexion');



if (isset($_GET['User']) && isset($_GET['Password'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $Usuario = validate($_GET['User']);
    $Contraseña= validate($_GET['Password']);

    if (empty($Usuario)) {
        header("Location: Contactenos.php");
        error_log("Que paso");

    } elseif (empty($Contraseña)) {
        header("Location: Contactenos.php");
        error_log("Que paso");
        exit();
    } else {
       // $Clave = md5($Clave);
       $cn= mysqli_connect("localhost", "admin", "Palomo1995.", "aservitecdb");
       if (!$cn) {
        die("Connection failed: " . mysqli_connect_error());
       }
        $sql = "SELECT * FROM usuarios where Usuario= '$Usuario' and Contraseña='$Contraseña'";
        $result = mysqli_query($cn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['Usuario'] === $Usuario && $row['Contrseña'] === $Contraseña) {
                $_SESSION['Usuario'] = $row['Usuario'];
                $_SESSION['NombreCompleto'] = $row['NombreCompleto'];
                $_SESSION['Id'] = $row['Id'];
                mysqli_close($cn);
                error_log("Que paso");
                header("Location: /index.php");
                exit();
            } else {
                header("Location:Contactenos.php");
                error_log("Que paso");
            }

        } else {
            header("Location:Contactenos.php");
            error_log("Que paso");

        }
    }
} else {
    header("Location:Contactenos.php");
    error_log("Que paso");
    exit();
}
