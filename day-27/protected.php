<?php
// protected.php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

$role = $_SESSION['role'];

if ($role === 'admin') {
    echo '<h1>Página Admin</h1><p>Conteúdo restrito a administradores.</p>';
} else {
    echo '<h1>Página Usuário</h1><p>Conteúdo disponível para usuários comuns.</p>';
}
?>