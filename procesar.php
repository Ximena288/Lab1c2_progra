<?php
include 'conexion.php';

if (isset($_POST['accion'])) {
    $accion = $_POST['accion'];

    switch ($accion) {
        case 'insertar':
            $nombre = $_POST['nombre'];
            $categoria = $_POST['categoria'];
            $cantidaddisponible = $_POST['cantidaddisponible'];
            $fechaingreso = $_POST['fechaingreso'];

            $sql = "INSERT INTO productos (nombre, categoria, cantidaddisponible, fechaingreso) VALUES ('$nombre', '$categoria', '$cantidaddisponible', '$fechaingreso')";

            if ($conn->query($sql) === TRUE) {
                echo "Producto insertado correctamente";
            } else {
                echo "Error: " . $conn->error;
            }
            break;

        case 'actualizar':
            $idproducto = $_POST['idproducto']; // Asegúrate de tener un campo oculto con el id
            $nombre = $_POST['nombre'];
            $categoria = $_POST['categoria'];
            $cantidaddisponible = $_POST['cantidaddisponible'];
            $fechaingreso = $_POST['fechaingreso'];

            $sql = "UPDATE productos SET nombre='$nombre', categoria='$categoria', cantidaddisponible='$cantidaddisponible', fechaingreso='$fechaingreso' WHERE idproducto=$idproducto";

            if ($conn->query($sql) === TRUE) {
                echo "Producto actualizado correctamente";
            } else {
                echo "Error: " . $conn->error;
            }
            break;

        case 'eliminar':
            $idproducto = $_POST['idproducto']; // Asegúrate de tener un campo oculto con el id

            $sql = "DELETE FROM productos WHERE idproducto=$idproducto";

            if ($conn->query($sql) === TRUE) {
                echo "Producto eliminado correctamente";
            } else {
                echo "Error: " . $conn->error;
            }
            break;
    }
}

$conn->close();
header("Location: index.php"); // Redirige a index.php después de procesar
exit();
?>