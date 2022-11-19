<?php

(int)$n = readline();

for($i = 1; $i <= 10000; $i++)
{
    if((int)($n % $i == 2))
    {
        echo $i."\n";
    }
}

?>