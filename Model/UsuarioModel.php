<?php
include_once 'conexion.php';
function ListarUsuariosModel()
{
    $enlace = OpenDB();

    $procedimiento = "SELECT * FROM usuarios";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}
?>