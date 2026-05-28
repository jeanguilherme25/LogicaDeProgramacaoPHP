<?php


if (
    isset($_GET['numero1']) && $_GET['numero1'] != ''  &&
    isset($_GET['numero2']) && $_GET['numero2'] != ''  &&
    isset($_GET['numero3']) && $_GET['numero3'] != ''  &&
    isset($_GET['numero4']) && $_GET['numero4'] != '' &&
    isset($_GET['numero5']) && $_GET['numero5'] != '' 
) {

    $num0_1 = trim($_GET['numero1']);
    $num0_2 = trim($_GET['numero2']);
    $num0_3 = trim($_GET['numero3']);
    $num0_4 = trim($_GET['numero4']);
    $num0_5 = trim($_GET['numero5']);
    $soma = $num0_1 + $num0_2 + $num0_3 + $num0_4 + $num0_5;

} else {
    header('location: ex2_pegardados.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado dos Números</title>
</head>

<body style="font-family: Segoe UI, Tahoma, Geneva, Verdana, sans-serif;">
    <span>Resultado Final:</span>
    <input disabled value="<?= isset($soma) ? $soma : '' ?>">
</body>

</html>