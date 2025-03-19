<?php

    $dataNascimento = $_GET['data'];
    $dataNascimento_Objct = new DateTime($dataNascimento);
    $dataAtual = new DateTime();
    $idade = $dataAtual->diff($dataNascimento_Objct);
    
    echo "A idade é: " . $idade->y . " anos.";

?>