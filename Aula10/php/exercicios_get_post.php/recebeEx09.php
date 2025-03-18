<?php

    $raio = $_POST['raio'];
    $pi = pi();

    echo "A area do circulo é " . ($pi * ($raio ** 2));
    
?>