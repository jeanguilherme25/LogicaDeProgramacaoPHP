<?php

    $ganho_jan = '';
    $ganho_fev = '';
    $ganho_mar = '';
    $ganho_abr = '';
    $ganho_mai = '';
    $ganho_jun = '';
    $ganho_jul = '';
    $ganho_ago = '';
    $ganho_set = '';
    $ganho_out = '';
    $ganho_nov = '';
    $ganho_dez = '';

    $perda_jan = '';
    $perda_fev = '';
    $perda_mar = '';
    $perda_abr = '';
    $perda_mai = '';
    $perda_jun = '';
    $perda_jul = '';
    $perda_ago = '';
    $perda_set = '';
    $perda_out = '';
    $perda_nov = '';
    $perda_dez = '';

    $lucro_jan = '';
    $lucro_fev = '';
    $lucro_mar = '';
    $lucro_abr = '';
    $lucro_mai = '';
    $lucro_jun = '';
    $lucro_jul = '';
    $lucro_ago = '';
    $lucro_set = '';
    $lucro_out = '';
    $lucro_nov = '';
    $lucro_dez = '';

    $total_ganhos = '';
    $total_perdas = '';
    $total_lucros = '';

    if(isset($_POST['btn_calcular'])){
        $ganho_jan = $_POST['gan_jan'];
        $ganho_fev = $_POST['gan_fev'];
        $ganho_mar = $_POST['gan_mar'];
        $ganho_abr = $_POST['gan_abr'];
        $ganho_mai = $_POST['gan_mai'];
        $ganho_jun = $_POST['gan_jun'];
        $ganho_jul = $_POST['gan_jul'];
        $ganho_ago = $_POST['gan_ago'];
        $ganho_set = $_POST['gan_set'];
        $ganho_out = $_POST['gan_out'];
        $ganho_nov = $_POST['gan_nov'];
        $ganho_dez = $_POST['gan_dez'];

        $perda_jan = $_POST['per_jan'];
        $perda_fev = $_POST['per_fev'];
        $perda_mar = $_POST['per_mar'];
        $perda_abr = $_POST['per_abr'];
        $perda_mai = $_POST['per_mai'];
        $perda_jun = $_POST['per_jun'];
        $perda_jul = $_POST['per_jul'];
        $perda_ago = $_POST['per_ago'];
        $perda_set = $_POST['per_set'];
        $perda_out = $_POST['per_out'];
        $perda_nov = $_POST['per_nov'];
        $perda_dez = $_POST['per_dez'];

        $total_ganhos = $ganho_jan + $ganho_fev + $ganho_mar + $ganho_abr + $ganho_mai + $ganho_jun + $ganho_jul + $ganho_ago + $ganho_set + $ganho_out + $ganho_nov + $ganho_dez;
        $total_perdas = $perda_jan + $perda_fev + $perda_mar + $perda_abr + $perda_mai + $perda_jun + $perda_jul + $perda_ago + $perda_set + $perda_out + $perda_nov + $perda_dez;

        $lucro_jan = $ganho_jan - $perda_jan;
        $lucro_fev = $ganho_fev - $perda_fev;
        $lucro_mar = $ganho_mar - $perda_mar;
        $lucro_abr = $ganho_abr - $perda_abr;
        $lucro_mai = $ganho_mai - $perda_mai;
        $lucro_jun = $ganho_jun - $perda_jun;
        $lucro_jul = $ganho_jul - $perda_jul;
        $lucro_ago = $ganho_ago - $perda_ago;
        $lucro_set = $ganho_set - $perda_set;
        $lucro_out = $ganho_out - $perda_out;
        $lucro_nov = $ganho_nov - $perda_nov;
        $lucro_dez = $ganho_dez - $perda_dez;

        $total_lucros = $total_ganhos - $total_perdas;
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo Anual</title>
</head>
<body style="font-family: Segoe UI, Tahoma, Geneva, Verdana, sans-serif;">
    <form action="ex3_corrig_calc_ano.php" method="POST">

        <h3>Ganhos</h3>
        <?php
            $meses = ["jan","fev","mar","abr","mai","jun","jul","ago","set","out","nov","dez"];

            foreach($meses as $m){
                echo "<label>Ganho do mês de $m:</label> <input type='text' name='gan_$m'><br>";
            }
        ?>

        <h3>Perdas</h3>
        <?php
            foreach($meses as $m){
                echo "<label>Perda do mês de $m:</label> <input type='text' name='per_$m'><br>";
            }
        ?>
        <br>
        <button name="btn_calcular">CALCULAR</button>
    </form>

    <h3>Resultados</h3>
    <p>
        <b>Total de Ganhos:</b> <?= $total_ganhos ?>
    </p>
    <p>
        <b>Total de Perdas:</b> <?= $total_perdas ?>
    </p>
    <p>
        <b>Lucro Anual:</b> <?= $total_lucros ?>
    </p>
</body>
</html>
