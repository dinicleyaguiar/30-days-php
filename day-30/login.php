<?php
// Verifica se o usuário já está logado
if (isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}

// Conexão com o banco de dados
$pdo = new PDO('mysql:host=localhost;dbname=quiz_db', 'root', '');

// Processa o formulário de login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    $stmt = $pdo->prepare('SELECT * FROM users WHERE username = ?');
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        header('Location: index.php');
        exit;
    }
    echo '<p>Usuário ou senha inválidos.</p>';
}

// Exibe o formulário de login
echo '<h1>Login</h1>';
echo '<form method="post">
    <label>Usuário:</label>
    <input type="text" name="username" required><br><br>

    <label>Senha:</label>
    <input type="password" name="password" required><br><br>

    <input type="submit" value="Login">
</form>';
