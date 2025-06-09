<?php
session_start();
if (!isset($_SESSION['carrito']) || empty($_SESSION['carrito'])) {
  echo "Carrito vacío";
} else {
  foreach ($_SESSION['carrito'] as $id => $cantidad) {
    echo "Producto ID: $id - Cantidad: $cantidad ";
    echo "<a href='eliminar.php?id=$id'>Eliminar</a><br>";
  }
}
?>