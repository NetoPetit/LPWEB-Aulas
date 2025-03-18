<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 5</title>
</head>
<body>
    <!--Um formulário que recebe um número e calcula a tabuada 
    de 1 a 10 utilizando o método POST.-->
    <form action='recebeEx05.php' method='POST'>
        <label for='tabuada'>Calcule a tabuada do numero desejado</label>
        <input type='text' id='tabuada' name='tabuada'>
        <input type='submit' value='Calcular'>    
    </form>
</body>
</html>