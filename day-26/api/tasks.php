<?php
// Conexão PDO
$pdo = new PDO('mysql:host=localhost;dbname=tasks', 'root', '');

// Configurações de cabeçalho
header('Content-Type: application/json');

// Rota principal
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($uri) {
    case '/tasks':
        // Listar tarefas
        $stmt = $pdo->query('SELECT * FROM tasks');
        $tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($tasks);
        break;

    case '/tasks':
        // Criar tarefa
        $data = json_decode(file_get_contents('php://input'), true);
        if (isset($data['title'])) {
            $stmt = $pdo->prepare('INSERT INTO tasks (title) VALUES (?)');
            $stmt->execute([$data['title']]);
            echo json_encode(['id' => $pdo->lastInsertId()]);
        } else {
            http_response_code(400);
            echo json_encode(['error' => 'Título é obrigatório']);
        }
        break;

    case '/tasks/\d+':
        // Atualizar tarefa
        $id = intval(preg_replace('/[^0-9]/', '', $uri));
        $data = json_decode(file_get_contents('php://input'), true);
        if (isset($data['title'])) {
            $stmt = $pdo->prepare('UPDATE tasks SET title = ? WHERE id = ?');
            $stmt->execute([$data['title'], $id]);
            echo json_encode(['success' => true]);
        } else {
            http_response_code(400);
            echo json_encode(['error' => 'Título é obrigatório']);
        }
        break;

    case '/tasks/\d+':
        // Excluir tarefa
        $id = intval(preg_replace('/[^0-9]/', '', $uri));
        $stmt = $pdo->prepare('DELETE FROM tasks WHERE id = ?');
        $stmt->execute([$id]);
        echo json_encode(['success' => true]);
        break;

    default:
        http_response_code(404);
        echo json_encode(['error' => 'Rota não encontrada']);
}
