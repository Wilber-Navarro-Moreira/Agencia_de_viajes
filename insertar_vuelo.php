<?php
include 'conexion.php';
$origen = $_POST['origen'];
$destino = $_POST['destino'];
$fecha = $_POST['fecha'];
$plazas = $_POST['plazas'];
$precio = $_POST['precio'];

$sql = "INSERT INTO VUELO (origen, destino, fecha, plazas_disponibles, precio) VALUES ('$origen','$destino','$fecha',$plazas,$precio)";
if ($conn->query($sql) === TRUE) {
    echo "Vuelo insertado correctamente.";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>