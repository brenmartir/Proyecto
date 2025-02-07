<?php
require_once("connect.php");

$result = mysqli_query($mysqli, "SELECT * FROM producto ORDER BY idProducto ASC");
?>

<!DOCTYPE html>
<html lang="es">
<head>	
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Datos Actuales</title>
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
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px 0;
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
    <h2>Datos Actuales</h2>
    <p>
	<a href="index.php"><button><span>Regresar a pagina principal</span></button></a>
    </p>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre de Producto</th>
            <th>Descripción</th>
            <th>Precio Costo</th>
            <th>Precio Venta</th>
            <th>Marca</th>
            <th>Categoría</th>
        </tr>
        <?php
        // Obtener la siguiente fila de un conjunto de resultados como una matriz asociativa
        while ($res = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$res['idProducto']."</td>";
            echo "<td>".$res['Nombre']."</td>";
            echo "<td>".$res['Descripcion']."</td>";
            echo "<td>".$res['PrecioCosto']."</td>";
            echo "<td>".$res['PrecioVenta']."</td>";
            echo "<td>".$res['Marca']."</td>";
            echo "<td>".$res['Categoria']."</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>