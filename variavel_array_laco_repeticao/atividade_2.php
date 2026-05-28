<?php
if (isset($_POST['btnEnviar'])) {
    $num1 = trim($_POST['numero1']);
    $num2 = trim($_POST['numero2']);
    $num3 = trim($_POST['numero3']);
    $num4 = trim($_POST['numero4']);
    $num5 = trim($_POST['numero5']);

    if ($num1 == '' || $num2 == '' || $num3 == '' || $num4 == '' || $num5 == '') {
        echo 'Preencher todos os campos obrigatórios!';
    } else {
        $frutas = [$num1, $num2, $num3, $num4, $num5];
        // $frutas= array();
        // $frutas[]=$num1;
        // $frutas[]=$num2;
        // $frutas[]=$num3;
        // $frutas[]=$num4;
        // $frutas[]=$num5;
        for($i=0; $i < count($frutas); $i++){
            echo 'fruta diitada foi' . $frutas[$i] . 'e está na poisção' . $i . 'do array.<br>';
        }
        echo '<hr>';
    }

}
?>
<!doctype html>html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2 </title>
</head>
<body style="font-family: Segoe UI, Tahoma, Geneva, Verdana, sans-serif;">
    <form action="atividade_2.php" method="POST">
        <label> Fruta Número 1:</label>
        <input type="text" name="numero1" value="">
        <br>
        <label>Fruta Número 2:</label>
        <input type="text" name="numero2" value="">
        <br>
        <label>Fruta Número 3:</label>
        <input type="text" name="numero3" value="">
        <br>
        <label>Fruta Número 4:</label>
        <input type="text" name="numero4" value="">
        <br>
        <label>Fruta Número 5:</label>
        <input type="text" name="numero5" value="">
        <br>
        <button name="btnEnviar">Enviar</button>
    </form>
</body>
</html>