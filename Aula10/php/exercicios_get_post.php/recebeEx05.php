<?php

    $valor = $_POST['tabuada'];
    $numeros = range(1, 10);

    echo "Tabuada do numero $valor :<br>";
    foreach($numeros as $n){
        echo "$valor x $n = " . ($valor * $n) . "<br>";
    }

?>