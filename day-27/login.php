<?php
// login.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    // Verificar credenciais contra arquivo de usuários
    $users = file('users.txt', FILE_IGNORE_NEW_LINES);
    $valid = false;

    foreach ($users as $user) {
        list($u, $p, $role) = explode(',', $user);
        if ($u === $username && $p === $password) {
            $valid = true;
            break;
        }
    }

    if ($valid) {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $role;
        header('Location: protected.php');
        exit;
    }
    echo 'Credenciais inválidas';
}
?>
<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
    <form method="post">
        <input type="text" name="username" placeholder="Usuário" required>
        <input type="password" name="password" placeholder="Senha" required>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>