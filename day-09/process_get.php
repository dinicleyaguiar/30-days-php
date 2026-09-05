<?php
if (isset($_GET['nome'])) {
    $nome = htmlspecialchars($_GET['nome']);
    echo "Recebido via GET: $nome";
} else {
    echo "Nenhum dado recebido.";
}
?>