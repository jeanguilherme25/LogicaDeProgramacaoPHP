<?php
require_once 'atividade_1.php';
if(isset($_POST['btnEnviar'])){
    $nome = trim($_POST['nome']);
    $descricao = trim($_POST['descricao']);
    $senha = trim($_POST['senha']);
    $repetir = trim($_POST['repetir']);

    if (validarnome($nome) == -1) {
        echo "Nome deve ter pelo menos 3 caracteres.<br>";
    } elseif (validardescricao($descricao) == -2) {
        echo "Descricao deve ter pelo menos 50 caracteres.<br>";
    } elseif (validarsenha($senha) == -3) {
        echo "Senha deve ter pelo menos 6 caracteres.<br>";
    } elseif (validarrepetir($senha, $repetir) == -4) {
        echo "Senhas nao conferem.<br>";
    } else {
        echo "Cadastro realizado com sucesso!<br>";
    }
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1</title>
</head>
<body style="font-family: Segoe UI, Tahoma, Geneva, Verdana, sans-serif;">
    <form action="atividade_1.php" method="POST">
        <label> Diguite o seu nome :</label>
        <input type="text" name="nome" value=""><br>
        <label> Diguite a descricao :</label>
        <input type="text" name="descricao" value=""><br>
        <label> Diguite a senha :</label>
        <input type="password" name="senha" value=""><br>
        <label> Repita a senha :</label>
        <input type="password" name="repetir" value=""><br>

        <button name="btnEnviar">ENVIAR</button>
    </form>
</body>
</html>
