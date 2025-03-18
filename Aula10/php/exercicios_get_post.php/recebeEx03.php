<?php

    $numero = $_GET['numero'];

    if($numero % 2 == 1){
        echo "O número $numero é ÍMPAR!"; 
    }else{
        echo "O número $numero é PAR!";
    }

?>