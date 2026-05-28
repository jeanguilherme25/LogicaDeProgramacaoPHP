<?php

    $numero1 = '';
    $numero2 = '';
    $numero3 = '';
    $numero4 = '';
    $numero5 = '';
    $resultado = '';

    if (isset($_POST['btnCalcular'])) {
        $numero1 = floatval($_POST['numero1']);
        $numero2 = floatval($_POST['numero2']);
        $numero3 = floatval($_POST['numero3']);
        $numero4 = floatval($_POST['numero4']);
        $numero5 = floatval($_POST['numero5']);

        $soma = $numero1 + $numero2 + $numero3;

        $multiplicacao = $numero4 * $numero5;

        if ($multiplicacao != 0) {
            $resultado = $soma / $multiplicacao;
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Calculo 2</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <h2>Cálculo Lógico:</h2>
    <form action="ex2_calc_logica.php" method="post">
        <label>Número 1:</label>
        <input type="number" step="any" name="numero1" value="<?= $numero1 ?>"><br><br>

        <label>Número 2:</label>
        <input type="number" step="any" name="numero2" value="<?= $numero2 ?>"><br><br>

        <label>Número 3:</label>
        <input type="number" step="any" name="numero3" value="<?= $numero3 ?>"><br><br>

        <label>Número 4:</label>
        <input type="number" step="any" name="numero4" value="<?= $numero4 ?>"><br><br>

        <label>Número 5:</label>
        <input type="number" step="any" name="numero5" value="<?= $numero5 ?>"><br><br>

        <button type="submit" name="btnCalcular">Calcular</button>
    </form>
    <br>
    <br>
    <label>Resultado Final:</label>
    <input type="text" value="<?= $resultado ?>" disabled>
</body>

</html>