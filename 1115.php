<?php

$valores = explode(" ", readline());

$x = $valores[0];
$y = $valores[1];

while($x != 0 && $y != 0)
{
 
    if($x > 0 && $y > 0)
    {
        echo "primeiro\n";
    }
    elseif($x < 0 && $y > 0)
    {
        echo "segundo\n";
    }
    elseif($x < 0 && $y < 0)
    {
        echo "terceiro\n";
    }
    elseif($x > 0 && $y < 0)
    {
        echo "quarto\n";
    }

    $valores = explode(" ", readline());

    $x = $valores[0];
    $y = $valores[1];
    
}

?>