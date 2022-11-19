<?php

    $salario = number_format(readline(), 2, ".", "");

    if($salario >= 0 && $salario <= 400)
    {

        $reajusteGanho = ($salario * 15) / 100;
        $porcentagem = 15;

        $novoSalario = $salario + $reajusteGanho;

    }
    else if($salario >= 400.01 && $salario <= 800)
    {

        $reajusteGanho = ($salario * 12) / 100;
        $porcentagem = 12;

        $novoSalario = $salario + $reajusteGanho;

    }
    else if($salario >= 800.01 && $salario <= 1200)
    {

        $reajusteGanho = ($salario * 10) / 100;
        $porcentagem = 10;

        $novoSalario = $salario + $reajusteGanho;

    }
    else if($salario >= 1200.01 && $salario <= 2000)
    {

        $reajusteGanho = ($salario * 7) / 100;
        $porcentagem = 7;

        $novoSalario = $salario + $reajusteGanho;

    }
    else if($salario > 2000)
    {

        $reajusteGanho = ($salario * 4) / 100;
        $porcentagem = 4;

        $novoSalario = $salario + $reajusteGanho;

    }

    echo "Novo salario: ".number_format($novoSalario, 2, ".", "")."\n";
    echo "Reajuste ganho: ".number_format($reajusteGanho, 2, ".", "")."\n";
    echo "Em percentual: $porcentagem %\n";

?>