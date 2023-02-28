<?php
session_start();


include('conexion');



if (isset($_POST['Usuario']) && isset($_POST['Contrseña'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $Usuario = validate($_POST['Usuario']);
    $Contraseña= validate($_POST['Contraseña']);

    if (empty($Usuario)) {
        header("Location: InicioSesion.php?error=El Usuario Es Requerido");

    } elseif (empty($Contraseña)) {
        header("Location: InicioSesion.php?error=La Clave Es Requerida");
        exit();
    } else {
       // $Clave = md5($Clave);
        $sql = "SELECT * FROM usuarios where Usuario= '$Usuario' and Contraseña='$Contraseña'";
        $result = mysqli_query($conexion, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['Usuario'] === $Usuario && $row['Contrseña'] === $Contraseña) {
                $_SESSION['Usuario'] = $row['Usuario'];
                $_SESSION['NombreCompleto'] = $row['NombreCompleto'];
                $_SESSION['Id'] = $row['Id'];
                header("Location: index.php");
                exit();
            } else {
                header("Location:InicioSesion.php?error =El usuario o la contraseña estan incorrectas");
            }

        } else {
            header("Location:InicioSesion.php?error =El usuario o la contraseña estan incorrectas");

        }
    }
} else {
    header("Location:InicioSesion.php");
    exit();
}
