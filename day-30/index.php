<?php
// Verifica se o usuário está logado
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

// Conexão com o banco de dados
$pdo = new PDO('mysql:host=localhost;dbname=quiz_db', 'root', '');

// Exibe todos os quizzes disponíveis
$stmt = $pdo->query('SELECT * FROM quizzes');
$quizzes = $stmt->fetchAll();

// Exibe o HTML com os quizzes
echo '<h1>Quizzes Disponíveis</h1>';
foreach ($quizzes as $quiz) {
    echo '<h2>' . htmlspecialchars($quiz['title']) . '</h2>';
    echo '<a href="take_quiz.php?quiz_id=' . $quiz['id'] . '">Responder</a><br><br>';
}

// Link para criar novo quiz
echo '<a href="create_quiz.php">Criar Novo Quiz</a>';
