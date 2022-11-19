<?php

$novaNota = 1;

while($novaNota == 1)
{

    $nota = readline();

    $notas = 0;
    $soma = 0;

    while($notas < 2)
    {
        if($nota >= 0 && $nota <= 10)
        {
            $soma += $nota;
            $notas++;

            if($notas < 2)
            {
                $nota = readline();
            }
        }
        else
        {
            echo "nota invalida\n";
            $nota = readline();
        }
    }

    $media = $soma / 2;

    echo "media = ".number_format($media, 2, ".", "")."\n";

    echo "novo calculo (1-sim 2-nao)\n";
    $novaNota = readline();

    while($novaNota < 1 || $novaNota > 2)
    {
        echo "novo calculo (1-sim 2-nao)\n";
        $novaNota = readline();
    }

}

?>