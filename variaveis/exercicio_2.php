<?php

    if (isset($_POST['btnEnviar'])) {
        $empresaUsuario = $_POST['empresa'];
        $siteUsuario = $_POST['site'];
        $facebookUsuario = $_POST['facebook'];
        $instagramUsuario = $_POST['instagram'];
        $descricaoUsuario = $_POST['descricao'];

        // echo: Função Nativa do php para imprimir avalores,textos,numeros,etc...
        // .- ponto significa concatenar valores!
        echo 'Minha empresa é ' . $empresaUsuario . ' o site da minha empresa é ' . $siteUsuario . ' o facebook da minha empresa é ' . $facebookUsuario . ' o instagram da minha empresa é ' . $instagramUsuario . ' a descrição da minha empresa é ' . $descricaoUsuario . '<hr>';
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
    <form action="exercicio_2.php" method="post">
        <label>Digite o Nome da sua Empresa :</label>
        <input type="text" name="empresa" placeholder="Digite aqui...">
        <br>
        <label>Digite Site da sua Empresa :</label>
        <input type="text" name="site" placeholder="Digite aqui...">
        <br>
        <label>Digite o Facebook da sua Empresa:</label>
        <input type="text" name="facebook" placeholder="Digite aqui...">
        <br>
        <label>Digite o Instagram da sua Empresa :</label>
        <input type="text" name="instagram" placeholder="Digite aqui...">
        <br>
        <label>Digite uma Descrição da sua Empresa:</label>
        <input type="text" name="descricao" placeholder="Digite aqui...">
        <br>
        <button name="btnEnviar">Enviar</button>
    </form>
</body>
</html>