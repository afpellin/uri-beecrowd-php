<?php
function main() {
	$X = 0;
	$N = 0;
	$a = 0;
	$b = 0;
	scanf("%d %d",&$X,&$N);
	while ($N <= 0) {
		scanf("%d",&$N);
	}
	for ($a = 1; $a <= $N; $a++) {
		$b = $b + $X;
		$X++
	}
	printf("%d\n",$b);
	return 0;
}
?>