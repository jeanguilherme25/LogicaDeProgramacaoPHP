<?php

    $janeiro = '';
    $fevereiro = '';
    $março = '';
    $abril = ''; 
    $maio = '';
    $junho = '';
    $junho = '';
    $julho = '';
    $agosto = '';
    $setembro = '';
    $outubro = '';
    $novembro = '';
    $dezembro = '';
    $resultado = '';

    if (isset($_POST['btnEnvio'])) {
        $janeiro = $_POST['janeiro'];
        $fevereiro = $_POST['fevereiro'];
        $março = $_POST['março'];
        $abril = $_POST['abril'];
        $maio = $_POST['maio'];
        $junho = $_POST['junho'];
        $julho = $_POST['julho'];
        $agosto = $_POST['agosto'];
        $setembro = $_POST['setembro'];
        $outubro = $_POST['outubro'];
        $novembro = $_POST['novembro'];
        $dezembro = $_POST['dezembro'];

        $resultado = $janeiro + $fevereiro + $março + $abril + $maio + $junho + $julho + $agosto + $setembro + $outubro + $novembro + $dezembro;
    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Atividade 1</title>
</head>
<body style="font-family: 'segoe ui',tahoma,geneva,verdana,sans-serif;">
    <form action="ex1_calc_ano.php" method="post">
        <label>Digite o Ganhos de mês janeiro:</label>
        <input type="text" name="janeiro" value="<?= $janeiro ?>">
        <br>
        <label>Digite o Ganhos do mês fevereiro :</label>
        <input type="text" name="fevereiro" value="<?= $fevereiro ?>">
        <br>
        <label>Digite o Ganhos de março:</label>
        <input type="text" name="março" value="<?= $março ?>">
        <br>
        <label>Digite o resultado de abril:</label>
        <input type="text" name="abril" value="<?= $abril ?>">
        <br>
        <label>Digite o resultado de maio:</label>
        <input type="text" name="maio" value="<?= $maio ?>">
        <br>
        <label>Digite o resultado de junho:</label>
        <input type="text" name="junho" value="<?= $junho ?>">
        <br>
        <label>Digite o resultado de julho:</label>
        <input type="text" name="julho" value="<?= $julho ?>">
        <br>
        <label>Digite o resultado de agosto:</label>
        <input type="text" name="agosto" value="<?= $agosto ?>">
        <br>
        <label>Digite o resultado de setembro:</label>
        <input type="text" name="setembro" value="<?= $setembro ?>">
        <br>
        <label>Digite o resultado de outubro:</label>
        <input type="text" name="outubro" value="<?= $outubro ?>">
        <br>
        <label>Digite o resultado de novembro:</label>
        <input type="text" name="novembro" value="<?= $novembro ?>">
        <br>
        <label>Digite o resultado de dezembro:</label>
        <input type="text" name="dezembro" value="<?= $dezembro ?>">
        <br>
        <button name="btnEnvio">calcular</button>
    </form>

    <strong>resultado final:</strong>
    <input disabled value="<?= $resultado ?>">
</body>
</html>