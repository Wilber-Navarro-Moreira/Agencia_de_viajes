<?php
session_start();
echo "<h2>Resumen de busqueda:</h2>";
foreach ($_SESSION['busqueda'] as $campo => $valor) {
    echo ucfirst($campo) . ": " . htmlspecialchars($valor) . "<br>";
}
?>