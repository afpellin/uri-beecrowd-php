<?php

(int)$n = readline();

for($i = 2; $i < $n; $i += 2)
{
    $pot = pow($i, 2);
    echo "$i^2 = $pot\n";
}

if($n % 2 == 0)
{
    $pot = pow($n, 2);
    echo "$n^2 = $pot\n";
}

?>