<?php
$valores= explode(" ", readline());

$x= (int)$valores[0];
$y= (int)$valores[1];

for($i=1; $i<=$y; $i++){
    echo $i;
    if($i%$x == 0){
        echo "\n";
    }else{
        echo " ";
    }
}
?>