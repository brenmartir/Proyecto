<?php
require_once("connect.php"); // Asegúrate de que este archivo establece la conexión y asigna la variable $mysqli
// Verificar conexión
if ($mysqli->connect_error) {
    die("Conexión fallida: " . $mysqli->connect_error);
}

// Consulta de ventas
$sql_ventas = "SELECT fechaVenta, cliente, cod_Producto, cantidadVendida, precioVenta
               FROM ventascliente
               ORDER BY fechaVenta DESC";
$resultado_ventas = $mysqli->query($sql_ventas);


if (!$resultado_ventas) {
    die("Error en la consulta de ventas: " . $mysqli->error);
}

// Consulta de stock actual
$sql_stock = "SELECT idProducto, Nombre, Descripcion, PrecioCosto, PrecioVenta, Marca, Categoria
              FROM producto";
$resultado_stock = $mysqli->query($sql_stock);

if (!$resultado_stock) {
    die("Error en la consulta de stock: " . $mysqli->error);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Informe de Ventas y Stock</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #74ebd5, #acb6e5);
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            color: #333;
        }

        h2 {
            color: #fff;
            margin-bottom: 20px;
        }


        table {
            width: 80%;
            border-collapse: collapse;
            margin-bottom: 40px;
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            border: 1px solid #dddddd;
            padding: 12px 15px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

<h2>Informe de Ventas</h2>
<br>
<a href="index.php"><button><span>Regresar a pagina principal</span></button></a>
<br>
<table>
    <tr>
        <th>Fecha de Venta</th>
        <th>Nombre del Cliente</th>
        <th>Código del Producto</th>
        <th>Cantidad Vendida</th>
        <th>Precio de Venta</th>
    </tr>
    <?php
    if ($resultado_ventas->num_rows > 0) {
        while($fila = $resultado_ventas->fetch_assoc()) {
            echo "<tr><td>" . $fila["fechaVenta"]. "</td><td>" . $fila["cliente"]. "</td><td>" . $fila["cod_Producto"]. "</td><td>" . $fila["cantidadVendida"]. "</td><td>" . $fila["precioVenta"]. "</td></tr>";
        }
    } else {
        echo "<tr><td colspan='5'>No hay datos disponibles</td></tr>";
    }
    ?>
</table>

<h2>Informe de Stock Actual</h2>
<table>
    <tr>
        <th>ID del Producto</th>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Precio de Costo</th>
        <th>Precio de Venta</th>
        <th>Marca</th>
        <th>Categoría</th>
    </tr>
    <?php
    if ($resultado_stock->num_rows > 0) {
        while($fila = $resultado_stock->fetch_assoc()) {
            echo "<tr><td>" . $fila["idProducto"]. "</td><td>" . $fila["Nombre"]. "</td><td>" . $fila["Descripcion"]. "</td><td>" . $fila["PrecioCosto"]. "</td><td>" . $fila["PrecioVenta"]. "</td><td>" . $fila["Marca"]. "</td><td>" . $fila["Categoria"]. "</td></tr>";
        }
    } else {
        echo "<tr><td colspan='7'>No hay datos disponibles</td></tr>";
    }
    ?>
</table>

</body>
</html>

<?php
$mysqli->close();
?>
