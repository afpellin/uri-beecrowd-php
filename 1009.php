<?php
    fgets(STDIN);
    
    $sal = fgets(STDIN);
    $ven = fgets(STDIN);

    $tot = number_format(round($sal + ($ven * 0.15), 2, PHP_ROUND_HALF_EVEN), 2, '.', '');
    
    echo "TOTAL = R$ $tot\n";
?>