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
    <title>Dashboard - Borrar Datos</title>
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

        h1, h2 {
            color: #fff;
        }

        p a {
            text-decoration: none;
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        p a:hover {
            background-color: #0056b3;
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

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            margin: 20px 0;
        }

        td {
            padding: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Editar Productos</h1>
    <p>
        <a href="index.php">Regresar a Dashboard</a>
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
    
    <h2>Insertar datos para reemplazar</h2>
    <form action="editbackend.php" method="post" name="add">
        <table>
            <tr> 
                <td>ID</td>
                <td><input type="text" name="idProducto"></td>
            </tr>
            <tr> 
                <td>Nombre de Producto</td>
                <td><input type="text" name="Nombre"></td>
            </tr>
            <tr> 
                <td>Descripción</td>
                <td><input type="text" name="Descripcion"></td>
            </tr>
            <tr> 
                <td>Precio Costo</td>
                <td><input type="text" name="PrecioCosto"></td>
            </tr>
            <tr> 
                <td>Precio Venta</td>
                <td><input type="text" name="PrecioVenta"></td>
            </tr>
            <tr> 
                <td>Marca</td>
                <td><input type="text" name="Marca"></td>
            </tr>
            <tr> 
                <td>Categoria</td>
                <td><input type="text" name="Categoria"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="submit" value="Editar"></td>
            </tr>
        </table>
    </form>
</body>
</html>
