<?php

$meses = [
    'Jan',
    'Fev',
    'Mar',
    'Abr',
    'Mai',
    'Jun',
    'Jul',
    'Ago',
    'Set',
    'Out',
    'Nov',
    'Dez'
];

$ganhos = [];
$total_ganho = null;
if (isset($_POST['btnCalcular'])) {
    $total_ganho = 0;


    foreach ($meses as $mes) {
        $campo_nome = 'ganho_' . strtolower($mes);
        $valor = isset($_POST[$campo_nome]) ? (float)$_POST[$campo_nome] : 0.00;

        $ganhos[$campo_nome] = $valor;


        $total_ganho += $valor;
    }


    echo 'O cálculo foi realizado! Total de Ganho do ano: R$ ' . number_format($total_ganho, 2, ',', '.') . '<hr>';
} else {

    foreach ($meses as $mes) {
        $campo_nome = 'ganho_' . strtolower($mes);
        $ganhos[$campo_nome] = '';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex1 - Cálculo de Ganhos Anuais</title>
    <style>
        body {
            font-family: Tahoma;
        }

        .campo-ganho {
            margin-bottom: 8px;
        }

        label {
            display: inline-block;
            width: 150px;
        }

        input[type="text"] {
            width: 100px;
            text-align: right;
        }

        #total-container {
            margin-top: 15px;
            padding-top: 10px;
            border-top: 1px solid #ccc;
        }

        #total-container label {
            font-weight: bold;
        }
    </style>
</head>

<body style="font-family: Tahoma;">
    <h2>EXERCÍCIOS PRÁTICOS - AULAS 7</h2>

    <form action="ex1_calc_ano.php" method="post">

        <?php foreach ($meses as $mes):
            $campo_nome = 'ganho_' . strtolower($mes);
        ?>
            <div class="campo-ganho">
                <label for="<?php echo $campo_nome; ?>">Ganho do mês de **<?php echo $mes; ?>:**</label>
                <input type="text"
                    name="<?php echo $campo_nome; ?>"
                    id="<?php echo $campo_nome; ?>"
                    value="<?php

                            echo is_numeric($ganhos[$campo_nome]) ? number_format($ganhos[$campo_nome], 2, ',', '') : $ganhos[$campo_nome];
                            ?>"
                    placeholder="0,00">
            </div>
        <?php endforeach; ?>
        <br>
        <button name="btnCalcular">Botão Calcular</button>

        <div id="total-container">
            <label for="total_ganho">Total de Ganho:</label>
            <input type="text"
                id="total_ganho"
                name="total_ganho"
                value="<?php
                        echo ($total_ganho !== null) ? number_format($total_ganho, 2, ',', '.') : '';
                        ?>"
                disabled>
            [Campo Desabilitado]
        </div>
    </form>
</body>
</html>