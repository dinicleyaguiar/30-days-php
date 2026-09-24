<?php

class Todo {
    private $tasks = [];

    public function addTask($task) {
        $this->tasks[] = ['id' => count($this->tasks) + 1, 'text' => $task, 'completed' => false];
    }

    public function getTasks() {
        return $this->tasks;
    }
}
