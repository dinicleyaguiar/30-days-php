<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $task = filter_input(INPUT_POST, 'task', FILTER_SANITIZE_STRING);
    if ($task) {
        require_once '../models/Todo.php';
        $todo = new Todo();
        $todo->addTask($task);
        header('Location: ../index.php');
        exit;
    }
}
