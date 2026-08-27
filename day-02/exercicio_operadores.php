<?php
// Exercício: Operadores aritméticos e lógicos
$valor1 = 15;
$valor2 = 5;

$soma = $valor1 + $valor2;
$subtracao = $valor1 - $valor2;
$produto = $valor1 * $valor2;
$divisao = $valor1 / $valor2;
$modulo = $valor1 % $valor2;

echo "Soma: $soma<br>";
echo "Subtração: $subtracao<br>";
echo "Produto: $produto<br>";
echo "Divisão: $divisao<br>";
echo "Módulo: $modulo<br>";

// Operadores lógicos
$condicao1 = ($soma > 10) && ($modulo == 0);
$condicao2 = ($produto < 100) || ($divisao > 5);
$condicao3 = !($subtracao < 0);

echo "Condição 1: $condicao1<br>";
echo "Condição 2: $condicao2<br>";
echo "Condição 3: $condicao3<br>";
?>