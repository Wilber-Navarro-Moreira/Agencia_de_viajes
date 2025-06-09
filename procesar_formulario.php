<?php
session_start();
$_SESSION['busqueda'] = [
    'nombreHotel' => $_POST['nombreHotel'],
    'ciudad' => $_POST['ciudad'],
    'pais' => $_POST['pais'],
    'fechaViaje' => $_POST['fechaViaje'],
    'duracion' => $_POST['duracion']
];
header('Location: resumen_busqueda.php');
?>
