<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 13</title>
</head>
<body>
    <!--Um formulário que recebe o peso e a altura de uma pessoa e calcula 
    o IMC utilizando o método POST.-->
    <form action='recebeEx13.php' method='POST'>
        <label for='peso'>Informe o peso:</label>
        <input type='text' id='peso' name='peso'>
        <label for='altura'>Informe a altura:</label>
        <input type='text' id='altura' name='altura'>
        <input type='submit' value='Calcular IMC'>
    </form>
</body>
</html>