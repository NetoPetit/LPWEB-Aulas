<?php

    $valor = $_POST['valor'];

    echo "Valor com 10% de desconto é R$" . ($valor - ($valor * (10 / 100))); 

?>