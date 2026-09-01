<?php
// Array indexado com nomes de alunos
$alunosIndexado = [101 => 'Ana', 102 => 'Bruno', 103 => 'Carla'];

// Array associativo com notas
$notasAssociativo = ['Ana' => 85, 'Bruno' => 92, 'Carla' => 78];

// Combine os arrays em um novo array
$resultado = [];

// Use array_keys para obter as chaves do array associativo
$chaves = array_keys($notasAssociativo);

// Preencha o array final com os dados combinados
foreach ($chaves as $chave) {
    $resultado[$chave] = [$alunosIndexado[$chave], $notasAssociativo[$chave]];
}

// Exiba os resultados
print_r($resultado);
