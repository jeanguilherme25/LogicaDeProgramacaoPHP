<?php 
require_once ' ./classES.PHP';
//$gas= '';
if(isset($_post['btnEnviar'])){
    $gas = $_post['combustivel'];
    $volume=trim($_post['qtd'])

    $objDAO = new classDAD();
    $resultado = $objDAO->calcularcombustivel($gas,$volume);
    if($resultado== 0){
        echo'<strong style="color: red;">preencher todos os campos obrigatórios!</strong>';
    }

    }
    ?>
<! doctype html>
<html lang="pt-br">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="wind=device-width,initial-scale=1.0">
 <title>atividade 1</title>
</head>
<body style="font-family: 'segoe ui', tahoma, geneva,verdana, sans-serif;">
<form action ="atividade_1.php" method="post">
    <label>selecione o combustivel:</label>
    <select name="combustivel">
        <opition value="1" <?=  isset($gas) && $gas == 1 ? 'selected' : '' ?>>Etanol</option>
        <opition value ="2" <?=  isset($gas) ? ($gas == 2 ? 'selected' : ''): '' ?>>gasolina</opition> ?>
        <opition value = "3" <?= $gas == 3 ? 'selected' ?>>diesel</opition>
         </select>
<br>
<label>Quantidade (litros):</label>
<imput type="number" name="qtd" value="<?= isset($volume) ? $volume : '' ?>">
<br>
<button name="btnEnviar">ENVIAR</button>
</form>

<?php if(isset($resultado) && $resultado != '' && $resultado != 0){ ?>
    <input disabled value="R$ <?=  isset($resultado) ? number_format($resultado,2,',',',') :'' ?>">
 <?php } ?>
 </body>
 </html>
