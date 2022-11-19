<?php

$x = readline();
$i = 1;

while($x != 0)
{

    if(($x % 2) != 0)
    {
        $x++;
    }

    $soma = $x;
    
    while($i < 5)
    {

        $valores = $x + ($i * 2);
        $soma += $valores;
        $i++;

    }

    echo "$soma\n";

    $x = readline();
    $i = 1;
    $valores = $x;

}

?>