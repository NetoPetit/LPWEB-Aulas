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
    <table class="table table-hover">
        <thead>
            <td>RA</td>
            <td>NOME</td>
            <td>CURSO</td>
        </thead>
        <tbody>
            <?php 
                
                $nome = $_GET['nome'];
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
                        </tr>
                    ";
                }
            
            ?>
                


        </tbody>
    </table>
</body>
</html>