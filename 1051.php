<?php
$salario = readline();
if($salario<=2000){
    echo "Isento\n";
}elseif($salario<=3000){
    $resto=$salario-2000;
    $imposto=$resto*0.08;
    echo "R$ ". number_format($imposto, 2,".","")."\n";
}elseif($salario<4500){
    $resto=$salario-3000;
    $imposto=($resto*0.18)+(1000*0.08);
    echo "R$ ". number_format($imposto, 2,".","")."\n";  
}else{
    $resto=$salario-4500;
    $imposto=($resto*0.28)+(1500*0.18)+(1000*0.08);
    echo "R$ ". number_format($imposto, 2,".","")."\n";    
}
?>