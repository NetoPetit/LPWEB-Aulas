<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 7</title>
</head>
<body>
    <!--Um formulário que recebe um valor em reais e converte para dólares 
    (cotação fixa de R$5,00) utilizando o método POST.-->
    <form action='recebeEx07.php' method='POST'>
        <label for='conversao'>Converta reais em dólares com cotação 
        fixa de R$5,00</label>
        <input type='text' id='conversao' name='conversao'>
        <input type='submit' value='converter'>
    </form>

</body>
</html>