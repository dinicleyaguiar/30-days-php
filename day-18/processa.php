<?php
try {
  $pdo = new PDO('mysql:host=localhost;dbname=teste', 'usuario', 'senha');
  $stmt = $pdo->prepare("INSERT INTO usuarios (nome, email) VALUES (?, ?)");
  $stmt->execute([$_POST['nome'], $_POST['email']]);
  echo "Dados salvos com sucesso";
} catch (PDOException $e) {
  die("Erro: " . $e->getMessage());
}
