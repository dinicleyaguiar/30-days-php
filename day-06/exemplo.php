<?php

require 'funcao.php';

$preco1 = 100;
$percentual1 = 10;
$resultado1 = calcularDesconto($preco1, $percentual1);

$preco2 = 200;
$percentual2 = 15;
$resultado2 = calcularDesconto($preco2, $percentual2);

$preco3 = 50;
$percentual3 = 50;
$resultado3 = calcularDesconto($preco3, $percentual3);

echo "Preço: $preco1, Desconto: $percentual1%, Resultado: $resultado1";
echo "\nPreço: $preco2, Desconto: $percentual2%, Resultado: $resultado2";
echo "\nPreço: $preco3, Desconto: $percentual3%, Resultado: $resultado3";
