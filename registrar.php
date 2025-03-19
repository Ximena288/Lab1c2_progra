<?php include 'conexion.php'; ?>
<?php include 'header.php'; ?>

<h2>Insertar / Editar / Eliminar Producto</h2>

<form method="post" action="procesar.php">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" required><br><br>

    <label for="categoria">Categoría:</label>
    <input type="text" name="categoria" required><br><br>

    <label for="cantidaddisponible">Cantidad Disponible:</label>
    <input type="number" name="cantidaddisponible" required><br><br>

    <label for="fechaingreso">Fecha de Ingreso:</label>
    <input type="date" name="fechaingreso" required><br><br>

    <button type="submit" name="accion" value="insertar">Insertar Producto</button>
    <button type="submit" name="accion" value="actualizar">Actualizar Producto</button>
    <button type="submit" name="accion" value="eliminar">Eliminar Producto</button>
</form>

<?php include 'footer.php'; ?>