<?php
// Verifica se o usuário está logado
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

// Conexão com o banco de dados
$pdo = new PDO('mysql:host=localhost;dbname=quiz_db', 'root', '');

// Processa o formulário de criação de quiz
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = htmlspecialchars($_POST['title']);
    $questions = json_encode($_POST['questions']);

    $stmt = $pdo->prepare('INSERT INTO quizzes (title, questions) VALUES (?, ?)');
    $stmt->execute([$title, $questions]);
    header('Location: index.php');
    exit;
}

// Exibe o formulário de criação de quiz
echo '<h1>Criar Novo Quiz</h1>';
echo '<form method="post">
    <label>Título do Quiz:</label>
    <input type="text" name="title" required><br><br>

    <label>Perguntas (JSON):</label><br>
    <textarea name="questions" rows="10" cols="50" required></textarea><br><br>

    <input type="submit" value="Criar Quiz">
</form>';
