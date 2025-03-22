<?php 

    $conexao = new mysqli("127.0.0.1", "root", "", "aula");

    $sql = "
        SELECT * FROM aluno
    ";

    $retorno = $conexao->query($sql);

    var_dump($conexao);

?>