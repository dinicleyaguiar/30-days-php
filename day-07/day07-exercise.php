<?php

// Função para processar string
function analisarString($texto) {
    $comprimento = strlen($texto);
    $posEspaco = strpos($texto, ' ');
    $substring = substr($texto, 0, $posEspaco);
    $minusculas = strtolower($texto);
    $maiusculas = strtoupper($texto);
    
    return [
        'comprimento' => $comprimento,
        'posEspaco' => $posEspaco,
        'substring' => $substring,
        'minusculas' => $minusculas,
        'maiusculas' => $maiusculas
    ];
}

// Teste com string exemplo
$resultado = analisarString('PHP é divertido para aprender');
print_r($resultado);
