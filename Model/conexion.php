<<?php

function OpenDB()
{
    //cambiar el puerto si da error (3308) // (3306)
    return mysqli_connect("localhost:3306", "root", "290306", "prueba");
}

function CloseDB($enlace)
{
    mysqli_close($enlace);
}

?>



