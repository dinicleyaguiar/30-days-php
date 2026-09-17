<?php
try {
  $pdo = new PDO('mysql:host=localhost;dbname=teste', 'usuario', 'senha');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Conexão bem-sucedida";
} catch (PDOException $e) {
  die("Erro: " . $e->getMessage());
}
