<?php
try {
  $pdo = new PDO('mysql:host=localhost;dbname=teste', 'usuario', 'senha');
  $stmt = $pdo->query("SELECT * FROM usuarios");
  while ($row = $stmt->fetch()) {
    echo "ID: $row[id], Nome: $row[nome]";
  }
} catch (PDOException $e) {
  die("Erro: " . $e->getMessage());
}
