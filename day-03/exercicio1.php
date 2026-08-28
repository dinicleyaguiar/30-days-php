<?php
// Exercício 1: Verificação de número
$numero = readline('Digite um número: ');
$numero = (float)$numero;

if ($numero > 0) {
    echo "O número é positivo.";
} elseif ($numero < 0) {
    echo "O número é negativo.";
} else {
    echo "O número é zero.";
}
