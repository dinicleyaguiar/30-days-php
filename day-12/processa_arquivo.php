<?php
// Verifica se o arquivo de entrada existe
$entrada = 'dados.txt';
$saida = 'saida_' . date('YmdHis') . '.txt';

if (!file_exists($entrada)) {
    die("Arquivo de entrada não encontrado!");
}

// Abre o arquivo para leitura
$fp = fopen($entrada, 'r');
if (!$fp) {
    die("Não foi possível abrir o arquivo!");
}

// Lê o conteúdo completo
$content = fread($fp, filesize($entrada));
fclose($fp);

// Processa o conteúdo
$processed = strtolower($content);

// Escreve no arquivo de saída
$fp_saida = fopen($saida, 'w');
if (!$fp_saida) {
    die("Não foi possível criar o arquivo de saída!");
}

fwrite($fp_saida, $processed);
fclose($fp_saida);

echo "Processamento concluído. Arquivo de saída: $saida";
?>