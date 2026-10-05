<?php
// Verifica se o usuário está logado
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

// Conexão com o banco de dados
$pdo = new PDO('mysql:host=localhost;dbname=quiz_db', 'root', '');

// Obtém o quiz pelo ID
$quiz_id = intval($_GET['quiz_id']);
$stmt = $pdo->prepare('SELECT * FROM quizzes WHERE id = ?');
$stmt->execute([$quiz_id]);
$quiz = $stmt->fetch();

// Processa as respostas
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $answers = json_decode($_POST['answers'], true);
    $correct = 0;

    $questions = json_decode($quiz['questions'], true);
    foreach ($questions as $question) {
        $correct_answer = $question['correct_answer'];
        if (isset($answers[$question['id']]) && $answers[$question['id']] === $correct_answer) {
            $correct++;
        }
    }

    // Armazena o resultado
    $stmt = $pdo->prepare('INSERT INTO results (user_id, quiz_id, score) VALUES (?, ?, ?)');
    $stmt->execute([$_SESSION['user_id'], $quiz_id, $correct]);

    // Exibe o resultado
    echo '<h1>Resultado do Quiz</h1>';
    echo '<p>Você acertou ' . $correct . ' de ' . count($questions) . ' perguntas.</p>';
    echo '<a href="index.php">Voltar</a>';
    exit;
}

// Exibe o quiz
echo '<h1>' . htmlspecialchars($quiz['title']) . '</h1>';
$questions = json_decode($quiz['questions'], true);

echo '<form method="post">
    <input type="hidden" name="quiz_id" value="' . $quiz_id . '">
    <input type="hidden" name="answers" value="{}">

    <ol>
        ';

foreach ($questions as $question) {
    echo '<li>' . htmlspecialchars($question['question']) . '<br><br>';
    echo '<input type="hidden" name="answers[' . $question['id'] . ']" value="' . htmlspecialchars($question['correct_answer']) . '">
    <input type="radio" name="answers[' . $question['id'] . ']" value="' . htmlspecialchars($question['option1']) . '">' . htmlspecialchars($question['option1']) . '<br>';
    echo '<input type="radio" name="answers[' . $question['id'] . ']" value="' . htmlspecialchars($question['option2']) . '">' . htmlspecialchars($question['option2']) . '<br>';
    echo '<input type="radio" name="answers[' . $question['id'] . ']" value="' . htmlspecialchars($question['option3']) . '">' . htmlspecialchars($question['option3']) . '<br>';
    echo '<input type="radio" name="answers[' . $question['id'] . ']" value="' . htmlspecialchars($question['option4']) . '">' . htmlspecialchars($question['option4']) . '<br><br>';
}

echo '    </ol>
    <input type="submit" value="Enviar Respostas">
</form>';
