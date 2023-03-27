<?php
if (session_status() == PHP_SESSION_NONE)
    session_start();

include_once __DIR__ . '\..\Model\UsuarioModel.php';
function ListarUsuarios()
{
    $datos = ListarUsuariosModel();

    if ($datos->num_rows > 0) {
        while ($fila = mysqli_fetch_array($datos)) {
            echo '<tr>';
            echo '<td>' . $fila["Id"] . '</td>';
            echo '<td>' . $fila["Usuario"] . '</td>';
            echo '<td>' . $fila["Contraseña"] . '</td>';
            echo '<td>' . $fila["NombreCompleto"] . '</td>';
            echo '</tr>';
        }
    }
}
?>