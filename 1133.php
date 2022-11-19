<?php

$valor1 = readline();
$valor2 = readline();

if($valor1 > $valor2)
{
    $y = $valor1;
    $x = $valor2;
}
else
{
    $y = $valor2;
    $x = $valor1;
}


for($i = ($x + 1); $i < $y; $i++)
{
    $divisaoResto = $i % 5;
    if($divisaoResto == 2 || $divisaoResto == 3)
    {
        echo $i."\n";
    }
}

?>