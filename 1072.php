<?php

$n = readline();

$in = 0;
$out = 0;

for($i = 0; $i < $n; $i++)
{
    $x = readline();

    if($x >= 10 && $x <= 20)
    {
        $in++;
    }
    else
    {
        $out++;
    }

}

echo "$in in\n";
echo "$out out\n";

?>