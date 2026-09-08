<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $preco = filter_input(INPUT_POST, 'preco', FILTER_VALIDATE_FLOAT);
    $quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_VALIDATE_INT);

    $valido = true;
    if (!$nome) {
        $valido = false;
    }
    if ($preco === false || $preco <= 0) {
        $valido = false;
    }
    if ($quantidade === false || $quantidade < 0) {
        $valido = false;
    }

    if ($valido) {
        $total = $preco * $quantidade;
        $desconto = ($quantidade > 10) ? $total * 0.1 : 0;
        $totalFinal = $total - $desconto;
        $data = date('d/m/Y H:i:s');
        echo "<h2>Resultado</h2>";
        echo "Nome: $nome<br>";
        echo "Preço unitário: R$ $preco<br>";
        echo "Quantidade: $quantidade<br>";
        echo "Total: R$ $totalFinal<br>";
        echo "Data do cálculo: $data";
    } else {
        echo "<h2>Erro: Dados inválidos</h3>";
    }
}
?>