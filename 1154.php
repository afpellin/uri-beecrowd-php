<?php

$idade = readline();
$somaIdades = 0;
$quantidadeIdades = 0;

while($idade >= 0)
{
    $somaIdades += $idade;
    $quantidadeIdades++;
    $idade = readline();
}

$mediaIdades = $somaIdades / $quantidadeIdades;

echo number_format($mediaIdades, 2, ".", "")."\n";

?>