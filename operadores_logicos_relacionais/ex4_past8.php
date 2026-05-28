<?php
$salario = '';
$aumento = '';

$calculo = '';

if (isset($_POST['btnCalcular'])) {
    $salario = trim($_POST['salario']);
    $aumento = trim($_POST['aumento']);

    $calculo = $salario + ($salario * $aumento / 100);

    if ($calculo <= 100) {
        $calculo = "auemento nivel 1";
    } elseif ($calculo >= 101 && $calculo <= 200) {
        $calculo = "aumento nivel 2";
    } elseif ($calculo >= 201 && $calculo <= 300) {
        $calculo = "aumento nivel 3";
    } elseif ($calculo >= 301 && $calculo  <= 400) {
        $calculo = "aumento nivel 4";
    } elseif ($calculo >= 401) {
        $calculo = "aumento nivel 5";
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
    <title>Atividade 4</title>
</head>

<body style="font-family: Segoe UI, Tahoma, Geneva, Verdana, sans-serif;">
    <form action="ex4_past8.php" method="POST">
        <label>Digite o seu salario:</label>
        <input type="text" name="salario" value="<?= $salario ?>"><br>
        <label>Digite o o seu aumento:</label>
        <input type="text" name="aumento" value="<?= $aumento ?>"><br>
        <button name="btnCalcular">CALCULAR</button>
    </form>
    <strong>Resultado Final:</strong>
    <input disabled value="<?= $calculo ?>">
</body>

</html>