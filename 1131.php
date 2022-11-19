<?php

$novoGrenal = 1;
$vitoriasGremioT = 0;
$vitoriasInterT = 0;
$quantidadeGrenais = 0;
$numEmpates = 0;

while($novoGrenal == 1)
{
    $gols = explode(" ", readline());

    (int)$golsInter = $gols[0];
    (int)$golsGremio = $gols[1];

    if($golsGremio == $golsInter)
    {
        $numEmpates++;
    }
    else if($golsGremio > $golsInter)
    {
        $vitoriasGremioT++;
    }
    else
    {
        $vitoriasInterT++;
    }

    $quantidadeGrenais++;

    echo "Novo grenal (1-sim 2-nao)\n";
    $novoGrenal = readline();

    while($novoGrenal < 1 || $novoGrenal > 2)
    {
        echo "Novo grenal (1-sim 2-nao)\n";
        $novoGrenal = readline();
    }

}

echo "$quantidadeGrenais grenais\n";
echo "Inter:$vitoriasInterT\n";
echo "Gremio:$vitoriasGremioT\n";
echo "Empates:$numEmpates\n";

if($vitoriasGremioT == $vitoriasInterT)
{
    echo "Nao houve vencedor\n";
}
else if($vitoriasGremioT > $vitoriasInterT)
{
    echo "Gremio venceu mais\n";
}
else
{
    echo "Inter venceu mais\n";
}

?>