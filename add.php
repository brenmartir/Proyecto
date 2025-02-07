<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Datos</title>
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
        button {
            padding: 0.5em 1em;
            background-color: #212121;
            border: 0.08em solid #fff;
            border-radius: 0.3em;
            font-size: 1em;
            color: #fff;
            cursor: pointer;
        }
        button span {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            bottom: 0.2em;
            width: auto;
            padding: 0.2em 1em;
            background-color: #212121;
            border-radius: 0.2em;
            font-size: 1em;
            color: #fff;
            border: 0.08em solid #fff;
            box-shadow: 0 0.4em 0.1em 0.019em #fff;
        }

        button span:hover {
            transition: all 0.5s;
            transform: translate(0, 0.4em);
            box-shadow: 0 0 0 0 #fff;
        }

        button span:not(hover) {
            transition: all 1s;
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

        table {
            width: 100%;
            border-collapse: collapse;
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
    <h2>Añadir nuevo producto o cargar stock</h2>
    <p>
        <a href="index.php"><button><span>Regresar a pagina de inicio </span></button></a>
    </p>
    <form action="addbackend.php" method="post" name="add">
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
                <td><input type="submit" name="submit" value="Añadir"></td>
            </tr>
        </table>
    </form>
</body>
</html>

