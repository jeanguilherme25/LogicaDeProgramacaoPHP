<?php

if (isset($_POST['btnEnviar'])) {
    $valor1 = trim($_POST['valor1']);
    $valor2 = trim($_POST['valor2']);
    $valor3 = trim($_POST['valor3']);
    $valor4 = trim($_POST['valor4']);
    $valor5 = trim($_POST['valor5']);

    if ($valor1 == '' || $valor2 == '' || $valor3 == '' || $valor4 == '' || $valor5 == '') {
        $msgerror='Preencher todos os campos obrigatórios!';
        $mensagem = "<span style='color:red;'>$msgerror</span>";
    } else {
        header("location: ex2_resultados.php?valor1=$valor1&valor2=$valor2&valor3=$valor3&valor4=$valor4&valor5=$valor5");
        exit;
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pegar Dados</title>
</head>

<body style="font-family: Segoe UI, Tahoma, Geneva, Verdana, sans
-serif;">
    <form action="ex2_pegardados.php" method="POST">
        <label>Digite o Valor 1:</label>
        <input type="text" name="valor1" value="<?= isset($valor1) ? $valor1 : '' ?>">
        <br>
        <label>Digite o Valor 2:</label>
        <input type="text" name="valor2" value="<?= isset($valor2) ? $valor2 : '' ?>">
        <br>
        <label>Digite o Valor 3:</label>
        <input type="text" name="valor3" value="<?= isset($valor3) ? $valor3 : '' ?>">
        <br>
        <label>Digite o Valor 4:</label>
        <input type="text" name="valor4" value="<?= isset($valor4) ? $valor4 : '' ?>">
        <br>
        <label>Digite o Valor 5:</label>
        <input type="text" name="valor5" value="<?= isset($valor5) ? $valor5 : '' ?>">
        <br>
        <button name="btnEnviar">Enviar</button>
    </form>
    <!--retorno de validação do php-->
    <?= isset($mensagem) ? $mensagem : '' ?>
    <!------------------------------------>
</body>
</form>