<?php 
    session_start();

    if(isset($_SESSION["logado"])){
        echo "Seja bem vindo :" . $_SESSION["logado"];
        
        echo "<pre>";
        var_dump($_SESSION["carrinho"]);
        exit;

    }else{
        echo "Você precisa efetuar login, para acesso aqui";
        exit;
    }
?>

<h1>Dashboard</h1>