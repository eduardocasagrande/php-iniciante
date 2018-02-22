<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div>
    <form method="post">
        <input type="text" placeholder="nome" name="nome">
        <button name="enviar" type="submit">Enviar</button>
    </form>
</div>
</body>
</html>

<?php
if (isset($_POST[ 'enviar'])) {

    $nome = $_POST['nome'];
    echo "nome: {$nome}";

}