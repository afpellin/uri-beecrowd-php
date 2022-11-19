<?php

$valores = explode(" ", readline());

$a;
$b;
$c;

if($valores[0] > $valores[1] && $valores[0] > $valores[2])
{
    $a = $valores[0];

    if($valores[1] > $valores[2])
    {
        $b = $valores[1];
        $c = $valores[2];
    }
    else
    {
        $b = $valores[2];
        $c = $valores[1];
    }
    
}
elseif($valores[0] < $valores[1] && $valores[0] < $valores[2])
{
    $c = $valores[0];

    if($valores[1] > $valores[2])
    {
        $a = $valores[1];
        $b = $valores[2];
    }
    else
    {
        $a = $valores[2];
        $b = $valores[1];
    }

}
else
{
    $b = $valores[0];

    if($valores[1] > $b)
    {
        $a = $valores[1];
        $c = $valores[2];
    }
    else
    {
        $c = $valores[1];
        $a = $valores[2];
    }

}

if($a >= $b + $c)
{
    echo "NAO FORMA TRIANGULO\n";
}
else
{

    if(pow($a, 2) == pow($b, 2) + pow($c, 2))
    {
        echo "TRIANGULO RETANGULO\n";
    }
    if(pow($a, 2) > pow($b, 2) + pow($c, 2))
    {
        echo "TRIANGULO OBTUSANGULO\n";
    }
    if(pow($a, 2) < pow($b,2) + pow($c, 2))
    {
        echo "TRIANGULO ACUTANGULO\n";
    }
    if($a == $b && $a == $c)
    {
        echo "TRIANGULO EQUILATERO\n";
    }
    if($a == $b && $a != $c || $b == $c && $b != $a || $c == $a && $c != $b)
    {
        echo "TRIANGULO ISOSCELES\n";
    }

}

?>