<?php

if(isset($_GET['nome']) && $_GET['nome'] != '' &&
   isset($_GET['altura']) && $_GET['altura'] != '' &&
   isset($_GET['peso']) && $_GET['peso'] != ''
   ){

    $usuario = trim($_GET['nome']);
    $peso = trim($_GET['peso']);
    $altura = trim($_GET['altura']);

    // round para limitar casas decimais!
    $imc = round($peso / ($altura * $altura), 2);

    if ($imc < 20) {
        $status = "magro";
    } elseif ($imc >= 20 && $imc <= 25) {
        $status = "Peso normal";
    } elseif ($imc > 25 && $imc <= 30) {
        $status = "Sobrepeso";
    } elseif ($imc > 30 && $imc <= 35) {
        $status = "Obesidade grau I";
    } elseif ($imc > 35 && $imc <= 40) {
        $status = "Obesidade grau II";
    } elseif ($imc > 40) {
        $status = "Obesidade grau III";
    } else {
        $status = "impossivel valores negativos!";
    }
} else {
    header('location: ex1_pegardadosimc.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do IMC</title> 
</head>
<body style="font-family: Segoe UI, Tahoma, Geneva, Verdana, sans
-serif;">
    <strong>Nome do Usuário: </strong><span><?= $usuario ?></span>
    <br>
    <strong>Resultado Final:</strong>
    <input disabled value="<?= $imc ?>">
    <br>
    <strong>Situação: </strong><span><?= $status ?></span>
</body>
</html>
