<?php

   
function EXEMPLOSOMAR($NUMERO1, $NUMERO2) {
    if ($NUMERO1 == '' || $NUMERO2 == '') {
    RETURN 0;

}else{
        $soma = $NUMERO1 + $NUMERO2;
        RETURN $soma;
    
    }
}
function validarnome($nome) {
    if (strlen($nome) < 3) {
        RETURN -1;
    }
    RETURN 0;
}
function validardescricao($descricao) {
    if (strlen($descricao) < 50) {
        RETURN -2;
    }
    RETURN 0;
}
function validarsenha($senha) {
    if (strlen($senha) < 6) {
        RETURN -3;
    }
    RETURN 0;
}
function validarrepetir($senha, $repetir) {
    if ($senha !== $repetir) {
        RETURN -4;
    }
    RETURN 0;
}
function SomarSalario($salario, $aumento) {
    if ($salario == '' || $aumento == '') {
        RETURN 0;
    } else {
        $total = $salario + ($salario * $aumento / 100);
        RETURN $total;

}
}
function calcularValores($valor1, $valor2, $valor3, $valor4, $valor5) {
    if ($valor1 == '' || $valor2 == '' || $valor3 == '' || $valor4 == '' || $valor5 == '') {
    $soma = 0;
}else {
    $soma = $valor1 + $valor2 + $valor3 + $valor4 + $valor5;
    RETURN $soma;

}


}


   