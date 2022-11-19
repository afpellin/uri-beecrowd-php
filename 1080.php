<?php

$maior = 0;

for($i = 0; $i < 5; $i++)
{
    $valor = readline();

    if($valor > $maior)
    {
        $maior = $valor;
        $posMaior = $i + 1;
    }
}

echo $maior."\n";
echo $posMaior."\n";

?>