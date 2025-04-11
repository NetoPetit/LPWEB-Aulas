<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>
<body>
    
    <a href="aluno_novo.php" class="btn btn-success">NOVO</a>

    <div>
        <form action="aluno_consulta.php" method="get">
            <label for="nome">Informe o nome do aluno que você deseja consultar:</label>
            <br>
            <input type="text" class="form-control" name="nome" id="nome">
            <input type="submit" value="Pesquisar">
        </form>  
    </div>
    <table class="table table-hover">
        <thead>
            <td>RA</td>
            <td>NOME</td>
            <td>CURSO</td>
            <td>OPÇÕES</td>
        </thead>
        <tbody>
            
            <?php 
                
                //isset() Existe?

                $nome = "";

                if(isset($_GET['nome'])){
                    $nome = $_GET['nome'];
                }

                $conexao = new mysqli("127.0.0.1", "root", "", "faculdade");
                $sql = "SELECT * FROM alunos WHERE nome like '%$nome%'";

                $resultado = $conexao->query($sql);

                echo "Foram encontrados $resultado->num_rows alunos com o nome informado<br>";

                foreach($resultado as $linha){
                    echo "
                        <tr>   
                            <td>" . $linha['ra'] . "</td>
                            <td>" . $linha['nome'] . "</td>
                            <td>" . $linha['curso'] . "</td>
                            <td> 
                                <a href='/Aula15/outros/aluno_apagar.php?ra=".$linha['ra']."' class='btn btn-danger'>🗑️</a>
                                <a href='/Aula15/outros/aluno_alterar.php?ra=".$linha['ra']."' class='btn btn-primary'>✏️</a>
                            </td>
                        </tr>
                    ";
                }
            
            ?>
                


        </tbody>
    </table>
</body>
</html>