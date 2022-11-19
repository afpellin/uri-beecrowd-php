<?php
function main() {
	$N = 0;
	$i = 0;
	$factorial = 1;
	scanf("%d",&$N);
	for ($i = $N; 1 <= $i; $i--) {
		$factorial = $factorial * $i;
	}
	printf("%d\n",$factorial);
	return 0;
}
?>