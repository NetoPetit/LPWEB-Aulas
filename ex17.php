<?php

    $array = ["Joao", "Maria", "X", "y", "Z", "1", "4", "7"];

    echo $array[0];
    echo $array[4];

    for($i = 0; $i < count($array); $i++){
        
        $cor = "green";
        
        if($i % 2 == 1){
            $cor = "yellow";
        }

        echo "<p style='background-color: $cor'>" .
                 $array[$i] . 
                "</p>";
    }


?>