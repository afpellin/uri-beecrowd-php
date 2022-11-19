<?php
    $valores = explode(" ", readline());
    if($valores[0] >= $valores[1])
    {
        $resultado = $valores[0] % $valores[1];
    }
    else
    {
        $resultado = $valores[1] % $valores[0];
    }

    if($resultado == 0)
    {
        echo "Sao Multiplos\n";
    }
    else
    {
        echo "Nao sao Multiplos\n";
    }

?>