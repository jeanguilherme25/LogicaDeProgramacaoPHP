<?php

if (isset($_POST['btnEnviar'])) {
    $nome = trim($_POST['nomeUsuario']);
    $idade = trim($_POST['idadeUsuario']);
    $numero = trim($_POST['numeroUsuario']);

    if ($nome == '' || $idade == '' || $numero == '') {
        $msgError = 'Preencher todos os campos obrigatórios!';
    } else {
        echo 'Olá ' . $nome . ', você tem ' . $idade . ' anos e o número digitado foi ' . $numero . '.<br>';
        echo '<hr>';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 4</title>
</head>
<body style = "font-family: tahoma;">
    <form action="atividade_1.php" method="post">
        <label>Digite seu nome:</label>
        <input type="text" name="nomeUsuario" value="<?= isset($nome) ? $nome : '' ?>">

        <label>Digite sua idade:</label>
        <input type="number" name="idadeUsuario" value="<?= isset($idade) ? $idade : '' ?>">

        <label>Digite um numero:</label>
        <input type="number" name="numeroUsuario" value="<?= isset($numero) ? $numero : '' ?>">

        <button name="btnEnviar">Enviar</button>

    </form>

    <! - - === validação do php === - ->
    <?= isset($msgError) ? $msgError : '' ?>
    <! - - === final das php ! === - ->
</body>
</html>
        