<?php

    $peso = '';
    $altura = '';
    $nome = '';

    if (isset($_POST['btnMostrar'])) {
        $nome = trim($_POST['nome']);
        $altura = trim($_POST['altura']);
        $peso = trim($_POST['peso']);

        if ($peso == '' || $altura == '' || $nome == '') {
            echo 'Preencher todos os campos obrigatórios!';
        } else {
            header("location: 2_pagina.php?nome=$nome&peso=$peso&altura=$altura");
            exit;
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo IMC</title>
</head>
<body style="font-family: Segoe UI, Tahoma, Geneva, Verdana, sans-serif;">
    <form action="1_pagina.php" method="POST">
        <label>Digite o seu Peso:</label>
        <input type="text" name="peso" value="<?= $peso ?>">
        <br>
        <label>Digite a sua Altura:</label>
        <input type="text" name="altura" value="<?= $altura ?>">
        <br>
        <label>Digite o seu Nome:</label>
        <input type="text" name="nome" value="<?= $nome ?>">
        <br>
        <button name="btnMostrar">Mostrar</button>
    </form>
</body>
</html>