<?php
// divisao.php

try {
    // Verifica se os parâmetros estão presentes
    if (!isset($_GET['a'], $_GET['b'])) {
        throw new Exception('Parâmetros ausentes');
    }

    $a = (float)$_GET['a'];
    $b = (float)$_GET['b'];

    // Validação de entrada
    if ($b === 0) {
        throw new Exception('Divisão por zero');
    }

    $resultado = $a / $b;
    echo "Resultado: $resultado";
} catch (Exception $e) {
    $mensagem = obterMensagemErro($e->getMessage());
    echo "Erro: $mensagem";
}

function obterMensagemErro($codigo) {
    $arquivo = 'mensagens.json';
    if (!file_exists($arquivo)) {
        return 'Erro desconhecido';
    }

    $mensagens = json_decode(file_get_contents($arquivo), true);
    return $mensagens[$codigo] ?? 'Erro inesperado';
}
