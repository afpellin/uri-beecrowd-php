<?php
$n=(int)readline();

for($i=0; $i<$n; $i++){
    $contar=0;
    $x=readline();

    for($j=2; $j<$x; $j++){
        if($x % $j == 0){
            $contar++;
        }
    }
    if($contar == 0){
        echo "$x eh primo\n";
    }else{
        echo "$x nao eh primo\n";
    }
}
?>
