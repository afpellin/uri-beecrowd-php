<?php

    (float)$valores = explode(" ", readline());

    $x = $valores[0];
    $y = $valores[1];

    if($x == 0 && $y == 0)
    {
        echo "Origem\n";
    }
    elseif($x == 0 && $y != 0)
    {
        echo "Eixo X\n";
    }
    elseif($x != 0 && $y == 0)
    {
        echo "Eixo Y\n";
    }
    elseif($x > 0 && $y > 0)
    {
        echo "Q1\n";
    }
    elseif($x < 0 && $y > 0)
    {
        echo "Q2\n";
    }
    elseif($x < 0 && $y < 0)
    {
        echo "Q3\n";
    }
    elseif($x > 0 && $y < 0)
    {
        echo "Q4\n";
    }

?>