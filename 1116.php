<?php

$n = readline();

for($i = 0; $i < $n; $i++)
{
    (int)$valores = explode(" ", readline());

    $x = $valores[0];
    $y = $valores[1];

    if($y == 0)
    {
        echo "divisao impossivel\n";
    }
    else
    {
        $divisao = $x / $y;
        echo number_format($divisao, 1, ".", "")."\n";
    }

}

?>