<?php
require_once 'Retangulo.php';

class Quadrado extends Retangulo {
    public function __construct(float $lado) {
        parent::__construct($lado, $lado);
    }
}
