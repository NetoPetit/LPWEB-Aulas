<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>
    <!--Um formulário que recebe dois números e calcula a soma deles utilizando 
    o método GET--> 
    <form action='recebeEx01.php' method='get'>
        <label for='valor1'>Digite o primeiro valor</label>
        <input type='text' id='valor1' name='valor1'> 
        <br/>
        <label for='valor2'>Digite o segundo valor</label>
        <input type='text' id='valor2' name='valor2'>
        <input type='submit' value='SOMAR'>
    </form>
</body>
</html>