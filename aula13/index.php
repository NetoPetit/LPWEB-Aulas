<?php 

    //Conectar o Banco =>  servidor    usuario  sen.    BD 
    $conexao = new mysqli("127.0.0.1", "root", "", "faculdade");

    $sql = "SELECT * FROM alunos";

    $resultado = $conexao->query($sql);

    echo "Foram encontrados $resultado->num_rows alunos<br>";

    foreach($resultado as $linha){
        echo $linha["nome"] . $linha["curso"] . "<br>";
    }

?>