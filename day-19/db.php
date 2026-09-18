<?php
$host = 'localhost';
$db = 'crud_tarefas';
$user = 'root';
$pass = '';

try {
  $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("Conexão falhou: " . $e->getMessage());
}
