<?php include 'conexion.php'; ?>
<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de productos</title>
</head>
<body>
    <h1>Lista de productos</h1>
    <table class="styled-table">
        <thead>
            <tr>
                <th>Id de producto</th>
                <th>Nombre</th>
                <th>Categoría</th>
                <th>Cantidad disponible</th>
                <th>Fecha de ingreso</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
                <th>Registrar</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $lista = $conn->query('SELECT * from productos');
                while ($fila = $lista->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>{$fila['idproducto']}</td>";
                    echo "<td>{$fila['nombre']}</td>";
                    echo "<td>{$fila['categoria']}</td>";
                    echo "<td>{$fila['cantidaddisponible']}</td>";
                    echo "<td>{$fila['fechaingreso']}</td>";
                    echo "<td><a href='actualizar.php?idproducto={$fila['idproducto']}'>Actualizar</a></td>";
                    echo "<td><a href='eliminar.php?idproducto={$fila['idproducto']}'>Eliminar</a></td>";
                    echo "<td><a href='registrar.php'>Registrar</a></td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>

<?php include 'footer.php'; ?>
</html>