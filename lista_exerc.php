<?php

    $numero = 10;
    echo $numero;
    echo "<BR>";
    
    $mult = $numero * 10;
    echo $mult;
    echo "<BR>";

    $text = "Uma bala aí";
    echo $text;
    echo "<BR>";

    $text1 = "texto 1";
    $text2 = "texto 2";
    echo 'Os textos sao $text1 e $text2';
    echo "<BR>";

    $text3 = "texto 3";
    $text4 = "texto 4";
    echo "Os textos sao $text3 e $text4";
    echo "<BR>";

    $text5 = "texto 5";
    $text6 = "texto 6";
    echo "Concatenando com aspas as variáveis $text5 e $text6 são reconhecidas dentro da string";
    echo "<BR>";
    echo 'Concatenando com apóstrofo as variáveis $text5 e $text6 não são reconhecidas dentro da string';
    echo "<BR>";

    $verdade = true;
    echo $verdade;
    echo "<BR>";

    $falso = false;
    echo $falso; //não aparece na tela
    echo "<BR>";

    $flutuante = 1.50;
    echo $flutuante;
    echo "<BR>";
    
    $lista[] = "Índice zero";
    echo "<pre>";
    var_dump($lista);
    echo "<BR>";

    $vazio = null;
    echo $vazio; //não aparece na tela
    echo "<BR>";
    
    // o PHP usa o método strtoupper() para converter uma variável do tipo string de caracteres
    //minúsculos para caracteres maiúsculos
    $textoMinusculo = "convertendo o texto minúsculo para maiúsculo";
    $textoMaisculo = strtoupper($textoMinusculo);
    echo $textoMaisculo;
    echo "<BR>";

    // o PHP usa o método strtolower() para converter uma variável do tipo string de caracteres
    //maiúsculos para caracteres minúsculos
    $textoMaisculo2 = "CONVERTENDO O TEXTO MAIÚSCULO PARA MINÚSCULO";
    $textoMinusculo2 = strtolower($textoMaisculo2);
    echo $textoMinusculo2;
    echo "<BR>";

    // o PHP usa o método strlen() para contar quantos caracteres existe dentro de uma variável
    //do tipo string e exibir o seu tamanho
    $txt_1 = "Qual o tamanho?";
    $tamanho_txt_1 = strlen($txt_1);
    echo "O tamanho da variável é $tamanho_txt_1";
    echo "<BR>";

    /*EXERCÍCIO NUMERO 14*/
    $resto = 5 % 2;
    if($resto == 0){
        echo "par";
    }else {
        echo "impar";
    }

    //EXERCICIO 15 CONTINUA NO ARQ.EX15 E POR DIANTE
?>