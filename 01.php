<?php

    $num01 = 9;
    $num02 = 'Texto qualquer';

    echo "Num01 é $num01<BR>";
    echo 'Num02 é $num02';

    $pesquisa = "Ferrari";

    $sql = "
        SELECT *
        FROM produto p
        WHERE p.nome_produto LIKE '%$pesquisa%'
            AND p.marca LIKE '%$pesquisa%'

    ";

    echo $sql;
    $resultado = mysql_query($sql);

?>