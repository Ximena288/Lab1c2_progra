<?php
include 'conexion.php';
include 'header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Actualizar producto
    // ... (tu código de actualización) ...
} else {
    // Mostrar formulario de edición
    $idproducto = $_GET['idproducto'];
    $result = $conn->query("SELECT * FROM productos WHERE idproducto = $idproducto");
    $producto = $result->fetch_assoc();

    // Verificar si $producto está vacío
    if ($producto) {
?>

<h2>Editar Producto</h2>

<form method="post" action="actualizar.php">
    <input type="hidden" name="idproducto" value="<?= $producto['idproducto'] ?>">

    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" value="<?= $producto['nombre'] ?>" required><br><br>

    <label for="categoria">Categoría:</label>
    <input type="text" name="categoria" value="<?= $producto['categoria'] ?>" required><br><br>

    <label for="cantidaddisponible">Cantidad Disponible:</label>
    <input type="number" name="cantidaddisponible" value="<?= $producto['cantidaddisponible'] ?>" required><br><br>

    <label for="fechaingreso">Fecha de Ingreso:</label>
    <input type="date" name="fechaingreso" value="<?= $producto['fechaingreso'] ?>" required><br><br>

    <button type="submit">Actualizar Producto</button>
</form>

<?php
    } else {
        echo "Producto no encontrado.";
    }
    include 'footer.php';
    }
?>