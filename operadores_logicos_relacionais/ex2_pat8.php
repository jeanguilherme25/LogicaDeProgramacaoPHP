 <?php
  $inicio = '';
    $meio = '';
    $fim = '';
    
    
    $calculo = '';

    if(trim(isset($_POST['btn_verificar']))){
        $inicio = trim($_POST['inicio']);
        $meio = trim($_POST['meio']);
        $fim = trim($_POST['fim']);
        if($inicio < $meio && $meio < $fim){
            $calculo = "resultado está entre inicio e fim";
        } else {
            $calculo = "resultado NÃO está entre inicio e fim";
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
    <form action="ex2_pat8.php" method="POST">
<label>Digite o Primeiro Valor:</label>
<input type="text" name="inicio" > <?= $inicio ?>"><br>
<label>Digite o Segundo Valor:</label> 
<input type="text" name="meio"> <?= $meio ?>"><br>

<label>Digite o Terceiro Valor:</label>
<input type="text" name="fim"> <?= $fim ?>"><br>


<button name="btn_verificar">Verificar</button>
</form>
<strong>Resultado Final:</strong>
    <input disabled value="<?= $calculo ?>">
</body>
</html>