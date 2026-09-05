<?php
if (isset($_POST['nome'])) {
    $nome = htmlspecialchars($_POST['nome']);
    echo "Recebido via POST: $nome";
} else {
    echo "Nenhum dado recebido.";
}
?>