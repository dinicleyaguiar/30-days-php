<?php
// Valida entrada e prepara dados para exibição
$numero = filter_input(INPUT_POST, 'numero', FILTER_VALIDATE_INT);
$valido = $numero !== false && $numero > 0;
$mensagem = $valido ? "O número $numero é válido." : "Valor inválido.";
?>