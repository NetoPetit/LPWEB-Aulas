<?php

    //Outra forma de criar array
    $lista = array(
        "0" => 'teste',
        "indice_texto" => 'segundo',
        1              => 'terceiro',
        2              => array(
                                    "1" => "Oi",
                                    "2" => "teste"
                                ) 
        );

        echo "<prev>";
        var_dump($lista);

        echo "O valor que esta dentro do meu indice
         indice_texto é " . $lista['indice_texto'];
    

?>