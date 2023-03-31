<?php
session_start();

// Verificar si se agregó un producto al carrito
if (isset($_POST["agregarAlCarrito"])) {
    // Obtener el ID del producto
    $idProducto = $_POST["idProducto"];

    // Obtener la cantidad de productos
    $cantidad = $_POST["cantidad"];

    // Verificar si el carrito ya existe en la sesión
    if (!isset($_SESSION["carrito"])) {
        $_SESSION["carrito"] = array();
    }

    // Agregar el producto al carrito
    $producto = array(
        "id" => $idProducto,
        "cantidad" => $cantidad
    );
    array_push($_SESSION["carrito"], $producto);
}

// Conectar a la base de datos
$conn = mysqli_connect("localhost", "usuario", "contraseña", "nombre_de_la_base_de_datos");

// Verificar la conexión
if (!$conn) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

// Consultar la lista de productos
$sql = "SELECT * FROM productos";
$resultado = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Productos</title>
</head>
<body>
    <h1>Productos</h1>

    <?php
    // Mostrar la lista de productos
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<h2>" . $fila["nombre"] . "</h2>";
        echo "<img src='" . $fila["imagen"] . "' alt='" . $fila["nombre"] . "'>";
        echo "<p>" . $fila["descripcion"] . "</p>";
        echo "<p>Precio: $" . $fila["precio"] . "</p>";
        echo "<form method='post'>";
        echo "<input type='hidden' name='idProducto' value='" . $fila["id"] . "'>";
        echo "<label>Cantidad:</label>";
        echo "<input type='number' name='cantidad' value='1' min='1' max='10'>";
        echo "<button type='submit' name='agregarAlCarrito'>Agregar al carrito</button>";
        echo "</form>";
    }
    ?>

    <h2>Carrito de compras</h2>

    <?php
    // Mostrar el contenido del carrito de compras
    if (isset($_SESSION["carrito"]) && count($_SESSION["carrito"]) > 0) {
        echo "<table>";
        echo "<tr><th>Producto</th><th>Cantidad</th><th>Precio unitario</th><th>Subtotal</th></tr>";
        $total = 0;
        foreach ($_SESSION["carrito"] as $producto) {
            $id = $producto["id"];
            $cantidad = $producto["cantidad"];
            $sql = "SELECT * FROM productos WHERE id = $id";
            $resultado = mysqli_query($conn, $sql);
            $fila = mysqli_fetch_assoc($resultado);
            $precioUnitario = $fila["precio"];
            $subtotal = $precioUnitario * $cantidad;
            $total += $subtotal;
            echo "<tr><td>" . $fila["nombre"] . "</td><td>" . $cantidad . "</td><td>$" . $precioUnitario . "</td><td>$" . $subtotal . "</td></tr>";
        }
        echo "<tr><td colspan='3'>Total</td><td>$"

