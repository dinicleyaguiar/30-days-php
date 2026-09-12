<?php
// Inicia a sessão
session_start();

// Destruir a sessão
session_destroy();

// Redirecionar para login
header('Location: login.php');
exit;
?>