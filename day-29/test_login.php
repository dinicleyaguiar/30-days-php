<?php
// Testes automatizados para a função validarSenha
$testes = [
    "Senha123" => true,
    "senha123" => false,
    "SENHA123" => false,
    "Senha1234" => true,
    "Senha" => false,
    "Senha2" => false,
    "Senha123!" => true,
];

foreach ($testes as $senha => $esperado) {
    $resultado = validarSenha($senha);
    if ($resultado === $esperado) {
        echo "Teste passou: $senha" . PHP_EOL;
    } else {
        echo "Teste falhou: $senha (esperado: $esperado, obtido: $resultado)" . PHP_EOL;
    }
}
?>