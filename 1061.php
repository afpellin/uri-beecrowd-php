<?php

    $diaInicio = explode(" ", FGETS(STDIN));
    $valoresInicio = explode(" : ", FGETS(STDIN));

    $diaFinal = explode(" ", FGETS(STDIN));
    $valoresFinal = explode(" : ", FGETS(STDIN));

    $horaInicio = $valoresInicio[0];
    $minInicio = $valoresInicio[1];
    $segInicio = $valoresInicio[2];
    
    $horaFinal = $valoresFinal[0];
    $minFinal = $valoresFinal[1];
    $segFinal = $valoresFinal[2];

    $diaInicio_seg = ($diaInicio[1] * 86400) + ($horaInicio * 3600) + ($minInicio * 60 + $segInicio);
    $diaFinal_seg = ($diaFinal[1] * 86400) + ($horaFinal * 3600) + ($minFinal * 60 + $segFinal);

    $duracao = ($diaFinal_seg - $diaInicio_seg);

    $dias = (int)($duracao / 86400);
    $resto = $duracao % 86400;

    $horas = (int)($resto / 3600);
    $resto = $resto % 3600;

    $minutos = (int)($resto / 60);
    $segundos = (int)($resto % 60);

    echo "$dias dia(s)\n";
    echo "$horas hora(s)\n";
    echo "$minutos minuto(s)\n";
    echo "$segundos segundo(s)\n";

?>