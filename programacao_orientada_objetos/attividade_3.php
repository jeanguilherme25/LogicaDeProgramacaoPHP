<?php 
require_once './classES.php';
if(isset($_post['btnCalcular'])){
    $meses = trim($_post['num']);
    $ganhos = trim($_post['salario']);
    $lucro = trim($_post['percentual']);
    $perda = trim($_post['perda']);

    $objDAO = new classDAD();
    $retorno = $objDAO->Calcularsalario($meses, $ganhos, $lucro, $perda);
    if($retorno == 0){
        $msgError= '<div style="color: red; font-family: tahoma;">Preencher todos os Campos obrigatórios! </div>';
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3</title>
</head>
<body style="font-family: 'segoe ui', tahoma, geneva,verdana,sans-serif;">
   <span><? isset($msgError) ? $msgError : '' ?></span>
   <form action="atividade_3.php" methood="post">
        <label>Messes trabalhando:</label>
        <input type="number" name="num" value="<?= isset($num) ? $num : '' ?>">
        <br>
        <label>ganho médio Mensal:</label>
        <input type="number" name="salario" value="<?= isset($ganhos) ? $ganhos : '' ?>">
        <br>
        <label>percentual de lucro total (%):</label>
        <input type="number" name="percentual" value="<?= isset($lucro) ? $lucro : '' ?>">
        <br>    
        <label>percentual de perda total(%):</label>
        <input type="number" name="perda" value="<?= isset($perda) ? $perda : '' ?>">
        <br>
        <button name="btnCalcular">Calcular</button>
   </form>
   <?php if(isset($retorno) && $retorno != ''): ?>
        <span>Resutado Final: R$ <?= isset($retorno) ? $retorno : '' ?></span>
   <?php endif; ?>
</body>
</html>