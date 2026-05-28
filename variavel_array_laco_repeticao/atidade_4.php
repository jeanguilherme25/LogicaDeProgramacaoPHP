<?php 
if (isset($_POST['btnEnviar'])) {
    $tabuada = trim($_POST['tabuada']);

    if ($tabuada == '') {
        $msgError = 'Preencher o campo obrigatório!';
    } else {
        echo 'Tabuada do ' . $tabuada . ':<br>';
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $tabuada * $i;
            echo $tabuada . ' x ' . $i . ' = ' . $resultado . '<br>';
        }
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

<body style="font-family: tahoma;">
    <form action="atividade_4.php" method="POST">
        <label>selecione a tabuada desejada:</label>
        <select name="tabuada">
            <option value="">Selecione</option>
            <opiton value="1">Tabuada do 1</option>
                <option value="2">Tabuada do 2</option>
                <option value="3">Tabuada do 3</option>
                <option value="4">Tabuada do 4</option>
                <option value="5">Tabuada do 5</option>
                <option value="6">Tabuada do 6</option>
                <option value="7">Tabuada do 7</option>
                <option value="8">Tabuada do 8</option>
                <option value="9">Tabuada do 9</option>
                <option value="10">Tabuada do 10</option>
        </select>
        <br>
        <button name="btnEnviar">Enviar</button>
    </form>

    <! - -====validação do php===- ->
        <?= isset($msgError) ? $msgError : '' ?>
        <! - -====final do php===- ->

</body>

</html>