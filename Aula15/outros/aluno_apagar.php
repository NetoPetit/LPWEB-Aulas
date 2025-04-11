<?php 
    include("banco.php");

    $ra = @$_GET["ra"];

    $sql = "DELETE FROM alunos 
            WHERE ra = '$ra'";

    echo $sql;

    $con->query($sql);

    header("location:/Aula15/outros/aluno_consulta.php");

?>