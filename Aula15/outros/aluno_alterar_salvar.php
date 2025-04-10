<?php 
    include("banco.php");

    $ra = @$_POST["ra"];
    $nome = @$_POST["nome"];
    $curso = @$_POST["curso"];

    $sql = "UPDATE alunos
                SET nome = '$nome',
                    curso = '$curso'
            WHERE ra = '$ra'
            ";

    echo $sql;

    $con->query($sql);

    

    header("location:/Aula15/outros/aluno_consulta.php");

?>