<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
</head>
<body>
    <!--Um formulário que recebe um nome e uma idade e exibe uma mensagem utilizando
    o método POST-->
    <form action='recebeEx02.php' method='POST'>
        <label for='nome'>Informe o nome</label>
        <input type='text' id='nome' name='nome'>
        <br/>
        <label for='idade'>Informe a idade</label>
        <input type='text' id='idade' name='idade'>
        <input type='submit' value='Imprimir'>
    </form>
</body>
</html>