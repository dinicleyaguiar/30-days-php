<?php
// register.php

// Verificação de submissão do formulário
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validação de campos
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Validação básica
    if (empty($username) || empty($password)) {
        die('Erro: Todos os campos são obrigatórios.');
    }

    if (strlen($username) < 5) {
        die('Erro: O nome de usuário deve ter pelo menos 5 caracteres.');
    }

    // Sanitização de dados
    $username = filter_var($username, FILTER_SANITIZE_STRING);
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Conexão com o banco de dados (exemplo com SQLite)
    $pdo = new PDO('sqlite:users.db');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO.ATTR_ERRMODE_EXCEPTION);

    // Preparação da consulta
    $stmt = $pdo->prepare('INSERT INTO users (username, password) VALUES (?, ?)');
    $stmt->execute([$username, $password]);

    echo 'Registro bem-sucedido!';
} else {
    // Exibe o formulário
    echo '<form method="post">
        Nome de usuário: <input type="text" name="username" required><br>
        Senha: <input type="password" name="password" required><br>
        <input type="submit" value="Registrar">
    </form>';
}
