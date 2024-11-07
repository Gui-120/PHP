<?php

$nome = 'Gui';
$senha = '123';

if(isset($_POST['nome_usuario']) && isset($_POST['senha'])) {
    if(($_POST['nome_usuario'] == $nome) && ($_POST['senha'] == $senha)) {

        setcookie('nome_usuario', $_POST['nome_usuario'], time()+120);
        setcookie('senha', md5($_POST['senha']), time()+120);
    header('location:index.php');

} else {
    echo 'Nome de Usuario e/ou Senha inválidas.';
}
} else {
    echo 'Voce deve preencher login e senha.';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
</head>
<body>
    <h1> TEla de login</h1>
<form name="login" method="post" action="cadastrar.php">
    Usuario: <input type="text" name="nome_usuario"><br>
    Senha: <input type="password" name="senha"><br>
    <input type="submit" name="submit" value="acessar">
</form>
</body>
</html>