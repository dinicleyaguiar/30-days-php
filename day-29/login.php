<?php
// Função para validar senha
function validarSenha($senha) {
    // Regras: mínimo 8 caracteres, pelo menos 1 letra maiúscula, 1 minúscula e 1 número
    if (strlen($senha) < 8) return false;
    if (!preg_match('/[A-Z]/', $senha)) return false;
    if (!preg_match('/[a-z]/', $senha)) return false;
    if (!preg_match('/[0-9]/', $senha)) return false;
    return true;
}

// Exemplo de uso
$senhaTeste = "Senha123";
if (validarSenha($senhaTeste)) {
    echo "Senha válida";
} else {
    echo "Senha inválida";
}
?>