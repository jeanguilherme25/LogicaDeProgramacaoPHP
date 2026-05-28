<?php

    if (isset($_POST['btnEnviar'])) {
        $diaUsuario = $_POST['dia'];
        $mesUsuario = $_POST['mes'];
        $anoUsuario = $_POST['ano'];

        echo 'Hoje é dia ' . $diaUsuario . ' do mês de ' . $mesUsuario . ' do ano de ' . $anoUsuario . '<hr>';
        echo 'Hoje é  ' . $diaUsuario . ' / ' . $mesUsuario . ' /' . $anoUsuario . '<hr>';

    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo</title>
</head>
<body style="font-family: Tahoma;">
    <h2>Preencha os dados:</h2>
    <form action="exercicio_3.php" method="post">
        <label>Digite o DIA de hoje :</label>
        <input type="text" name="dia" placeholder="Digite o DIA de hoje aqui...">
        <br>
        <label>Digite o MÊS atual :</label>
        <input type="text" name="mes" placeholder="Digite o MÊS atual aqui...">
        <br>
        <label>Digite o ANO atual:</label>
        <input type="text" name="ano" placeholder="Digite o ANO atual aqui...">
        <br>
        <button name="btnEnviar">Enviar</button>
    </form>
</body>
</html>