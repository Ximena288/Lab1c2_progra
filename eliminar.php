<?php
include 'conexion.php';

if (isset($_GET['idproducto'])) {
    $idproducto = $_GET['idproducto'];
    $sql = "DELETE FROM productos WHERE idproducto=$idproducto";
    if ($conn->query($sql) === TRUE) {
        echo "Producto eliminado correctamente";
    } else {
        echo "Error: " . $conn->error;
    }
}

header("Location: index.php");
exit();
?>