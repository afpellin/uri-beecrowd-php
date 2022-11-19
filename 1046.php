<?php

    $valores = explode(" ", readline());

    $hInicial = $valores[0];
    $hFinal = $valores[1];

    $hAtual = $hInicial;
    $hTotal = 0;

    if($hInicial != 0 && $hFinal != 0)
    {

        for($i = $hInicial; $i != $hFinal; $i++)
        {  

            $hAtual++;
            $hTotal++;

            if($hAtual >= 24)
            {
                $hAtual = 0;
            }

            if($i >= 24)
            {
                $i = 0;
            }

        }

    }
    else
    {
        $hTotal = 24;
    }
    
    echo "O JOGO DUROU $hTotal HORA(S)\n";

?>