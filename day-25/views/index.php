<?php

require_once '../controllers/TodoController.php';
require_once '../models/Todo.php';
$todo = new Todo();
$tasks = $todo->getTasks();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Tarefas MVC</title>
</head>
<body>
    <h1>Adicionar Tarefa</h1>
    <form method="post">
        <input type="text" name="task" required>
        <button type="submit">Salvar</button>
    </form>

    <h2>Lista de Tarefas</h2>
    <ul>
        <?php foreach ($tasks as $task): ?>
            <li><?= htmlspecialchars($task['text']) ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>