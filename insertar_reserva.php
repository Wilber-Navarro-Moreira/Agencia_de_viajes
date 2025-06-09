<?php
include 'conexion.php';
$cliente = $_POST['cliente'];
$fecha = $_POST['fecha'];
$vuelo = $_POST['vuelo'];
$hotel = $_POST['hotel'];

$sql = "INSERT INTO RESERVA (id_cliente, fecha_reserva, id_vuelo, id_hotel) VALUES ($cliente, '$fecha', $vuelo, $hotel)";
if ($conn->query($sql) === TRUE) {
    echo "Reserva registrada.";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>