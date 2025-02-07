<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Borrar Datos</title>
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

        p a {
            text-decoration: none;
            background-color: #80475E;
            color: white;
            padding: 10px 15px;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        p a:hover {
            background-color: #80475E;
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
            background-color: #80475E;
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
    <h2>Borrar Datos</h2>
    <p>
        <a href="index.php">Regresar a Pagina Principal </a>
    </p>
    <form action="deletebackend.php" method="post" name="delete">
        <table>
            <tr> 
                <td>ID</td>
                <td><input type="text" name="idProducto"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="submit" value="Borrar"></td>
            </tr>
        </table>
    </form>
</body>
</html>
