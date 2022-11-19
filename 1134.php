<?php

$codigo = readline();

$alcool = 0;
$gasolina = 0;
$diesel = 0;

while($codigo != 4)
{
    
    switch($codigo)
    {
        case 1:
            $alcool++;
            break;
        case 2:
            $gasolina++;
            break;
        case 3:
            $diesel++;
            break;
    }

    $codigo = readline();

}

echo "MUITO OBRIGADO\n";
echo "Alcool: $alcool\n";
echo "Gasolina: $gasolina\n";
echo "Diesel: $diesel\n";

?>