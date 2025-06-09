<?php
class Filtro {
    public $nombreHotel;
    public $ciudad;
    public $pais;
    public $fechaViaje;
    public $duracion;

    public function __construct($nombreHotel, $ciudad, $pais, $fechaViaje, $duracion) {
        $this->nombreHotel = $nombreHotel;
        $this->ciudad = $ciudad;
        $this->pais = $pais;
        $this->fechaViaje = $fechaViaje;
        $this->duracion = $duracion;
    }

    public function mostrarResumen() {
        return "Hotel: $this->nombreHotel, Destino: $this->ciudad, $this->pais, Fecha: $this->fechaViaje, Duracion: $this->duracion dias";
    }
}
?>
