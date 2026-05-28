<?php


class combustivel {
    public function calcular($etanol, $gasolina) {
        if ($etanol == 0 || $gasolina == 0) {
            return "Os valores dos combustíveis devem ser maiores que zero.";
        }
        $ratio = $etanol / $gasolina;
        if ($ratio < 0.7) {
            return "Abasteça com Etanol.";
        } else {
            return "Abasteça com Gasolina.";
        }

    }
             
}
?>

