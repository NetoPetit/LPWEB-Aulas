<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aviso</title>
</head>
<body>
    
    <?php 

        //1- Recebendo intens e validando
        $nome = @$_POST['nome'];
        $curso = @$_POST['curso'];
        $ra = @$_POST['ra'];

        if($ra == ''){
            echo "RA é obrigatorio";
            exit;
        }

        if($nome == ''){
            echo "Nome é obrigatorio";
            exit;
        }

        if($curso == ''){
            echo "Curso é obrigatorio";
            exit;
        }

        //2- Abrir uma conexão com o banco
        include("banco.php");

        //3- Inserir os dados
        $sql = "INSERT INTO alunos (ra, nome, curso)
                VALUES
                ($ra, '$nome', '$curso')";

        $con->query($sql);

        header('location: aluno_consulta.php');

    ?>
    <button onclick="javascript:history.go(-1)">Voltar</button>
</body>
</html>
