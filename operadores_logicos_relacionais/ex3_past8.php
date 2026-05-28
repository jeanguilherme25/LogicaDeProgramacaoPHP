<?php

$valor1 = '';
$valor2 = '';
$valor3 = '';
$valor4 = '';


if (isset($_POST['btnCalcular'])) {
    $valor1 = trim($_POST['valor1']);
    $valor2 = trim($_POST['valor2']);
    $valor3 = trim($_POST['valor3']);
    $valor4 = trim($_POST['valor4']);
    // ele deve verificar se o aluno está aprovado, de exame ou reprovado
    if ($valor1 || $valor2 || $valor3 || $valor4 < 39) {
        $verificar = "o aluno reprovado";
    } elseif ($valor1 && $valor2 && $valor3 && $valor4 > 40 &&  $valor1 && $valor2 && $valor3 && $valor4 < 59) {
        $verificar = "o aluno está de exame";
    } else {
        $verificar = "o aluno está aprovado";
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 5</title>
</head>

<body style="font-family: Segoe UI, Tahoma, Geneva, Verdana, sans-serif;">
    <form action="ex3_past8.php" method="POST">
        <label>Digite o Primeiro Valor:</label>
        <input type="text" name="valor1"> <?= $valor1 ?>"><br>
        <label>Digite o Segundo Valor:</label>
        <input type="text" name="valor2"> <?= $valor2 ?>"><br>

        <label>Digite o Terceiro Valor:</label>
        <input type="text" name="valor3"> <?= $valor3 ?>"><br>

        <label>Digite o Quarto Valor:</label>
        <input type="text" name="valor4" value="<?= $valor4 ?>"><br>


        <button name="btn_verificar">Verificar</button>
    </form>
    <br warning="true">
    <strong>Legenda:</strong>
    <br>
    <strong>Reprovado:</strong> abaixo de 39 pontos
    <br>
    <strong>Exame:</strong> entre 40 e 69 pontos
    <br>
    <strong>Aprovado:</strong> acima de 70 pontos
    <br>
    <strong> Resultado Final: </strong>  
    <input disabled value=" <?= $verificar ?> ">

</body>

</html>