<?php
// Exemplo de array associativo
$dados = [
  'usuario' => 'exemplo',
  'idade' => 30,
  'ativo' => true
];

// Conversão para JSON
$json = json_encode($dados, JSON_PRETTY_PRINT);

// Exibição no navegador
header('Content-Type: application/json');
echo $json;
