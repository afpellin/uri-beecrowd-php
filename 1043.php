<?php
$valor=explode(" ", readline());
$x=$valor[0];
$y=$valor[1];
$z=$valor[2];

if(($x<$y+$z) && ($y<$x+$z) &&($z<$x+$y)){
    $perimetro= $x+$y+$z;
    echo "Perimetro = ". number_format($perimetro, 1,".","")."\n";
}else{
    $area=($x+$y)*$z/2;
    echo "Area = ". number_format($area, 1,".","")."\n";
}
?>