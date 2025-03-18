<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 8</title>
</head>
<body>
    <!--Um formulário que recebe a base e a altura de um triângulo e calcula 
    a área utilizando o método GET.-->
    <form action='recebeEx08.php' method='GET'>
        <p>Calcule a area de um triangulo</p>
        <label for='base'>Digite a base</label>
        <input type='text' id='base' name='base'>
        <label for='altura'>Digite a altura</label>
        <input type='text' id='altura' name='altura'>
        <input type='submit' value='calcular'>
    </form>
</body>
</html>