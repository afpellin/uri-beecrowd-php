<?php
function main() {
	$x = 0;
	$y = 0;
	$i = 0;
	$n = 0;
	$j = 0;
	$k = 0;
	$soma = 0;
	$aux = 0;
	scanf("%d",&$n);
	for ($i = 0; $i < $n; $i++) {
		scanf("%d %d",&$x,&$y);
		for ($k = 0; , 
		$j = $x;; $k < $y; $j++) {
			if ($j % 2 != 0) {
				$soma = $soma + $j;
				$k++
			}
		}
		printf("%d\n",$soma);
		$soma = 0;
	}
}
?>