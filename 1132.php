<?php

$x = readline();
$y = readline();
$soma = 0;

for($i = $x; $i < $y; $i++)
{
    if($i % 13 != 0)
    {
        $soma += $i;
    }
}

if($x % 13 != 0)
{
    $soma += $x;
}

if($y % 13 != 0)
{
    $soma += $y;
}

echo $soma."\n"

?>