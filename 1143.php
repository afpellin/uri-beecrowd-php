<?php
function main() {
	$N = 0;
	$i = 0;
	scanf("%d",&$N);
	for ($i = 1; $i <= $N; $i++) {
		printf("%d %d %d\n",$i,$i * $i,$i * $i * $i);
	}
	return 0;
}
?>