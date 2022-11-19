<?php
$t= (int)readline();
for($i=1; $i<=$t; $i++){
$vet=explode(" ", readline());
$PA=(int)($vet[0]);
$PB=(int)($vet[1]);
$G1=(float)($vet[2]);
$G2=(float)($vet[3]);

$crescA=$PA;
$crescB=$PB;

$anos= 0;

while($crescA<=$crescB){
    $crescA =$crescA + (int)($crescA*($G1/100));
    $crescB =$crescB + (int)($crescB*($G2/100));
    $anos++;
}

if ($anos>100){
    echo "Mais de 1 seculo.\n";
}else{
    echo "$anos anos.\n";
}
}
?>