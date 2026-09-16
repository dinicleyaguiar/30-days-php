<?php
require_once __DIR__ . '/vendor/autoload.php';

use Math\Calculator;

$calc = new Calculator();
$result = $calc->add(5.5, 3.2);
echo "Resultado da soma: $result";
