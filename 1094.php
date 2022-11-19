<?php

$n = readline();

$totalCobaias = 0;
$totalCoelhos = 0;
$totalRatos = 0;
$totalSapos = 0;

for($i = 0; $i < $n; $i++)
{

    $valores = explode(" ", readline());

    $quantia = $valores[0];
    $tipo = $valores[1];

    switch($tipo)
    {
        case "C":
            $totalCoelhos += $quantia;
            break;
        case "R":
            $totalRatos += $quantia;
            break;
        case "S":
            $totalSapos += $quantia;
            break;
    }

    $totalCobaias += $quantia;

}

$percentualCoelhos = ($totalCoelhos * 100) / $totalCobaias;
$percentualRatos = ($totalRatos * 100) / $totalCobaias;
$percentualSapos = ($totalSapos * 100) / $totalCobaias;

echo "Total: $totalCobaias cobaias\n";
echo "Total de coelhos: $totalCoelhos\n";
echo "Total de ratos: $totalRatos\n";
echo "Total de sapos: $totalSapos\n";
echo "Percentual de coelhos: ".number_format($percentualCoelhos, 2, ".", "")." %\n";
echo "Percentual de ratos: ".number_format($percentualRatos, 2, ".", "")." %\n";
echo "Percentual de sapos: ".number_format($percentualSapos, 2, ".", "")." %\n";

?>