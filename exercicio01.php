<?php

    $array = array(
        0 => array(23, 123,  65, 83, 74),
        1 => array(33,  45, 765, 96, 61),
        2 => array(45,  76,  45, 23, 52),
        3 => array(43,   3,  35, 12, 32),
        4 => array(523, 54,  68, 18, 12) 
    );

    for($i = 0; $i < count($array); $i++){
        
        for($x = 0; $x < count($array[$i]); $x++){
            
            if($array[$i][$x] % 2 == 1){
                echo "Linha $array[$i], Coluna $array[$i], número $x é ímpar";
            }

            //echo $array[$i][$x];
        }

    }
    
    
    /*foreach($array as $indice => $valor)
    {

        if($valor % 2 == 1){
            $imparOuPar = "ímpar";
        }else {
            $imparOuPar = "par";
        }

        echo "Linha $indice, coluna $valor, número é $imparOuPar<br>";
    }*/
?>