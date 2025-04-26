<?php 
    session_start();

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    if($usuario == "professor" && $senha == "1234"){
        $_SESSION["logado"] = $usuario;
    }else {
        echo "Usuário/Senha inválido!";
    }
?>