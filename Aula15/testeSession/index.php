<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="valida_login.php" method="post">
        <input type="text" name="usuario" id="">
        <input type="password" name="senha" id="">
        <input type="submit" value="ENTRAR">
    </form>
</body>
</html>

<?php 
    session_start();

    $carrinho = array(
        0 => [
            "id" => 4,
            "nome" => "calça",
            "preco" => 150
        ],
        1 => [
            "id" => 46,
            "nome" => "meia",
            "preco" => 20,
            "qtd" => 14
        ],
    );

    $_SESSION["carrinho"] = $carrinho;
?>