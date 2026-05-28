<?php

    if (isset($_POST['btnEnviar'])) {
        $nomeUsuario = $_POST['nome'];
        $sobrenomeUsuario = $_POST['sobrenome'];
        $assuntoUsuario = $_POST['assunto'];
        $emailUsuario = $_POST['email'];
        $mensagemUsuario = $_POST['mensagem'];

        echo 'Meu nome é ' . $nomeUsuario . ' ' . $sobrenomeUsuario . ' o assunto é ' . $assuntoUsuario . ' meu email é ' . $emailUsuario . ' minha mensagem é ' . $mensagemUsuario . '<hr>';
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
    <h2>Preencha os dados:</h2>
    <form action="exercicio_4.php" method="post">
        <label>Digite o seu Nome:</label>
        <input type="text" name="nome" placeholder="Digite o seu NOME aqui...">
        <br>
        <label>Digite o seu Sobrenome :</label>
        <input type="text" name="sobrenome" placeholder="Digite o seu SOBRENOME aqui...">
        <br>
        <label>Digite o Assunto:</label>
        <input type="text" name="assunto" placeholder="Digite o ASSUNTO aqui...">
        <br>
        <label>Digite o E-mail :</label>
        <input type="text" name="email" placeholder="Digite o seu E-MAIL aqui...">
        <br>
         <label>Digite sua Mensagem:</label>
        <input type="text" name="mensagem" placeholder="Digite sua MENSAGEM aqui...">
        <br>
        <button name="btnEnviar">Enviar</button> 
    </form>
</body>
</html>