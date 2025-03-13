<?php

    $array = array(
        0 => "Joao",
        1 => "PErfeito",
        2 => "Maria",
        8 => "Josefa",
        4 => "Obrigado",
        "teste" => "Obrigado"
    );

    
    foreach($array as $indice => $valor)
    {
        echo "O indice é $indice e o valor é $valor <br>";
    }
    /*
    foreach($array as $valor)
    {
        echo "O valor é: $valor <br>";
    }.

    for($i = 0; $i < count($array); $i++)
    {
        echo "Valor é: $array[$i] <br>";
    };
    */

?>