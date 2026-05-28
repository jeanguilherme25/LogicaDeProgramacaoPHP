<?php
// formas de trabalhar com uma variavel de tipo Array
// $variavel = array('0','1','2','3');
$carros = array('fusca','chevette','opala','d20','325i');  

$cores = array();
$cores[] = 'vermelho';// 0 posição.
$cores[] = 'azul';   // 1 posição.
$cores[] = 'prata';  // 2 posição.
$cores[] = 'amarelo';  // 3 posição.
$cores[] = 'verde';    // 4 posição.

echo '<hr>';
print_r($carros);
echo '<hr>';

echo'<pre>';
print_r($carros);
echo'</pre><hr>';

var_dump($cores);
echo '<hr>';

echo'<hr>';

echo '<pre>';
var_dump($cores);
echo '</pre><hr>';

for($i=0; $i < count($carros); $i++){
    echo 'o veiculo está guardada na posição' . $i . 'é' . $carros[$i] . '.<br>';
}
echo '<hr>';
for($i=0; $i < count($carros); $i++){
    echo 'a cor está guardada na posição' . $i . 'é' . $carros[$i]. '.<br>';
}
echo '<hr>><span>junção de resultados de arrays.</span>';

for($i=0; $i < count($carros); $i++){
    echo 'o veiculo está guardada na posição' . $i . 'é' . $carros[$i] . $cores[3].'.<br>';
}
echo '<hr>';
for($i=2; $i <3 ; $i++){
    echo 'o veiculo está guardada na posição' . $i . 'é' . $carros[2] . $cores[2].'.<br>';

}
