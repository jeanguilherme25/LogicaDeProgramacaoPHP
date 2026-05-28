<?php


if (isset($_POST['btnEnviar'])) {
   $nome = trim($_POST['nome']);
   $peso = trim($_POST['peso']);
    $altura = trim($_POST['altura']);

    if ($peso == '' || $altura == '' || $nome == '') {
        echo 'Preencher todos os campos obrigatórios!';
    } else {
        // o metodo de envio de dados  por GET,sera executada pelo php e não pelo html (form),pois é necessrio fazer um redirecionamento
        header("location: ex1_mostrardadossimc.php?nome=$nome&peso=$peso&altura=$altura");
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
    <form action="ex1_pegardadosimc.php" method="POST">
        <label>Digite o seu Nome:</label>
        <input type="text" name="nome" value="<?= $nome ?>">
        <br>
        <label>Digite o seu Peso:</label>
        <input type="text" name="peso" value="<?= $peso ?>">
        <br>
        <label>Digite a sua Altura:</label>
        <input type="text" name="altura" value="<?= $altura ?>">
        <br>
        <button name="btnEnviar">Enviar</button>
    </form>
</body>
</html>
