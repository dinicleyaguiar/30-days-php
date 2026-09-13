<?php
// Verifica se o cookie já existe
if (isset($_COOKIE['usuario'])) {
    echo '<p>Bem-vindo de volta, ' . htmlspecialchars($_COOKIE['usuario']) . '!</p>';
} else {
    // Formulário para cadastro
    echo '<form method="post">
        Nome: <input type="text" name="usuario" required>
        <input type="submit" value="Salvar">
    </form>';
}

// Processa formulário
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = htmlspecialchars($_POST['usuario']);
    setcookie('usuario', $usuario, time() + 30*24*3600, '/');
    header('Location: exercicio14.php');
    exit;
}
?>