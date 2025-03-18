<?php

    $numero = $_GET['numero'];

    if($numero < 0){
        echo "O número $numero é negativo!";
    }else if($numero == 0){
        echo "O número $numero é zero!";
    }else{
        echo "O número $numero é positivo!";
    }

?>