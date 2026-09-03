<?php

// Teste com diferentes strings
$testes = [
    'PHP é divertido para aprender',
    'Manipulação de strings é essencial',
    'Funções de texto simplificam o trabalho'
];

foreach ($testes as $texto) {
    $resultado = analisarString($texto);
    echo "Texto: $texto\n";
    print_r($resultado);
    echo "\n\n";
}
