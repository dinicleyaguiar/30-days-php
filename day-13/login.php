<?php
// Inicia a sessão
session_start();

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Validação simples (exemplo)
    if ($username === 'admin' && $password === '1234') {
        $_SESSION['authenticated'] = true;
        header('Location: protected.php');
        exit;
    } else {
        echo 'Credenciais inválidas';
    }
}

// Formulário de login
?>
<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
<form method="post">
  <label>Usuário: <input type="text" name="username"></label><br>
  <label>Senha: <input type="password" name="password"></label><br>
  <button type="submit">Entrar</button>
</form>
</body>
</html>