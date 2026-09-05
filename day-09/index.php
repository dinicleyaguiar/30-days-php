<!DOCTYPE html>
<html>
<head>
    <title>Formulário</title>
</head>
<body>
    <h2>Envio via GET</h2>
    <form action="process_get.php" method="get">
        Nome: <input type="text" name="nome">
        <input type="submit" value="Enviar">
    </form>

    <h2>Envio via POST</h2>
    <form action="process_post.php" method="post">
        Nome: <input type="text" name="nome">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>