<?php
$peso = '';
$altura = '';
$calculo = '';
if (isset($_POST['btnCalcular'])) {
    $peso = trim($_POST['Peso']);
    $altura = trim($_POST['Altura']);

    $calculo = $peso / ($altura * $altura);

    if ($calculo < 20) {
        $calculo = "magro";
    } elseif ($calculo >= 21 && $calculo <= 25) {
        $calculo = "Peso normal";
    } elseif ($calculo >= 26 && $calculo <= 30) {
        $calculo = "Sobrepeso";
    } elseif ($calculo >= 31 && $calculo <= 35) {
        $calculo = "Obesidade grau I";
    } elseif ($calculo >= 36 && $calculo <= 40) {
        $calculo = "Obesidade grau II";
    } elseif ($calculo >= 41) {
        $calculo = "Obesidade grau III";
    } else {
        $calculo = "impossivel valores negativos";
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
    <form action="ex5_past8.php" method="POST">
        <label>Digite o seu Peso:</label>
        <input type="text" name="Peso" value="<?= $peso ?>"><br>
        <label>Digite a sua Altura:</label>
        <input type="text" name="Altura" value="<?= $altura ?>"><br>
        <button name="btnCalcular">CALCULAR</button>
    </form>
    <strong>Resultado Final:</strong>
    <input disabled value="<?= $calculo ?>">
</body>

</html>