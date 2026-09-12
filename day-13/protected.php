<?php
// Inicia a sessão
session_start();

// Verifica se o usuário está autenticado
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    die('Acesso negado. <a href="login.php">Voltar para login</a>');
}

// Conteúdo protegido
?>
<h1>Bem-vindo ao conteúdo protegido!</h1>
<p><a href="logout.php">Sair</a></p>