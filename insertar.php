<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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
}

header("Location: index.php");
exit();
?>