<?php

$n1 = readline();
$n2 = readline();
$somaImpares = 0;

if($n1 > $n2)
{
    $maior = $n1;
    $menor = $n2;
}
else
{
    $maior = $n2;
    $menor = $n1;
}

for($i = $menor + 1; $i < $maior; $i++)
{
    if($i % 2 != 0)
    {
        $somaImpares += $i;
    }
}

echo $somaImpares."\n";

?>