<?php
$conexion = new mysqli("localhost", "root", "#Mnbv124578");


if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

$sql = "CREATE DATABASE AGENCIA";
if ($conexion->query($sql) === TRUE) {
    echo "Base de datos AGENCIA creada correctamente.";
} else {
    echo "Error al crear la base de datos: " . $conexion->error;
}
$conexion->close();
?>
