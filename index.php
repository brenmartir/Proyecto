<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
   <h1> <title >Tienda Oxxo</title></h1>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #74ebd5, #acb6e5);
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            color: #333;
        }

        h1 {
            margin-bottom: 30px;
            color: #007bff;
        }

        a {
            display: block;
            text-decoration: none;
            color: #fff;
            background-color:#AC97B6;/* Color casillas index */
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            margin: 10px 0;
            width: 200px;
            text-align: center;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        a:hover {
            background-color: #80475E;
            transform: translateY(-2px);
        }

        h2 {
            margin: 0;
            font-size: 18px;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bienvenido</h1>
        
        <a href="actual.php"><h2>Datos Actuales</h2></a>
        <a href="informe.php"><h2>Informes</h2></a>
        <a href="add.php"><h2>Añadir Datos</h2></a> 
        <a href="edit.php"><h2>Editar Datos</h2></a> 
        <a href="delete.php"><h2>Borrar Datos</h2></a>  
        <button class="btn">
       <svg width="40" height="40" fill="#0092E4" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24" id="github">
       <path d="M12,2.2467A10.00042,10.00042,0,0,0,8.83752,21.73419c.5.08752.6875-.21247.6875-.475,0-.23749-.01251-1.025-.01251-1.86249C7,19.85919,6.35,18.78423,6.15,18.22173A3.636,3.636,0,0,0,5.125,16.8092c-.35-.1875-.85-.65-.01251-.66248A2.00117,2.00117,0,0,1,6.65,17.17169a2.13742,2.13742,0,0,0,2.91248.825A2.10376,2.10376,0,0,1,10.2,16.65923c-2.225-.25-4.55-1.11254-4.55-4.9375a3.89187,3.89187,0,0,1,1.025-2.6875,3.59373,3.59373,0,0,1,.1-2.65s.83747-.26251,2.75,1.025a9.42747,9.42747,0,0,1,5,0c1.91248-1.3,2.75-1.025,2.75-1.025a3.59323,3.59323,0,0,1,.1,2.65,3.869,3.869,0,0,1,1.025,2.6875c0,3.83747-2.33752,4.6875-4.5625,4.9375a2.36814,2.36814,0,0,1,.675,1.85c0,1.33752-.01251,2.41248-.01251,2.75,0,.26251.1875.575.6875.475A10.0053,10.0053,0,0,0,12,2.2467Z"></path>
  </svg>
</button> 
    </div>
</body>
</html>