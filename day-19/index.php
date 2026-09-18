<?php require 'db.php';

// Listar todas as tarefas
$stmt = $pdo->query('SELECT * FROM tarefas ORDER BY created_at DESC');
$tarefas = $stmt->fetchAll();

?>
<!DOCTYPE html>
<html>
<head>
  <title>Lista de Tarefas</title>
</head>
<body>
  <h1>Minhas Tarefas</h1>
  <form method="post" action="add-task.php">
    <input type="text" name="descricao" placeholder="Nova tarefa" required>
    <button type="submit">Adicionar</button>
  </form>
  <ul>
    <?php foreach ($tarefas as $tarefa): 
      $classe = $tarefa['concluida'] ? 'completed' : '';
    ?>
    <li class="<?php echo $classe; ?>">
      <span><?php echo htmlspecialchars($tarefa['descricao']); ?></span>
      <div>
        <a href="edit-task.php?id=<?php echo $tarefa['id']; ?>">Editar</a>
        <a href="delete-task.php?id=<?php echo $tarefa['id']; ?>">Excluir</a>
        <a href="toggle-complete.php?id=<?php echo $tarefa['id']; ?>&status=<?php echo $tarefa['concluida'] ? 0 : 1; ?>">Marcar</a>
      </div>
    </li>
    <?php endforeach; ?>
  </ul>
</body>
</html>