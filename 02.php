<?php

    //Criar array
    $lista[] = "Primeiro valor";
    $lista[] = "Segundo valor";
    
    //$lista[3] = ["Primeiro valor", "Segundo valor", "Terceiro valor"];
   
    echo "<pre>";
    var_dump($lista);

    $lista[] = "Terceiro valor";
    $lista[87] = "Forçado na mão";
    $lista[2578] = "Qual o valor do índice?";
    $lista[] = "Qual o valor atual do índice?";
    $lista[2] = "Qual o valor atual do índice?";
    $lista['indice_texto'] = "Funciona?";
    $lista[] = "Qual o valor atual do índice?";

    echo "<pre>";
    var_dump($lista);

?>