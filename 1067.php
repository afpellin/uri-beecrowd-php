<?php

(int)$x = readline();

for($i = 1; $i < $x; $i += 2)
{
    echo "$i\n";
}

if($x % 2 != 0)
{
    echo $x."\n";
}

?>