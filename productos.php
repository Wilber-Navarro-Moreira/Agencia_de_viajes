<?php
session_start();
$paquetes = [
  ['id' => 1, 'nombre' => 'Paquete a Calama', 'precio' => 175000],
  ['id' => 2, 'nombre' => 'Tour Europa', 'precio' => 500000],
  ['id' => 3, 'nombre' => 'Paquete Patagonia', 'precio' => 400000],
  ['id' => 4, 'nombre' => 'Mexico All-inclusive', 'precio' => 900000],
  ['id' => 5, 'nombre' => 'Especial China-Japon', 'precio' => 1400000]
];
foreach ($paquetes as $paquete) {
  echo "<div>" . $paquete['nombre'] . " - $" . $paquete['precio'] .
       " <a href='agregar.php?id=" . $paquete['id'] . "'>Agregar al carrito</a></div><br>";
}
?>