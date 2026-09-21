<?php
require_once 'Forma.php';

class Circulo extends Forma {
    private float $raio;

    public function __construct(float $raio) {
        $this->raio = $raio;
    }

    public function calcularArea(): float {
        return π * $this->raio ** 2;
    }
}
