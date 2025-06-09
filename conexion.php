<?php
$host = "localhost";
$user = "root";
$password = "#Mnbv124578"; // coloca tu contraseña si usaste una
$db = "AGENCIA";

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
