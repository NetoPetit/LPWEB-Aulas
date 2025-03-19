<?php

    $idade = $_GET['idade'];

    if($idade >= 18){
        echo "Você tem $idade anos e é maior de idade.";
    }else {
        echo "Você tem $idade anos e é menor de idade.";
    }

?>