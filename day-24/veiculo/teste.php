<?php

require_once 'Carro.php';
require_once 'Moto.php';

$carro = new Carro();
$carro->ligar();
$carro->acelerar(120);
$carro->freiar();

$moto = new Moto();
$moto->empinar();
$moto->acelerar(90);
$moto->freiar();
