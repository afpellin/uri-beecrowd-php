<?php

    $entrada = number_format(readline(), 2, ".", "");

    if($entrada >= 0 && $entrada <= 25)
    {
        echo "Intervalo [0,25]\n";
    }
    else if($entrada > 25 && $entrada <= 50)
    {
        echo "Intervalo (25,50]\n";
    }
    else if($entrada > 50 && $entrada <= 75)
    {
        echo "Intervalo (50,75]\n";
    }
    else if($entrada > 75 && $entrada <= 100)
    {
        echo "Intervalo (75,100]\n";
    }
    else
    {
        echo "Fora de intervalo\n";
    }

?>