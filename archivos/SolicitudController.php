<?php
    include_once __DIR__ . '\..\Model\SolicitudModel.php';

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $descripcion = $_POST['descripcion'];
    
    // Llamar al método insertar de la clase "mantenimiento" para insertar los datos en la base de datos
    $resultado = mantenimiento::insertar($nombre, $apellidos, $correo, $telefono, $descripcion);
    
    // Verificar si la inserción fue exitosa o si hubo algún error
    if (is_string($resultado)) {
        // Mostrar el mensaje de error en caso de que haya ocurrido un error
        echo "Error: " . $resultado;
    } else {
        // Mostrar un mensaje de éxito en caso de que la inserción haya sido exitosa
        echo "Datos insertados exitosamente!";
    }
  

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