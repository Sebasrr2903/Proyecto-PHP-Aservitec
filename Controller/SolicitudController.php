<?php
    include_once __DIR__ . '\..\Model\SolicitudModel.php';


function ListarSoli()
{
    $stmt= ListarSolicitud();

   
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<tr>';
            echo '<td>' . $row["Atencion_ID	"] . '</td>';
            echo '<td>' . $row["Cliente_ID"] . '</td>';
            echo '<td>' . $row["Descripion"] . '</td>';
            echo '<td>' . $row["Fecha_Creacion"] . '</td>';
            echo '<td>' . $row["Fecha_Atencion"] . '</td>';
            echo '<td>' . $row["Fecha_Resolucion"] . '</td>';
            echo '<td>' . $row["Archivo"] . '</td>';
            echo '</tr>';
        }
    
}