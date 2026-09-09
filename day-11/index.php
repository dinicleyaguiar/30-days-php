<?php
// Processa formulário e inclui arquivos necessários
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  require 'validacao.php';
  require 'exibicao.php';
}
?>

<!DOCTYPE html>
<html>
<head><title>Validação de Número</title></head>
<body>
  <form method="post">
    <label>Insira um número:</label>
    <input type="number" name="numero" required>
    <button type="submit">Validar</button>
  </form>
</body>
</html>