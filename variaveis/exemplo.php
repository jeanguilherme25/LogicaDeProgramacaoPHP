<?php

    //if:SE.
    // else if: ou SE.
    // else: ou/ se não.
    // isset: Existir.

    if(isset($_POST['btnEnviar'])){
        $nomeUsuario = $_POST['nome'];
        $cidadeUsuario = $_POST['cidade'];
    
        // echo: Função Nativa do php para imprimir avalores,textos,numeros,etc...
        // .- ponto significa concatenar valores!
        echo 'meu nome é ' . $nomeUsuario . ' e moro na cidade de ' . $cidadeUsuario . '.<hr>';
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo</title>
</head>
<body style="font-family: Tahoma;">
   <!-- métos envio de dados! --> 
   <!-- GET: encaminha os dados sempra a URL dos navegadores.-->
   <!-- POST: encaminha os dados de forma oculta via protocolo http/https.-->
    <h2>Preencha os dados:</h2>
    <form action="exemplo.php" method="post">
        <label>Digite seu Nome:</label>
        <input type="text" name="nome" placeholder="Digite aqui...">
        <br>
        <label>Digite sua Cidade:</label>
        <input type="text" name="cidade" placeholder="Digite aqui...">
        <br>
        <button name="btnEnviar">Enviar</button>
    </form>
</body>
</html>
     

