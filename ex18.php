<?php

    $array = array(
         0 => array("Joao", "Maria", "Jose"),
         1 => array("Joao1", "Maria1", "Jose1"),
         2 => array("Joao2", "Maria2", "Jose2")
    );

    //Maria
    echo $array[0][1];
    
    //Jose2
    echo $array[2][2];

    //OUTRA MANEIRA
    for($i = 0; $i < count($array); $i++){
        
        for($x = 0; $x < count($array[$i]); $x++){
            echo $array[$i][$x];
        }

    }

?>