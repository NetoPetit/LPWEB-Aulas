<?php 

include("banco.php");

/*
http://localhost/Aula15/outros/aluno_alterar.php?ra=11111
1-Receber via GET o RA do aluno
2-Buscar aluno no banco
3-Iremos mostrar os dados na tela dentro do form
4-Enviar os dados alterados para o servidor salvar
*/

    $ra = @$_GET["ra"];

    $sql = "SELECT * FROM alunos
            WHERE ra = '$ra'";
    
    $resultado = $con->query($sql);

    $dados = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração do Aluno <?=$dados["nome"]?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>
<body>
    
    <form action="aluno_alterar_salvar.php" method="post">
        <div>
            <span>RA</span>
            <input type="text" name="ra" id="" value="<?=$dados["ra"]?>">
        </div>
        <div>
            <span>Nome do Aluno</span>
            <input type="text" name="nome" id="" value="<?=$dados["nome"]?>">
        </div>
        <div>
            <span>Curso</span>
            <input type="text" name="curso" id="" value="<?=$dados["curso"]?>">
        </div>
        <div>
            <input type="submit" value="Salvar" class="btn btn-primary">
            <a href="aluno_consulta.php" class="btn btn-secondary   ">Voltar</a>
        </div>
    </form>
</body>
</html>