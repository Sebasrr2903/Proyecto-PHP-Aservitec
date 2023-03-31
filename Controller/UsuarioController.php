<?php
    include_once __DIR__ . '\..\Model\UsuarioModel.php';


function ListarUsuarios()
{
    $stmt= ListarUsuariosModel();

   
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<tr>';
            echo '<td>' . $row["Rol_ID"] . '</td>';
            echo '<td>' . $row["username"] . '</td>';
            echo '<td>' . $row["password"] . '</td>';
            echo '<td>' . $row["Usuario_ID"] . '</td>';
            echo '</tr>';
        }
    
}
