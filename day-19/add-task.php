<?php require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $descricao = htmlspecialchars($_POST['descricao']);
  $stmt = $pdo->prepare('INSERT INTO tarefas (descricao) VALUES (?)');
  $stmt->execute([$descricao]);
  header('Location: index.php');
  exit;
}
