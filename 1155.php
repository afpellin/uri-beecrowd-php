<?php
$soma=1;
for($i=2; $i<=100;$i++){
    $soma=$soma+1/$i;
    $S=$soma;
}
echo number_format($S,2,".","")."\n";
?>