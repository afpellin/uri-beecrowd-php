<?php
$valor=explode(" ", readline());
$x=$valor[0];
$y=$valor[1];
$z=$valor[2];

sort($valor);
foreach($valor as $value=>$val){
    echo "$val\n";
}
echo "\n";
echo "$x\n";
echo "$y\n";
echo "$z\n";
?>