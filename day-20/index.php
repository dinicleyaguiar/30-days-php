<?php
// Verifica se há posts salvos
if (file_exists('posts.json')) {
  $posts = json_decode(file_get_contents('posts.json'), true);
} else {
  $posts = [];
}

// Processa formulário
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $title = trim($_POST['title']);
  $content = trim($_POST['content']);

  if (!empty($title) && !empty($content)) {
    $posts[] = [
      'title' => $title,
      'content' => $content,
      'timestamp' => date('Y-m-d H:i:s')
    ];

    // Salva no arquivo JSON
    file_put_contents('posts.json', json_encode($posts, JSON_PRETTY_PRINT));
    header('Location: index.php');
    exit;
  }
}

// Exibe formulário
?>
<!DOCTYPE html>
<html>
<head>
  <title>Posts</title>
</head>
<body>
  <h1>Meus Posts</h1>
  <form method="post">
    <label>Título:</label>
    <input type="text" name="title" required>
    <br>
    <label>Conteúdo:</label>
    <textarea name="content" required></textarea>
    <br>
    <button type="submit">Adicionar Post</button>
  </form>
  <hr>
  <h2>Posts Salvos:</h2>
  <?php if (!empty($posts)): ?>
    <?php foreach ($posts as $post): ?>
      <div>
        <h3><?= htmlspecialchars($post['title']) ?></h3>
        <p><?= nl2br(htmlspecialchars($post['content'])) ?></p>
        <small><?= $post['timestamp'] ?></small>
      </div>
    <?php endforeach; ?>
  <?php endif; ?>
</body>
</html>