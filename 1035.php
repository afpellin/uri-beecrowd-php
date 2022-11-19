<?php

    $valores = explode(" ", readline());

    if($valores[1] > $valores[2] && $valores[3] > $valores[0] && ($valores[2] + $valores[3]) > ($valores[0] + $valores[1]) && $valores[2] >= 0 && $valores[3] >= 0 && $valores[0] % 2 == 0)
    {
        echo "Valores aceitos\n";
    }
    else
    {
        echo "Valores nao aceitos\n";
    }

?>