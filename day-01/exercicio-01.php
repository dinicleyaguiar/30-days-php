<?php
// Exercício: Variáveis e tipos de dados
$idade = 25;
$nome = "João";
$temFilho = true;
$preco = 19.99;

// Exiba os tipos de cada variável
var_dump($idade);
var_dump($nome);
var_dump($temFilho);
var_dump($preco);

// Teste conversão implícita
$valor = "123";
$valorInt = (int)$valor;
$valorFloat = (float)$valor;

// Mostre resultados da conversão
echo "Valor original: $valor (tipo: " . gettype($valor) . ")\n";
echo "Convertido para inteiro: $valorInt (tipo: " . gettype($valorInt) . ")\n";
echo "Convertido para float: $valorFloat (tipo: " . gettype($valorFloat) . ")\n";
?>