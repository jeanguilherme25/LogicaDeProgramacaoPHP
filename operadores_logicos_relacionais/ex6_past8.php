<?php

    $salario = '';
    $calculo = '';
    $msg = '';

    if (isset($_POST['btnCalcular'])) {
        $salario = trim($_POST['salario']);

        if($salario == ""){
            echo 'Preencher o campo obrigatório salário!';
        }else{

            $priAumento = ($salario * 15) / 100;
            $segAumento = ($salario * 18) / 100;
            $totalAumento = $priAumento + $segAumento;
            $calculo = $salario + $priAumento + $segAumento;

             if ($totalAumento < 100) {
                $msg = "Aumento ruim";
            } elseif ($totalAumento >= 101 && $totalAumento <= 200) {
                $msg = "Aumento razoavel";
            } elseif ($totalAumento >= 201 && $totalAumento <= 300) {
                $msg = "Aumento bom";
            } elseif ($totalAumento >= 301 && $totalAumento <= 400) {
                $msg = "Aumento otimo";
            } elseif ($totalAumento >= 401) {
                $msg = "Aumento excelente";
            } else {
                $msg = "impossivel valores negativos";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 6</title>
</head>

<body style="font-family: Segoe UI, Tahoma, Geneva, Verdana, sans-serif;">
    <form action="ex6_past8.php" method="POST">
        <label>Digite o seu salario:</label>
        <input type="text" name="salario" value="<?= $salario ?>"><br>
        <br>
        <button name="btnCalcular">Calcular</button>
    </form>
    <strong>Resultado Final:</strong>
    <input disabled value="<?= $calculo ?>">
    <input disabled value="<?= $msg ?>">
</body>

</html>