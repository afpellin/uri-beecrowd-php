<?php

    $valores = explode(" ", readline());

    $codigo = $valores[0];
    $quantidade = $valores[1];

    $valor = 0;

    switch($codigo)
    {
        case 1:
            $valor = 4 * $quantidade;
            break;
        case 2:
            $valor = 4.5 * $quantidade;
            break;
        case 3:
            $valor = 5 * $quantidade;
            break;
        case 4:
            $valor = 2 * $quantidade;
            break;
        case 5:
            $valor = 1.5 * $quantidade;
            break;
    }

    echo "Total: R$ ".number_format($valor, 2, ".", "")."\n";

?>