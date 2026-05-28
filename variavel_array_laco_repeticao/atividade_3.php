<?php
if (isset($_POST['btnEnviar'])) {
    $numero = trim($_POST['numeroRepeticao']);

    if ($numero == '') {
        $msgError = 'Preencher o campo obrigatório!';
    } else {
        for ($i = 1; $i <= $numero; $i++) {
            echo 'Esta é a repetição número ' . $i . '.<br>';
        }
        echo '<hr>';
    }
}
?>


<!DOCTYPE html>
<hmtl lang = "pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3</title>
</head>
<body style="font-family: Segoe UI, Tahoma;">
    <form action="atividade_3.php" method="POST">
        <label>digite um número que informe a quantidade de vezes de repetição:</label>
        <input type="number" name="numeroRepeticao" value="<?=  isset($numero) ? $numero : ''  ?>">
        <button name="btnEnviar">Enviar</button>
    </form>

    <! - - === validação do php === - ->
    <?= isset($msgError) ? $msgError : '' ?>
    <! - - === final das php ! === - ->
</body>
</hmtl>

