<?php
    
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    $imc = $peso / ($altura ** 2);

    if($imc < 18.5){
        echo "Seu imc é $imc. Magreza.";
    }else if ($imc >= 18.5 && $imc <=24.9){
        echo "Seu imc é $imc. Normal.";
    }else if ($imc >= 25 && $imc <=29.9){
        echo "Seu imc é $imc. Sobrepeso.";
    }else if ($imc >= 30 && $imc <=39.9){
        echo "Seu imc é $imc. Obesidade.";
    }else {
        echo "Seu imc é $imc. Obesidade Grave."; 
    }

?>