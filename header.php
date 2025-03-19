<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Productos</title>
    <link rel="stylesheet" href="styles.css"> 
    <style>
       
        body {
            font-family: 'Arial', sans-serif;
            background-color:rgb(182, 208, 255);
            margin: 0;
            padding: 0;
            color: #333;
        }

        
        header {
            background-color:rgb(113, 219, 86);
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        header h1 {
            font-size: 2.5em;
        }

       
        nav ul {
            display: flex;
            justify-content: center;
            padding: 0;
            list-style: none;
            margin: 10px 0;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            text-decoration: none;
            color: white;
            font-size: 1.2em;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        nav ul li a:hover {
            background-color:rgb(255, 172, 104);
        }

       
        main {
            padding: 40px;
            text-align: center;
        }

        main h2 {
            font-size: 2em;
            margin-bottom: 20px;
        }

        
        button {
            background-color:rgb(247, 237, 195);
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 1.1em;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color:rgb(21, 18, 58);
        }

       
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color:rgb(118, 122, 181);
            color: white;
        }

        tr:nth-child(even) {
            background-color:rgb(242, 230, 230);
        }
    </style>
</head>
<body>

<header>
    <h1 >Registro de Productos de Tienda Funky Cactus </h1>
    <nav>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="registrar.php">Agregar Producto</a></li>
        </ul>
    </nav>
</header>

<main>
    <h2>Bienvenido al Sistema de Registro de productos</h2>
    <p>En este espacio podrás gestionar los productos ingresados, agregar nuevos, entre otras funciones basicas.</p>
</main>

</body>
</html>