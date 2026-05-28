<?php 
require_once './classES.php';
if(isset($_post['btnConverter'])){
    $unidadeMedida = $_post['unidadeMedida'];
    $temperatura = trim($_post['qtd']);

    $objDAO = new classDAD();
    $retorno = $objDAO->conversor($unidadeMedida, $temperatura);
    if($retorno == 0){
    $msgError= 'div style="color: red; font-family: tahoma;">Preencher todos os Campos obrigatórios! </div>';
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>
</head>
<body style="font-family: 'segoe ui', tahoma, geneva,verdana, sans-serif;">
    <form action="atividade2.php" method="post">
        <label>Selecione uma unidade de medida:</label>
            <select name="unidadeMedida">
                <option value="">selecione</option>
                <option value="1" <?= $unidadeMedida == 1 ? 'selected' : null ?>>celcius -> fahrenheit </option> ?>
                <option value="2" <?= $unidadeMedida == 2 ? 'selected' : null ?>>fahrenheit -> celcius </option> ?>
        </select>
        <br>
        <label>Quantidade de temperatura:</label>
        <input type="number" name="qtd" value="<?= isset($temperatura) ? $temperatura : '' ?>">
        <br>
        <button name="btnEnviar">converter</button>
    </form>

    <?php if(isset($retorno) && $retorno != ''):?>
        <span>Resultado da conversão: <?=  isset($retorno) ? $retorno : '' ?></span>
    <?php endif; ?>
</body>
</html>

