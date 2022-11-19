<?php

$n = readline();

for($i = 0; $i < $n; $i++)
{
    $valor = readline();

    $par = ($valor % 2 == 0) ? true : false;
    $positivo = ($valor >= 0) ? true : false; 

    echo ($valor != 0) ? (($par == true) ? "EVEN " : "ODD ").(($positivo == true) ? "POSITIVE\n" : "NEGATIVE\n") : "NULL\n";

}

?