<?php
// Leitura de arquivo JSON
$json = file_get_contents('dados.json');
$dados = json_decode($json, true);

// Exibição em HTML
echo '<h1>Dados do arquivo</h1>';
foreach ($dados as $chave => $valor) {
  echo "<p><strong>$chave:</strong> $valor</p>";
}
