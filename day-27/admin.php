<?php
// admin.php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    header('Location: login.php');
    exit;
}

echo '<h1>Área de Administração</h1><p>Funcionalidades exclusivas para administradores.</p>';
?>