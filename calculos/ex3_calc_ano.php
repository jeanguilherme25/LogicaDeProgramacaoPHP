<?php

    $janeiroG = '';
    $fevereiroG = '';
    $marcoG = '';
    $abrilG = '';
    $maioG = '';
    $junhoG = '';
    $julhoG = '';
    $agostoG = '';
    $setembroG = '';
    $outubroG = '';
    $novembroG = '';
    $dezembroG = '';
    $janeiroP = '';
    $fevereiroP = '';
    $marcoP = '';
    $abrilP = '';
    $maioP = '';
    $junhoP = '';
    $julhoP = '';
    $agostoP = '';
    $setembroP = '';
    $outubroP = '';
    $novembroP = '';
    $dezembroP = '';

    if (isset($_POST['btnCalcular'])) {
        $janeiroG = $_POST['janeiroG'];
        $fevereiroG = $_POST['fevereiroG'];
        $marcoG = $_POST['marcoG'];
        $abrilG = $_POST['abrilG'];
        $maioG = $_POST['maioG'];
        $junhoG = $_POST['junhoG'];
        $julhoG = $_POST['julhoG'];
        $agostoG = $_POST['agostoG'];
        $setembroG = $_POST['setembroG'];
        $outubroG = $_POST['outubroG'];
        $novembroG = $_POST['novembroG'];
        $dezembroG = $_POST['dezembroG'];
        $janeiroP = $_POST['janeiroP'];
        $fevereiroP = $_POST['fevereiroP'];
        $marcoP = $_POST['marcoP'];
        $abrilP = $_POST['abrilP'];
        $maioP = $_POST['maioP'];
        $junhoP = $_POST['junhoP'];
        $julhoP = $_POST['julhoP'];
        $agostoP = $_POST['agostoP'];
        $setembroP = $_POST['setembroP'];
        $outubroP = $_POST['outubroP'];
        $novembroP = $_POST['novembroP'];
        $dezembroP = $_POST['dezembroP'];

        $janeiroL = $janeiroG - $janeiroP;
        $fevereiroL = $fevereiroG - $fevereiroP;
        $marcoL = $marcoG - $marcoP;
        $abrilL = $abrilG - $abrilP;
        $maioL = $maioG - $maioP;
        $junhoL = $junhoG - $junhoP;
        $julhoL = $julhoG - $julhoP;
        $agostoL = $agostoG - $agostoP;
        $setembroL = $setembroG - $setembroP;
        $outubroL = $outubroG - $outubroP;
        $novembroL = $novembroG - $novembroP;
        $dezembroL = $dezembroG - $dezembroP;

        $totalGanho = $janeiroG + $fevereiroG + $marcoG + $abrilG + $maioG + $junhoG + $julhoG + $agostoG + $setembroG + $outubroG + $novembroG + $dezembroG;
        $totalPerca = $janeiroP + $fevereiroP + $marcoP + $abrilP + $maioP + $junhoP + $julhoP + $agostoP + $setembroP + $outubroP + $novembroP + $dezembroP;
        $totalLucroAno = $totalGanho - $totalPerca;
    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>ex1_calc_ano.php</title>
</head>
<body style="font-family:Segoe UI, sans-serif; margin:20px;">
    <h2>Cálculo de Ganhos e Perdas Anual</h2>
    <form action="ex3_calc_ano.php" method="post">
        <table cellpadding="6" cellspacing="0">
            <tr style="background-color:#f0f0f0;">
                <th>Mês</th>
                <th>Ganho (R$)</th>
                <th>Perda (R$)</th>
                <th>Lucro Mensal (R$)</th>
            </tr>
            <tr>
                <td>Janeiro</td>
                <td><input type="number" name="janeiroG" value="<?= $janeiroG ?>"></td>
                <td><input type="number" name="janeiroP" value="<?= $janeiroP ?>"></td>
                <td><input type="text" disabled value="<?= $janeiroL ?>"></td>
            </tr>
            <tr>
                <td>Fevereiro</td>
                <td><input type="number" name="fevereiroG" value="<?= $fevereiroG ?>"></td>
                <td><input type="number" name="fevereiroP" value="<?= $fevereiroP ?>"></td>
                <td><input type="text" disabled value="<?= $fevereiroL ?>"></td>
            </tr>
            <tr>
                <td>Março</td>
                <td><input type="number" name="marcoG" value="<?= $marcoG ?>"></td>
                <td><input type="number" name="marcoP" value="<?= $marcoP ?>"></td>
                <td><input type="text" disabled value="<?= $marcoL ?>"></td>
            </tr>
            <tr>
                <td>Abril</td>
                <td><input type="number" name="abrilG" value="<?= $abrilG ?>"></td>
                <td><input type="number" name="abrilP" value="<?= $abrilP ?>"></td>
                <td><input type="text" disabled value="<?= $abrilL ?>"></td>
            </tr>
            <tr>
                <td>Maio</td>
                <td><input type="number" name="maioG" value="<?= $maioG ?>"></td>
                <td><input type="number" name="maioP" value="<?= $maioP ?>"></td>
                <td><input type="text" disabled value="<?= $maioL ?>"></td>
            </tr>
            <tr>
                <td>Junho</td>
                <td><input type="number" name="junhoG" value="<?= $junhoG ?>"></td>
                <td><input type="number" name="junhoP" value="<?= $junhoP ?>"></td>
                <td><input type="text" disabled value="<?= $junhoL ?>"></td>
            </tr>
            <tr>
                <td>Julho</td>
                <td><input type="number" name="julhoG" value="<?= $julhoG ?>"></td>
                <td><input type="number" name="julhoP" value="<?= $julhoP ?>"></td>
                <td><input type="text" disabled value="<?= $julhoL ?>"></td>
            </tr>
            <tr>
                <td>Agosto</td>
                <td><input type="number" name="agostoG" value="<?= $agostoG ?>"></td>
                <td><input type="number" name="agostoP" value="<?= $agostoP ?>"></td>
                <td><input type="text" disabled value="<?= $agostoL ?>"></td>
            </tr>
            <tr>
                <td>Setembro</td>
                <td><input type="number" name="setembroG" value="<?= $setembroG ?>"></td>
                <td><input type="number" name="setembroP" value="<?= $setembroP ?>"></td>
                <td><input type="text" disabled value="<?= $setembroL ?>"></td>
            </tr>
            <tr>
                <td>Outubro</td>
                <td><input type="number" name="outubroG" value="<?= $outubroG ?>"></td>
                <td><input type="number" name="outubroP" value="<?= $outubroP ?>"></td>
                <td><input type="text" disabled value="<?= $outubroL ?>"></td>
            </tr>
            <tr>
                <td>Novembro</td>
                <td><input type="number" name="novembroG" value="<?= $novembroG ?>"></td>
                <td><input type="number" name="novembroP" value="<?= $novembroP ?>"></td>
                <td><input type="text" disabled value="<?= $novembroL ?>"></td>
            </tr>
            <tr>
                <td>Dezembro</td>
                <td><input type="number" name="dezembroG" value="<?= $dezembroG ?>"></td>
                <td><input type="number" name="dezembroP" value="<?= $dezembroP ?>"></td>
                <td><input type="text" disabled value="<?= $dezembroL ?>"></td>
            </tr>
        </table>
        <br>
        <button name="btnCalcular">Calcular</button>
    </form>

    <?php if (isset($_POST['btnCalcular'])): ?>
        <h3>Relatório Anual</h3>
        <p>
            <strong>Total de Ganhos:</strong> R$ <?= number_format($totalGanho, 2, ',', '.') ?>
        </p>
        <p>
            <strong>Total de Perdas:</strong> R$ <?= number_format($totalPerca, 2, ',', '.') ?>
        </p>
        <p>
            <strong>Lucro Total do Ano:</strong> R$ <?= number_format($totalLucroAno, 2, ',', '.') ?>
        </p>
    <?php endif; ?>
</body>
</html>