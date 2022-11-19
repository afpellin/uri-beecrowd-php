<?php
$valores=explode(" ", readline());
$hora1=(int)$valores[0];
$min1=(int)$valores[1];
$hora2=(int)$valores[2];
$min2=(int)$valores[3];

$inicial= $hora1 * 60 + $min1;
$final=$hora2 * 60 + $min2;

$duracao=($final + 1440) - $inicial;

if($duracao > 1440){
    $duracao = $duracao - 1440;
}
$duracaoH=(int)($duracao / 60);
$duracaoM=(int)($duracao % 60);

echo "O JOGO DUROU $duracaoH HORA(S) E $duracaoM MINUTO(S)\n";
?>